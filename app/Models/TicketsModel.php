<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class TicketsModel
{

    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getTicketsAll()
    {
        $builder = $this->db->table('tickets');

        return $builder
            ->orderBy('ticket_created_by', 'DESC')
            ->get()
            ->getResult();
    }

    public function getTicketsByID($id)
    {
        $builder = $this->db->table('tickets');

        return $builder->where('id', $id)->get()->getRow();
    }

    public function insertTickets($data)
    {
        $builder = $this->db->table('tickets');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updateTicketsByID($id, $data)
    {
        $builder = $this->db->table('tickets');

        return $builder->where('id', $id)->update($data);
    }

    public function deleteTicketsByID($id)
    {
        $builder = $this->db->table('tickets');

        return $builder->where('id', $id)->delete();
    }
}