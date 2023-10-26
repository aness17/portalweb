<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('templates/header');
        echo view('index');
        echo view('templates/footer');
    }
    public function coba()
    {
        // return view('welcome_message');
        echo "cobaaa";
    }
}
