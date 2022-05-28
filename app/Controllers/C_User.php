<?php

namespace App\Controllers;


use App\Models\M_User;

$db = \Config\Database::connect();

class C_User extends BaseController
{


    public function index()
    {
        echo view('Views/common/V_Header.php',);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Login.php');
        echo view('Views/common/V_Footer.php');
    }

    public function register()
    {
        $data = [];
        helper('form');

     
            $rules = [
                'users_nickname' => 'required|min_length[3]|max_length[50]',
                'users_firstname' => 'required|min_length[3]|max_length[50]',
                'users_lastname' => 'required|min_length[3]|max_length[50]',
                'users_email' => 'required|min_length[6]|max_length[80]|valid_email|is_unique[users.mail]',
                'users_password' => 'required|min_length[8]|max_length[255]',
                'users_passwordConfirm' => 'matches[password]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                var_dump($data);
            } else {
                $modelUser = new M_User();
                $modelUser->register();
            
        }
        echo view('Views/common/V_Header.php', $data);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Register.php');
        echo view('Views/common/V_Footer.php');
    }


    public function loginController($data)
    {
        $modelUser = new M_User();
        $modelUser->login($data);
    }
}
