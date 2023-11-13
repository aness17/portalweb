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
        $this->cekauth();
    }
    public function cekauth()
    {

        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            if (time() - session('login_time') >= 7200) {
                session_destroy();
                echo "<script>location.href='" . base_url('') . "';alert('Session Timeout.');</script>";
            }
        }
        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            session_destroy();
            echo "<script>location.href='" . base_url('') . "';alert('Your not authorized.');</script>";
        }
    }
    // public function index()
    // {
    //     if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
    //         $search = $this->request->getVar('nama');

    //         $data = [
    //             'header' => 'dasbooard',
    //             'users' => $this->users->find(),
    //             'new' => $this->news->selectnews($search)
    //         ];
    //         return view('templates/header_usr')
    //             . view('users/index', $data)
    //             . view('templates/footer');
    //     } else {
    //         echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
    //     }
    // }

    public function profile()
    {
        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            $search = $this->request->getVar('nama');
            $data = [
                'header' => 'dasbooard',
                'new' => $this->news->selectnews($search),
                'header' => 'profile'
            ];
            // var_dump($data);
            // die;
            return view('templates/header_usr', $data)
                . view('users/profile', $data)
                . view('templates/footer');
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }
}
