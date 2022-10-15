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
}
