<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransectionCount extends Migration
{
    public function up()
    {
        $db = \Config\Database::connect();
        $sql = "ALTER TABLE `promptpay_refills` add  `transaction_count` VARCHAR(20) null AFTER `transaction_id` ";
        $db->query($sql);
    }

    public function down()
    {
        //
    }
}
