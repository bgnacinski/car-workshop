<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "int",
                "constraint" => 11,
                "auto_increment" => true,
                "unique" => true
            ],
            "first_name" => [
                "type" => "varchar",
                "constraint" => 255,
                "null" => false
            ],
            "last_name" => [
                "type" => "varchar",
                "constraint" => 255,
                "null" => false
            ],
            "email_address" => [
                "type" => "varchar",
                "constraint" => 255,
                "null" => true
            ],
            "phone_number" => [
                "type" => "varchar",
                "constraint" => 15,
                "null" => true
            ],
            "created_at" => [
                "type" => "varchar",
                "constraint" => 50,
                "null" => false
            ],
            "updated_at" => [
                "type" => "varchar",
                "constraint" => 50,
                "null" => true
            ],
            "deleted_at" => [
                "type" => "varchar",
                "constraint" => 50,
                "null" => true
            ]
        ]);

        $this->forge->addPrimaryKey("id");

        $this->forge->createTable("clients");
    }

    public function down()
    {
        $this->forge->dropTable("clients");
    }
}
