<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\PromptPay;

class Deposit extends BaseController
{
    public function __construct()
    {
        $this->BankSettingModel = new \App\Models\BankSettingModel();
        $this->PromptpayRefillModel = new \App\Models\PromptpayRefillModel();
        $this->TicketsModel = new \App\Models\TicketsModel();
    }

    public function generatePromptPayQR()
    {
        $status = 200;
        $response['success'] = 0;
        $response['message'] = '';

        try {
            // HANDLE REQUEST
            $requestPayload = $this->request->getJSON();
            $amount = 0;
            $amount = (int) str_replace(',', '', $requestPayload->price_sum);
            // $amount = (int) str_replace(',', '', 200.00);
            if (!is_int($amount)) throw new \Exception('ไม่สามารถใส่ทศนิยมได้', ERROR_CODE_INVALID);
            if ($amount <= 0) throw new \Exception('จำนวนเงินไม่ถูกต้อง', ERROR_CODE_INVALID);


            $memberID = session()->get('userID');

            // ค้นหาว่า qrcode ที่ยังไม่หมดอายุ
            // $promptpayQR = $this->getPromptPayQRByMemberID($memberID);

            // // กรณี : มี qrcode ที่ยังไม่หมดอายุจะเอาส่ง qrcode อันเดิมกลับมา
            // if ($promptpayQR) {
            //     $response['success'] = 1;
            //     $response['message'] = 'success';
            //     $response['data'] = $promptpayQR['data'];

            //     return $this->response
            //         ->setStatusCode($status)
            //         ->setContentType('application/json')
            //         ->setJSON($response);
            // }

            $bankSetting = $this->BankSettingModel->getBankSettingPromptPay();
            if (!$bankSetting) throw new \Exception('ไม่สามารถสร้าง QRCode ได้', ERROR_CODE_INVALID);

            if ($bankSetting->promptpay_status !== BANK_SETTING_PROMPTPAY_STATUS_ON) throw new \Exception('ไม่สามารถสร้าง QRCode ได้', ERROR_CODE_INVALID);

            $this->PromptpayRefillModel->updatePromptpayRefillOnlyExpired(); // เคลียร์ qrcode ที่หมดอายุ

            $amountRandom = $this->generateAmountPromptPayByAmount($amount); // random ทศนิยมของยอดเงิน
            if (!$amountRandom) throw new \Exception('ขณะนี้มีผู้ใช้จำนวนมาก', ERROR_CODE_INVALID);
            if (!$bankSetting->bank_account_no) throw new \Exception('เกิดข้อผิดพลาด', ERROR_CODE_INVALID);

            $qrcode = PromptPay::setPhone($bankSetting->bank_account_no)::setAmount($amountRandom)::build(); // สร้าง QRCode
            if (!$qrcode) throw new \Exception('เกิดข้อผิดพลาด', ERROR_CODE_INVALID);

            $createPromptpayQR = ((int) session()->get('create_promptpay_qr')) + 1;
            if ($createPromptpayQR > 5) throw new \Exception('กรุณาลองใหม่อีกครั้งหลัง 1 นาที', ERROR_CODE_INVALID);
            session()->setTempdata('create_promptpay_qr', $createPromptpayQR, 60);

            // เอายอดเงินที่ random ขึ้นมาเก็บลง db ไว้เทียบ
            $this->PromptpayRefillModel->insertPromptpayRefill([
                'member_id'       => (int)$memberID,
                'amount'          => $amount,
                'amount_random'   => $amountRandom,
                'qrcode'          => $qrcode,
                'bank_id'         => $bankSetting->bank_id,
                'bank_name'       => $bankSetting->bank_name,
                'bank_setting_id' => $bankSetting->id,
                'bank_account_no' => $bankSetting->bank_account_no,
                'transaction_id' => $requestPayload->id_tickets,
                'transaction_count' => $requestPayload->count_tickets_in_stock_update,
                'version'         => $memberID . '_' . time()
            ]);

            $url = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $qrcode . '&choe=UTF-8';
            $response['success'] = 1;
            $response['message'] = 'success';
            $response['data']['qrcode'] = $qrcode;
            $response['data']['expired_in'] = (QR_PROMPTPAY_EXPIRED * 60);
            $response['data']['amount_format'] = number_format($amountRandom, 2);
            $response['data']['html'] = '<img style="background: url(\'' . base_url('/landing/assets/img/loading.gif') . '\') center center / 50px no-repeat;" src="' . $url . '" />';
        } catch (\Exception $e) {
            $response['success'] = 0;
            $response['message'] = $e->getCode() === ERROR_CODE_INVALID ? $e->getMessage() : $e->getLine();
        }

        return $this->response
            ->setStatusCode($status)
            ->setContentType('application/json')
            ->setJSON($response);
    }

    public function cancelPromptPayQR()
    {
        $status = 200;
        $response['success'] = 0;
        $response['message'] = '';

       $canceled = $this->PromptpayRefillModel->updatePromptpayRefillByMemberIDAndStatus(session()->get('userID'), PROMPTPAY_REFILL_STATUS_WAIT, [
            'status' => PROMPTPAY_REFILL_STATUS_CANCEL,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($canceled) {
            $response['success'] = 1;
            $response['message'] = 'success';
        }

        return $this->response
            ->setStatusCode($status)
            ->setContentType('application/json')
            ->setJSON($response);
    }

    public function getPromptPayQRByMemberID($memberID)
    {
        
       
        $promptPayRefill = $this->PromptpayRefillModel->getPromptpayRefillByMemberIDAndStatus($memberID, PROMPTPAY_REFILL_STATUS_WAIT);

        if ($promptPayRefill) {
            $now = date('Y-m-d H:i:s');
            $minutes = intval((strtotime($now) - strtotime($promptPayRefill->created_at)) / 1);
            $seconds = intval((strtotime($now) - strtotime($promptPayRefill->created_at)));
            $isQRCodeExpired = $minutes >= QR_PROMPTPAY_EXPIRED;

            if (!$isQRCodeExpired) {
                $url = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $promptPayRefill->qrcode . '&choe=UTF-8';
                $expired = (QR_PROMPTPAY_EXPIRED * 60) - $seconds;

                $data['qrcode'] = $promptPayRefill->qrcode;
                $data['expired_in'] = $expired;
                $data['amount'] = $promptPayRefill->amount_random;
                $data['html'] = '<img id="imgQRCode" data-expired-in="' . $expired . '" style="background: url(\'' . base_url('/assets/img/loading.gif') . '\') center center / 50px no-repeat;" src="' . $url . '" />';

                return $data;
            }

            $this->PromptpayRefillModel->updatePromptpayRefillByMemberIDAndStatus($memberID, PROMPTPAY_REFILL_STATUS_WAIT, [
                'status' => PROMPTPAY_REFILL_STATUS_CANCEL
            ]);
        }

        return null;
    }

    public function generateAmountPromptPayByAmount($amount)
    {
        $amounts = $this->PromptpayRefillModel->getPromptpayRefillAmountRandomAllByAmountAndStatus($amount, PROMPTPAY_REFILL_STATUS_WAIT);
        $amounts = array_column($amounts, null, 'amount_random');
        $blacklist = array_keys($amounts);
        $range = array_map(function ($num) use ($amount) {
            return $amount . '.' . str_pad($num, 2, '0', STR_PAD_LEFT);
        }, range(1, 99));
        $valids = array_diff($range, $blacklist);
        shuffle($valids);
        return $valids[0] ?? null;
    }
}
