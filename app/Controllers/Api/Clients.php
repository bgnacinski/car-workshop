<?php

namespace App\Controllers\Api;

use App\Models\ClientsModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Clients extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        $page = $this->request->getGet("page") ?? 1;
        $limit = $page * 100;
        $offset = $limit - 100;

        $model = new ClientsModel();

        $result = $model->getAllClients($limit, $offset);

        switch($result["status"]){
            case "empty":
                return $this->failNotFound();

            default:
                return $this->respond($result);
        }
    }

    public function show($id = null){
        if(!is_numeric($id)){
            return $this->failNotFound("Invalid client ID.");
        }

        $model = new ClientsModel();

        $result = $model->getClientByID($id);

        switch($result["status"]){
            case "success":
                return $this->respond($result);

            default:
                return $this->failNotFound("Client with this ID not found.");
        }
    }

    public function create(){
        $input = [
            "first_name" => $this->request->getPost("first_name"),
            "last_name" => $this->request->getPost("last_name"),
            "email_address" => $this->request->getPost("email_address"),
            "phone_number" => $this->request->getPost("phone_number"),
        ];

        $model = new ClientsModel();
        $result = $model->addClient($input);

        switch($result["status"]){
            case "success":
                return $this->respondCreated($result);

            default:
                return $this->failValidationErrors($result["errors"]);
        }
    }
}
