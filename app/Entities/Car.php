<?php

namespace App\Entities\Car;

use CodeIgniter\Entity\Entity;

class Car extends Entity
{
    protected $datamap = [
        "id" => "id",
        "manufacturer_name" => "manufacturer_name",
        "model" => "model",
        "model_code" => "model_code"
    ];
    protected $dates   = [];
    protected $casts   = [];
}
