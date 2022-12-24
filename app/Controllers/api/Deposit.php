<?php

namespace App\Controllers\api;

use App\Controllers\BaseController;

class Deposit extends BaseController
{
    public function __construct()
    {
        // $this->MemberModel = new \App\Models\MemberModel();
        $this->BankSettingModel = new \App\Models\BankSettingModel();
        $this->PromptpayRefillModel = new \App\Models\PromptpayRefillModel();
        $this->TicketsModel = new \App\Models\TicketsModel();
    }

    public function promptpayKbank()
    {
       
        try {
            $inputBankAccountNo = $this->request->getGet('bank_account_no');
            $inputTag = $this->request->getGet('tag');
            $inputSender = $this->request->getGet('sender');
            $inputMessage = $this->request->getGet('message');
            $message = $inputMessage;

            // หาบัญชีที่สร้างไว้ในระบบ (เปิดใช้งาน)
            $bankSetting = $this->BankSettingModel->getBankSettingByBankTypeAndBankIDAndBankAccountNoAndStatusAndSystem('deposit', BANK_KBANK_ID, $inputBankAccountNo, 'on', 'SMS');
       
            // กรณี: หัวข้อความไม่ตรง
            if (($inputSender !== TITLE_SENDER_KBANK) || ($inputSender !== TITLE_SENDER_SCB)) {
                return;
            }

            // กรณี: ไม่พบบัญชี
            if (!$bankSetting) {
                return;
            }

            // กรณี: verify tag ไม่ตรง
            // if ($bankSetting->tag != $inputTag) {
            //     return;
            // }

            // Ex. ตัวอย่าง SMS
            // 06/12/65 17:27 บช X-5109 เงินเข้า 5.10 คงเหลือ 5.10 บ.| (ต่างธนาคารโอนเข้ามา)
            // 06/12/65 17:29 บช X-5109 รับโอนจาก X-0100 5.20 คงเหลือ 10.30 บ.|(กสิกรโอนเข้ามา)

            // http://localhost:8080/api/deposit/sms-promptpay-kbank?bank_account_no=เลขพร้อมเพย์&tag=TAGที่ลงทะเบียนไว้ในระบบ&sender=Kbank&message=
            //https://eventups.com/api/deposit/sms-promptpay-kbank?bank_account_no=เลขพร้อมเพย์&tag=TAGที่ลงทะเบียนไว้ในระบบ&sender=027777777&message=

            $isOtherBank = preg_match("/(*UTF8)(\d{2}\/\d{2}\/\d{2})\s(\d{2}:\d{2})\sบช\sX-\d+\sเงินเข้า\s(.*?)\sคงเหลือ\s(.*)\sบ\./", $message, $messages);
            if (!$isOtherBank) preg_match("/(*UTF8)(\d{2}\/\d{2}\/\d{2})\s(\d{2}:\d{2})\sบช\sX-\d+\sรับโอนจาก\sX-\d+\s(.*?)\sคงเหลือ\s(.*)\sบ\./", $message, $messages);

            // กรณี: ที่ได้ Pattern ไม่ตรงกับความต้องการ ให้หยุดทำงาน
            if (count($messages) !== 5) return;

            // try {
            //     $insertSmsReceiveID = $this->SmsReceiveModel->insertSmsReceive([
            //         'bank_setting_id' => $bankSetting->id,
            //         'sender' => $inputSender,
            //         'message' => $message,
            //         'remain' => str_replace(',', '', $messages[4])
            //     ]);
            // } catch (\Exception $e) {
            //     $insertSmsReceiveID = false;
            // }

            // if (!$insertSmsReceiveID) return;

            $splitDate = explode('/', $messages[1]);

            // เวลาที่ฝากเข้ามา
            $datetimeCheck = date('Y-m-d', strtotime('25' . $splitDate[2] . '-' . $splitDate[1] . '-' . $splitDate[0] . '-543 years')) . ' ' . $messages[2] . ':00';

            // ยอดเงินที่ฝากเข้ามา
            $depositAmount = str_replace(',', '', $messages[3]);

            $promptpayRefill = $this->PromptpayRefillModel->getPromptpayRefillByAmountRandomAndStatusAndBetweenCreatedAt(
                $depositAmount,
                PROMPTPAY_REFILL_STATUS_WAIT,
                date('Y-m-d H:i:s', strtotime($datetimeCheck . '-30 minutes')),
                date('Y-m-d H:i:59', strtotime($datetimeCheck))
            );
            if (!$promptpayRefill) return;

            $updatePromptpayRefill = $this->PromptpayRefillModel->updatePromptpayRefillByIDAndVersion($promptpayRefill->id, $promptpayRefill->version, [
                'status'  => PROMPTPAY_REFILL_STATUS_SUCCESS,
                'version' => $promptpayRefill->version . '_001'
            ]);
            if (!$updatePromptpayRefill) return;

            $buffer_datetime = date("Y-m-d H:i:s");

            //แก้ไขจำนวนที่ขาย
            $updateCountSale = $this->TicketsModel->updateTicketsByID($promptpayRefill->transaction_id, [
                    'ticket_pcs_count_sale' => $promptpayRefill->transaction_count,
                    'ticket_date_update_at' => $buffer_datetime
             ]);

             if($updateCountSale){
                $FBDataModel = new \App\Models\FBDataModel();
                $FBData = $FBDataModel->getFBDataByFBID($promptpayRefill->member_id);
                $dataTickets = $this->TicketsModel->getTicketsByID($promptpayRefill->transaction_id);
                // Line notification
                $sumprice = $dataTickets->ticket_price * $promptpayRefill->transaction_count;
                $Message_Nofity = '';
                // $Image_Nofity = '';
                $Message_Nofity = $FBData->fb_name . "\n" . 'ทำการซื้อบัตรคอนเสิร์ต ' . $dataTickets->ticket_name. ' จำนวน ' .$promptpayRefill->transaction_count.
                ' ใบ ราคา '.$sumprice.' บาท';
                // $Message_Nofity = session()->get('username') . "\n" . 'ทำการเปลี่ยนสถานะเอกสาร' . "\n" . 'จาก ' . $booking->status . ' เป็น ' .
                //     $data_Booking_Day[0]->status . "\n" . 'เอกสารของคุณ ' . $data_Booking_Day[0]->customer_title . "\n" . 'ทำการซื้อรถ ' .
                //     $data_Booking_Day[0]->car_stock_title . "\n" . 'กับพนักงานชื่อ ' . $data_Booking_Day[0]->employee_title;

                // $token = $nofity_Day->notify_line_token_status;
                $token = LINE_NOTIFY_TOKEN; // LINE Token
                // $token = 'FcXOayjLo5wEbxSI9nGPwF3BK0nenNhyR5fxGOEKfAC'; // LINE Token
                //Message
                $mymessage = $Message_Nofity;
                $data = array(
                    'message' => $mymessage,
                );
                $chOne = curl_init();
                curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
                curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($chOne, CURLOPT_POST, 1);
                curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
                curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
                $headers = array('Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
                curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($chOne);
                //Check error
                if (curl_error($chOne)) {
                    echo 'error:' . curl_error($chOne);
                } else {
                    $result_ = json_decode($result, true);
                    // echo "status : " . $result_['status'];
                    // echo "message : " . $result_['message'];
                }
                //Close connection
                curl_close($chOne);
            }

            // เช็คว่ามียูสในระบบจริง ๆ หรือไม่
            // $member = $this->MemberModel->getMemberByID($promptpayRefill->member_id);
            // if (!$member) return;

            // TODO:: ทำการเติมเงิน
        } catch (\Exception $e) {
            // TODO:: จัดการ error
        }

        $status = 200;
        $response = [
            'message' => 'success'
        ];

        return $this->response
            ->setStatusCode($status)
            ->setContentType('application/json')
            ->setJSON($response);
    }
}