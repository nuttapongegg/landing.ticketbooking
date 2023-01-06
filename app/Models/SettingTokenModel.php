<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class SettingTokenModel
{

    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getTokenAll()
    {
        $builder = $this->db->table('setting_token');

        return $builder
            // ->orderBy('created_at', 'DESC')
            ->get()
            // ->getRow();
            ->getResult();
    }

    public function getTokenByID($id)
    {
        $builder = $this->db->table('setting_token');

        return $builder->where('id', $id)->get()->getRow();
    }

    public function insertToken($data)
    {
        $builder = $this->db->table('setting_token');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updateTokenByID($id, $data)
    {
        $builder = $this->db->table('setting_token');

        return $builder->where('id', $id)->update($data);
    }

    public function deleteTokenByID($id)
    {
        $builder = $this->db->table('setting_token');

        return $builder->where('id', $id)->delete();
    }

    public function getTicketByTokenID()
    {
        $sql = "SELECT * FROM tickets JOIN setting_token ON setting_token.ticket_id = tickets.id ORDER BY tickets.id DESC";

        $builder = $this->db->query($sql);
        return $builder->getResult();
    }
    public function getTicketNoToken()
    {
        $sql = "SELECT * FROM `tickets` WHERE token_id IS NULL ORDER BY tickets.id DESC";

        $builder = $this->db->query($sql);
        return $builder->getResult();
    }
    public function getTokenID($id)
    {
        $builder = $this->db->table('setting_token');

        return $builder->where('ticket_id', $id)->get()->getRow();
    }
}