<?php

namespace App\Models;

class PromptpayRefillModel
{
    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getPromptpayRefillAll()
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->orderBy('created_at', 'DESC')
            ->get()
            ->getResult();
    }

    public function getPromptpayRefillByID($id)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('id', $id)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function insertPromptpayRefill($data)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updatePromptpayRefillByID($id, $data)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder->where('id', $id)->update($data);
    }

    public function updatePromptpayRefillByMemberIDAndStatus($memberID, $status, $data)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder->where('member_id', $memberID)->where('status', $status)->update($data);
    }

    public function updatePromptpayRefillByIDAndVersion($id, $version, $data)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder->where('id', $id)->where('version', $version)->update($data) ? $this->db->affectedRows() : 0;
    }

    public function getPromptpayRefillByMemberIDAndStatus($memberID, $status)
    {
        $builder = $this->db->table('promptpay_refills');


        return $builder
            ->where('member_id', $memberID)
            ->where('status', $status)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function getPromptpayRefillAllByMemberIDAndStatus($memberID, $status)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('member_id', $memberID)
            ->where('status', $status)
            ->get()
            ->getResult();
    }

    public function getPromptpayRefillByStatusAndAmount($status, $amount)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('status', $status)
            ->where('amount', $amount)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function getPromptpayRefillByMemberIDAndStatusAndAmount($memberID, $status, $amount)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('member_id', $memberID)
            ->where('status', $status)
            ->where('amount', $amount)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function getPromptpayRefillAmountRandomAllByAmount($amount)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->select('amount_random')
            ->where('amount', $amount)
            ->get()
            ->getResult();
    }

    public function getPromptpayRefillAmountRandomAllByAmountAndStatus($amount, $status)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->select('amount_random')
            ->where('amount', $amount)
            ->where('status', $status)
            ->get()
            ->getResult();
    }

    public function getPromptpayRefillByAmountRandom($amountRandom)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('amount_random', $amountRandom)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function getPromptpayRefillByAmountRandomAndStatus($amountRandom, $status)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('amount_random', $amountRandom)
            ->where('status', $status)
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function getPromptpayRefillByAmountRandomAndStatusAndBetweenCreatedAt($amountRandom, $status, $createdAtStart, $createdAtEnd)
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('amount_random', $amountRandom)
            ->where('status', $status)
            // ->where("created_at BETWEEN '$createdAtStart' AND '$createdAtEnd'")
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get()
            ->getRow();
    }

    public function updatePromptpayRefillOnlyExpired()
    {
        $builder = $this->db->table('promptpay_refills');

        return $builder
            ->where('status', PROMPTPAY_REFILL_STATUS_WAIT)
            ->where('created_at <= "' . date('Y-m-d H:i:s', strtotime('now' . '-5 minutes')) . '"')
            ->update([
                'status' => PROMPTPAY_REFILL_STATUS_EXPIRED
            ]);
    }
}