<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class RegistrationController extends BaseController
{
    use ResponseTrait;
    public function registration()
    {
        $userModel = new UserModel();
        $data = [
            'fname' => $this->request->getVar('fname'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
        ];
        // print_r($inputs);

        if($userModel->insert($data)){
            $data['msg'] = "Success";
            return $this->respond($data);
        } else{
            $data['msg'] = "Failed";
            return $this->respond($data);
        }
               
    }
}
