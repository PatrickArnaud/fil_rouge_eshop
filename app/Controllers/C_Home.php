<?php

namespace App\Controllers;

class C_Home extends BaseController
{
    public function index()
    {
        echo view('Views/common/V_Header.php',);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Home.php');
        echo view('Views/content/V_Recipe.php');
        echo view('Views/content/V_Ingredient.php');
        echo view('Views/common/V_Footer.php');
    }
}