<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/header.php',);
        echo view('content/home.php');
        echo view('common/footer.php');
    }
}
