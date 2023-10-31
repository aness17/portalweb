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
            'new' => $this->news->select()
        ];
        return view('templates/header_usr')
            . view('users/index', $data)
            . view('templates/footer');
    }
    public function search()
    {
        $search = $this->request->getVar('nama');

        $data = [
            'header' => 'dasbooard',
            'new' => $this->news->selectnews($search)
        ];
        var_dump($data);
        die;
        return view('templates/header_usr')
            . view('users/search', $data)
            . view('templates/footer');
    }
}
