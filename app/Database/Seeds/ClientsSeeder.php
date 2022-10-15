<?php

namespace App\Database\Seeds;

use App\Models\ClientsModel;
use CodeIgniter\Database\Seeder;

class ClientsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            "first_name" => "Will",
            "last_name" => "Smith",
            "email_address" => "will.smith@example.com",
            "phone_number" => "+48 321 321 321"
        ];

        $model = new ClientsModel();
        $model->save($data);
    }
}
