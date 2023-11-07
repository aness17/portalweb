<?php

namespace App\Controllers;

use App\Models\Comments_model;
use App\Models\News_model;
use \App\Models\Users_model;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line


class Auths extends BaseController
{
    public function __construct()
    {
        $this->user = new Users_model();
        $this->news = new News_model();
        $this->comment = new Comments_model();
    }
    public function index()
    {
        $search = $this->request->getVar('search');
        $news = $this->news->selectnews($search);
        $breknew = $this->news->breaking_news();

        $data = [
            'new' => $news,
            'breknew' => $breknew
        ];
        // var_dump($search);
        // die;
        // return view('welcome_message');
        if (session('role') > 0) {
            return view('templates/header_usr', $data)
                . view('users/index', $data)
                . view('templates/footer');
        } else {
            return view('templates/header', $data)
                . view('users/index', $data)
                . view('templates/footer');
        }
    }
    public function view($slug)
    {
        $news = $this->news->getPageSlug($slug);
        $comment = $this->comment->select($news[0]['berita']);

        $balas = array();
        foreach ($comment as $row) {
            $balas = $this->comment->balas($row['id_berita']);
        }
        $data = [
            'news' => $news,
            'comment' => $comment,
            'balas' => $balas
        ];
        // var_dump($balas);
        // die;
        return view('templates/header_usr', $data)
            . view('view', $data)
            . view('templates/footer');
    }
    public function addcomment()
    {
        $idberita = $this->request->getVar('idberita');
        $berita = $this->news->find($idberita);
        // var_dump($berita);
        // die;
        $data = [
            'id_user' => session('id_user'),
            'id_parent' => 0,
            'id_berita' => $idberita,
            'comment_content' => $this->request->getVar('comment'),
            'status_content' => 1
        ];

        $result = $this->comment->insert($data);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('news/' . $berita['slug']) . "';</script>";
        } else {
            echo "<script>location.href='" . base_url('news/' . $berita['slug']) . "';</script>";
        }
    }
    public function form_login()
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

            if ($user) {
                if (password_verify($password, $user['password_user'])) {
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

                    $session->set($data);
                    if ($user['role_user'] == 1) {
                        echo "<script>location.href='" . base_url('admins') . "';alert('You are already logged in as an Superadmin');</script>";
                    } elseif ($user['role_user'] == 2) {
                        echo "<script>location.href='" . base_url('admins') . "';alert('You are already logged in as an Admin');</script>";
                    } else {
                        echo "<script>location.href='" . base_url('/') . "';alert('You are already logged in as an User');</script>";
                    }
                } else {
                    return redirect()->route('loginform');
                }
            }
        } else {
            return redirect()->route('loginform');
        }
        // return view('welcome_message');
    }
    public function registration()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'name' => 'trim|required|max_length[20]',
            'email' => 'required|valid_email|is_unique[tuser.email_user]|min_length[6]',
            'password' => 'required',
            'confirmpassword' => 'required|matches[password]',
            'divisi' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $session = session();

            $data = [
                'name_user' => $this->request->getVar('name'),
                'email_user' => $this->request->getVar('email'),
                'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'divisi_user' => $this->request->getVar('divisi'),
                'role_user' => 3,
            ];

            $result = $this->user->create($data);
            if ($result > 0) {
                echo "<script>location.href='" . base_url('loginform') . "';alert('Success to Registration');</script>";
            } else {
                return view('registration');
            }
        } else {
            return view('registration');
        }
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
