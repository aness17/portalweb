<?php

namespace App\Controllers;

use App\Models\Users_Model;


class Users extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new Users_Model();
    }
    public function index(): string
    {
        $data = [
            'header' => 'dasbooard',
            'users' => $this->usersModel->selectAll()
        ];

        return view('welcome_message', $data);
    }
    public function coba()
    {
        echo "cobaaa";
    }
}
