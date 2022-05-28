<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Views/common/V_Header.php',);
        echo view('Views/common/V_Nav.php',);
        echo view('Views/content/V_Home.php');
        echo view('Views/common/V_Footer.php');
    }
}