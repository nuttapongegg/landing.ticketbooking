<?php

namespace App\Models;

class BankSettingModel
{
    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function insertBankSetting($data)
    {
        $builder = $this->db->table('bank_settings');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updateBankSettingByID($id, $data)
    {
        $builder = $this->db->table('bank_settings');

        return $builder->where('id', $id)->update($data);
    }

    public function deleteBankSettingByID($id)
    {
        $builder = $this->db->table('bank_settings');

        return $builder->where('id', $id)->delete();
    }

    public function getBankSettingPromptPay()
    {
        $sql = "
            SELECT * FROM bank_settings
            WHERE bank_settings.bank_type = 'deposit'
            AND bank_settings.status = 'on'
            AND bank_settings.promptpay_status = 'on'
            AND bank_settings.deleted_at IS NULL
        ";

        $builder = $this->db->query($sql);

        return $builder->getRow();
    }

    public function getBankSettingByBankTypeAndBankIDAndBankAccountNoAndStatusAndSystem($bankType, $bankID, $bankAccountNo, $status, $system)
    {
        $builder = $this->db->table('bank_settings');

        return $builder
            ->where('bank_type', $bankType)
            ->where('bank_id', $bankID)
            ->where('bank_account_no', $bankAccountNo)
            ->where('status', $status)
            ->where('system', $system)
            ->where('deleted_at', NULL)
            ->get()
            ->getRow();
    }
}