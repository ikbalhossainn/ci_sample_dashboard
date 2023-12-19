<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SigninController extends BaseController
{
    // step: 02  to show login data
    protected $helpers = ['form'];
    public function index()
    {
        return view('signin');  // to get the signin form
    }

    public function login(){
        // echo "<h1 style='color:blue'>you are here</h1>";  // just for checking to get path or not??

        // step: 02 to show login data
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $formpass = $this->request->getVar('password');

        // $formpassword = password_hash($password, PASSWORD_DEFAULT);
        // echo 'Formpassword:' .$formpassword = 

        $data = $userModel->where('email', $email)->first();
        // echo "<pre>";
        // print_r($data);

        if($data){
            $dbpass = $data['password'];
           // echo password_verify($formpass, $dbpass);
           $varified = password_verify($formpass, $dbpass);
                if($varified){
                    // echo "<br> Password Varified";
                    // to show information in dashboard($userData)
                        $userData = [
                            "name" => $data['name'], // right side from database. left side session er rakhar name
                            "email" => $data['email'],
                            "user_role" => $data['role'], // role for multiple user
                            'isLoggedIn'=>TRUE
                        ];

                        // to set session for showing data in dashboard
                        $session->set($userData);
                         // return redirect()->to('/');  // only for one user. to set multiple user i need to comment out it and go to filter to execute multiple user
                        if($data['role'] == "Admin"){
                            return redirect()->to('/');
                        }
                        if($data['role'] == "Editor"){
                            return redirect()->to('/editor');
                        }
                    
                } else {
                    $session->getFlashdata('msg', 'Your Password is incorrect');
                    return view('/signin');
                }
            
        } else {
            $session->setFlashdata('msg', 'Your Email is incorrect');
            return view('/signin');
        }

    }
    public function logout(){
        session()->destroy();
        return redirect()->to('signin');
    }
}
