<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{

    protected $table = 'php_users';
    protected $allowedFields = ['Id_php_users', 'users_nickname', 'users_firstname', 'users_lastname', 'users_mail', 'users_password', 'users_statut', 'users_creation_date', 'users_adress', 'users_adress2', 'users_zip_code', 'Id_php_city'];
    protected $beforeInsert = ['beforeInsert'];
    protected $update = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['users_password']))
            $data['data']['users_password'] = password_hash($data['data']['users_password'], PASSWORD_DEFAULT);
        return $data;
    }

   
      


}
