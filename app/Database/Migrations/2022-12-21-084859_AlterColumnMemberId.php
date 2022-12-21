<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterColumnMemberId extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();
        $sql = "ALTER TABLE `promptpay_refills` MODIFY  `member_id` VARCHAR(100) null";
        $db->query($sql);
    }

    public function down()
    {
        //
    }
}
