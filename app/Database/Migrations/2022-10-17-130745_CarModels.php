<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CarModels extends Migration
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
            "manufacturer_name" => [
                "type" => "varchar",
                "constraint" => 255
            ],
            "model" => [
                "type" => "varchar",
                "constraint" => 255
            ],
            "model_code" => [
                "type" => "varchar",
                "constraint" => 255
            ]
        ]);

        $this->forge->addPrimaryKey("id");

        $this->forge->createTable("car_models");
    }

    public function down()
    {
        $this->forge->dropTable("car_models");
    }
}
