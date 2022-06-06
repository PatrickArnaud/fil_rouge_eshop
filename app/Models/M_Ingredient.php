<?php

namespace App\Models;

use CodeIgniter\Model;
$db = \Config\Database::connect();



class M_Ingredient extends Model
{
    protected $table = 'php_products';
    protected $allowedFields = ['Id_php_products', 'products_name'];

    public function getAllIngredients()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM php_products');
        $results = $query->getResult();      
        return $results;
    }



}