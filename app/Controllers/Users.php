<?php

namespace App\Controllers;

use App\Models\News_model;
use App\Models\Users_Model;


class Users extends BaseController
{
    public function __construct()
    {
        $this->users = new Users_Model();
        $this->news = new News_model();
    }
    public function index(): string
    {
        $data = [
            'header' => 'dasbooard',
            'users' => $this->users->find(),
            'news' => $this->news->find()
        ];
        return view('templates/header_usr')
            . view('users/index', $data)
            . view('templates/footer');
    }
    public function coba()
    {
        echo "cobaaa";
    }
}
