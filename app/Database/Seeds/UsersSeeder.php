<?php

namespace App\Database\Seeds;

use App\Models\UsersModel;
use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            "first_name" => "Tony",
            "last_name" => "Stark",
            "username" => "tony.stark",
            "password" => password_hash("qwe", PASSWORD_DEFAULT)
        ];

        $model = new UsersModel();
        $model->save($data);
    }
}
