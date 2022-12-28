<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AltertablerefaillsColumnStatusLink extends Migration
{
    public function up()
    {
        
        $db = \Config\Database::connect();
        $sql = "ALTER TABLE `promptpay_refills` add  `status_link` VARCHAR(20) null AFTER `status` ";
        $db->query($sql);
    }

    public function down()
    {
        //
    }
}
