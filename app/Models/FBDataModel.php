<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class FBDataModel
{

    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getFBDataAll()
    {
        $builder = $this->db->table('fb_data');

        return $builder
            ->orderBy('created_at', 'DESC')
            ->get()
            ->getResult();
    }

    // public function getFBDataAllNoSpAdmin()
    // {
    //     $builder = $this->db->table('fb_data');

    //     return $builder
    //         ->where('id !=' , 1)
    //         ->orderBy('created_at', 'DESC')
    //         ->get()
    //         ->getResult();
    // }

    public function getFBDataByID($id)
    {
        $builder = $this->db->table('fb_data');

        return $builder->where('id', $id)->get()->getRow();
    }

    public function getFBDataByFBID($id)
    {
        $builder = $this->db->table('fb_data');

        return $builder->where('fb_id', $id)->get()->getRow();
    }

    public function insertFBData($data)
    {
        $builder = $this->db->table('fb_data');

        return $builder->insert($data) ? $this->db->insertID() : false;
    }

    public function updateFBDataByID($id, $data)
    {
        $builder = $this->db->table('fb_data');

        return $builder->where('id', $id)->update($data);
    }

    public function deleteFBDataByID($id)
    {
        $builder = $this->db->table('fb_data');

        return $builder->where('id', $id)->delete();
    }

    public function getFBData($id)
    {
        $builder = $this->db->table('fb_data');
        return $builder->where('fb_id', $id)->get()->getResult();
    }

    public function logoutFBDataByFBID($id, $data)
    {
        $builder = $this->db->table('fb_data');

        return $builder->where('fb_id', $id)->update($data);
    }
}