<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class SignupController extends BaseController
{
    protected $helpers = ['form', 'url'];
    public function index()
    {
        $data = [];
        return view('register', $data);
    }

    public function store(){
        $rules = [  // left side 'name', 'email' have to be match with database table

            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]',
        ];

       if( $this->validate($rules)){
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel = new UserModel();
            $userModel ->save($data);
          //  $session = session();
           // $session->setFlashdata('msg', 'Successfully Signup');
            return redirect()->to('/signin');
        } else{
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
}
