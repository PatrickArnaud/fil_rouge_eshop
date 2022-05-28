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
        var_dump("1");

        if ($this->request->getMethod() == 'post') {
            var_dump("2");

            $rules = [
                
                'users_nickname' => 'required|min_length[3]|max_length[50]',
                'users_firstname' => 'required|min_length[3]|max_length[50]',
                'users_lastname' => 'required|min_length[3]|max_length[50]',
                'users_mail' => 'required|min_length[6]|max_length[80]|valid_email|is_unique[php_users.users_mail]',
                'users_password' => 'required|min_length[8]|max_length[255]',
                'users_passwordConfirm' => 'matches[users_password]',
            ];
            if (!$this->validate($rules)) {
                var_dump("3");

                $data['validation'] = $this->validator;
            } else {
                var_dump("4");

                $modelUser = new M_User();
                $newUser = [
                    'users_nickname' => $this->request->getVar('users_nickname'),
                    'users_firstname' => $this->request->getVar('users_firstname'),
                    'users_lastname' => $this->request->getVar('users_lastname'),
                    'users_mail' => $this->request->getVar('users_mail'),
                    'users_password' => $this->request->getVar('users_password'),

                ];
                var_dump("5");

                $modelUser->save($newUser);
                $sessionregister = session();
                $sessionregister->setFlashdata('success', 'Vous êtes bien enregistré !');
                return redirect()->to('login');
            }
        }
        var_dump("6");

        echo view('Views/common/V_Header.php', $data);
        echo view('Views/common/V_Nav.php');
        echo view('Views/content/V_Register.php');
        echo view('Views/common/V_Footer.php');
    }


    public function loginController($data)
    {
        $modelUser = new M_User();
        $modelUser->login($data);
    }
}
