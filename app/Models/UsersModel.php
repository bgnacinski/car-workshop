<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\User::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ["first_name", "last_name", "username", "password", "access_key", "created_at", "updated_at", "deleted_at"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ["beforeInsert"];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ["beforeUpdate"];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = ["beforeDelete"];
    protected $afterDelete    = [];

    private function generateSeed($seed_length){
        return (string)random_bytes($seed_length).uniqid();
    }

    private function generateAccessKey($seed_length = 100){
        $seed = $this->generateSeed($seed_length);
        $current_time = md5(time());
        return hash("sha256", md5($seed).$current_time);
    }

    public function beforeInsert(array $data){
        $data["data"]["access_key"] = $this->generateAccessKey();
        $data["data"]["created_at"] = gmdate("c");

        return $data;
    }

    public function beforeUpdate(array $data){
        $data["data"]["updated_at"] = gmdate("c");

        return $data;
    }

    public function beforeDelete(array $data){
        $data["data"]["deleted_at"] = gmdate("c");

        return $data;
    }
}
