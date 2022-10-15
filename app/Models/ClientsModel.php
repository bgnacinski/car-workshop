<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Client;

class ClientsModel extends Model
{
    protected $table            = 'clients';
    protected $useAutoIncrement = true;
    protected $returnType       = Client::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ["first_name", "last_name", "email_address", "phone_number", "created_at", "updated_at", "deleted_at"];

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

    public function beforeInsert(array $data){
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

    public function getAllClients(int $limit = 0, int $offset = 0) :array{
        $result = $this->findAll($limit, $offset);

        if($result){
            return [
                "status" => "success",
                "clients" => $result
            ];
        }
        else{
            return [
                "status" => "empty"
            ];
        }
    }

    public function getClientByID(int $client_id) :array{
        $client_data = $this->find($client_id);

        if($client_data){
            return [
                "status" => "success",
                "client_data" => $client_data
            ];
        }
        else{
            return [
                "status" => "empty"
            ];
        }
    }
}
