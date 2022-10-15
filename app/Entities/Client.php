<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Client extends Entity
{
    protected $datamap = [
        "id" => "id",
        "first_name" => "first_name",
        "last_name" => "last_name",
        "email_address" => "email_address",
        "phone_number" => "phone_number",
        "created_at" => "created_at",
        "updated_at" => "updated_at",
        "deleted_at" => "deleted_at"
    ];
    protected $dates   = [];
    protected $casts   = [
        "id" => "int"
    ];
}
