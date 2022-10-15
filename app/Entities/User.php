<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [
        "id" => "id",
        "first_name" => "first_name",
        "last_name" => "last_name",
        "username" => "username",
        "password" => "password",
        "access_key" => "access_key",
        "created_at" => "created_at",
        "updated_at" => "updated_at",
        "deleted_at" => "deleted_at"
    ];
    protected $dates   = [];
    protected $casts   = [
        "id" => "int",
        "created_at" => "int",
        "updated_at" => "int",
        "deleted_at" => "int"
    ];
}
