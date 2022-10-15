<?php

namespace App\Controllers\Api;

use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $model = new UsersModel();

        $result = $model->login($username, $password);

        switch($result["status"]){
            case "success":
                return $this->respond($result);

            default:
                return $this->failForbidden($result["message"]);
        }
    }

    public function signup(){
        $input = [
            "username" => $this->request->getPost("username"),
            "password" => $this->request->getPost("password"),
            "first_name" => $this->request->getPost("first_name"),
            "last_name" => $this->request->getPost("last_name")
        ];

        $model = new UsersModel();

        $result = $model->signup($input);
    }
}
