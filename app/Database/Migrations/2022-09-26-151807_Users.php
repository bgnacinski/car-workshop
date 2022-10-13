<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            "username" => [
                "type" => "varchar",
                "constraint" => 255,
                "null" => false
            ],
            "password" => [
                "type" => "text",
                "null" => false
            ],
            "access_key" => [
                "type" => "varchar",
                "constraint" => 512,
                "unique" => true,
                "null" => false
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

        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
