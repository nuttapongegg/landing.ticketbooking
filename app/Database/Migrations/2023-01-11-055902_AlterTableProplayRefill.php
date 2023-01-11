<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableProplayRefill extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();
        $sql = "ALTER TABLE `promptpay_refills` add  `transaction_but_now` VARCHAR(20) null AFTER `transaction_count` ";
        $db->query($sql);
    }

    public function down()
    {
        //
    }
}
