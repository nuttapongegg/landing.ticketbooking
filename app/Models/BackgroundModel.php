<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class BackgroundModel
{

    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getBackgroundAll()
    {
        $builder = $this->db->table('background');

        return $builder
            ->get()
            ->getRow();
    }

    public function getBackgroundByID($id)
    {
        $builder = $this->db->table('background');

        return $builder->where('id', $id)->get()->getRow();
    }

    public function insertBackground($data)
    {
        $builder = $this->db->table('background');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updateBackgroundByID($id, $data)
    {
        $builder = $this->db->table('background');

        return $builder->where('id', $id)->update($data);
    }

    public function deleteBackgroundByID($id)
    {
        $builder = $this->db->table('background');

        return $builder->where('id', $id)->delete();
    }
}