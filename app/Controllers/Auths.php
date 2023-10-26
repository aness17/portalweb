<?php

namespace App\Controllers;

use \App\Models\Users_model;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line


class Auths extends BaseController
{
    public function __construct()
    {
        $this->user = new Users_model();
    }
    public function index()
    {
        // return view('welcome_message');
        return view('login');
    }
    public function login()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'email' => 'required',
            'password' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $user = $this->user->where('email_user', $email)->first();
            // var_dump($user);
            // die;
            if ($user) {
                // var_dump($user);
                // die;
                if (password_verify($password, $user['password_user'])) {
                    // var_dump($user);
                    // die;
                    //create session
                    $session = session();

                    $data = [
                        'islogin' => true,
                        'id_user' => $user['id_user'],
                        'nama' => $user['name_user'],
                        'email' => $user['email_user'],
                        'password' => $user['password_user'],
                        'divisi' => $user['divisi_user'],
                        'role' => $user['role_user'],
                    ];
                    // var_dump($data);
                    // die;
                    $session->set($data);
                    if ($user['role_user'] == 1) {
                        echo "<script>location.href='" . base_url('admins') . "';alert('You are already logged in as an Superadmin');</script>";
                    } elseif ($user['role_user'] == 2) {
                        echo "<script>location.href='" . base_url('users') . "';alert('You are already logged in as an Admin');</script>";
                    }
                } else {
                    return redirect()->route('/');
                }
            }
        } else {
            return redirect()->route('/');
        }
        // return view('welcome_message');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        // var_dump('hello');
        // die;
        echo "<script>location.href='" . base_url('') . "';alert('You are already logged out');</script>";
    }
}
