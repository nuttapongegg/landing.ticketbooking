<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableFBDatas extends Migration
{
    public function up()
    {
        //
        $db = \Config\Database::connect();
        $sql = "CREATE TABLE `fb_data` (`id` INT NOT NULL AUTO_INCREMENT , `fb_id` VARCHAR(100)  NULL, `fb_name` VARCHAR(100)  NULL, `fb_email` VARCHAR(100)  NULL, `fb_picture` VARCHAR(255)  NULL, `fb_login_status` VARCHAR(1)  NOT NULL , `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME NULL DEFAULT NULL , `deleted_at` DATETIME NULL DEFAULT NULL , PRIMARY KEY (`id`))";
        $db->query($sql);
    }

    public function down()
    {
        //
    }
}
