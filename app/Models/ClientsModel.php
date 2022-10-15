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
    protected $validationRules      = [
        "first_name" => "required|max_length[255]",
        "last_name" => "required|max_length[255]",
        "email_address" => "required|is_unique[clients.email_address]|max_length[255]",
        "phone_number" => "required|is_unique[clients.phone_number]|max_length[15]"
    ];
    protected $validationMessages   = [
        "first_name" => [
            "required" => "First name is required.",
            "max_length" => "Maximum length of first name is 255 characters."
        ],
        "last_name" => [
            "required" => "Last name is required.",
            "max_length" => "Maximum length of last name is 255 characters."
        ],
        "email_address" => [
            "required" => "Email address is required.",
            "is_unique" => "Email address must be unique.",
            "max_length" => "Maximum length of email address is 255 characters.",
        ],
        "phone_number" => [
            "required" => "Phone number is required.",
            "is_unique" => "Phone number must be unique.",
            "max_length" => "Maximum length of phone number is 15 characters."
        ],
    ];
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
        $data["data"]["phone_number"] = str_replace(" ", "", $data["data"]["phone_number"]);

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

    public function addClient(array $input) :array{
        $val_result = $this->validate($input);

        if($val_result){
            $client_obj = new Client($input);

            $this->save($client_obj);

            $client_data = $this->getClientByID($this->getInsertID());

            return [
                "status" => "success",
                "client_data" => $client_data
            ];
        }
        else{
            return [
                "status" => "valerr",
                "errors" => $this->errors()
            ];
        }
    }
}
