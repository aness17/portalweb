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
        $this->cekauth();
        $session = session();
    }
    public function cekauth()
    {

        // var_dump(time());
        // var_dump(session('role'));
        // die;
        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            if (time() - session('login_time') >= 7200) {
                session_destroy();
                echo "<script>location.href='" . base_url('') . "';alert('Session Timeout.');</script>";
            }
        }
        // if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
        //     session_destroy();
        //     echo "<script>location.href='" . base_url('') . "';alert('Your not authorized.');</script>";
        // }
    }
    public function comment_reply()
    {
        $id_parent = (int)$_POST['id_parent'];
        $news = $this->comment->getCommentbyParent($id_parent);

        $isi[] = '';

        if (empty($news)) {
            $isi .= 'No Record';
        } else {
            $isi = $news;
        }
        $isi = json_encode($isi);
        echo $isi;
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
        $id = session('id');
        $news = $this->news->getPageSlug($slug);
        $countcomment = $this->comment->getCountComment($news[0]['berita'])[0]->id;
        $comment = $this->comment->select($news[0]['berita']);
        $users = $this->user->find($id);
        // $this->add_count($slug);

        $balas = array();
        $balas = $this->comment->balas($news[0]['berita']);

        $data = [
            'news' => $news,
            'comment' => $comment,
            'balas' => $balas,
            'countcomment' => $countcomment,
            'user' => $users
        ];
        // var_dump($balas);
        // die;
        return view('templates/header_usr', $data)
            . view('view', $data)
            . view('templates/footer');
    }

    // This is the counter function.. 
    function add_count($slug)
    {
        // load cookie helper
        helper('cookie');
        // this line will return the cookie which has slug name

        $check_visitor = set_cookie(urldecode($slug), FALSE);
        // this line will return the visitor ip address
        $ip = $this->request->getIPAddress();
        // if the visitor visit this article for first time then //
        //set new cookie and update article_views column  ..
        //you might be notice we used slug for cookie name and ip 
        //address for value to distinguish between articles  views
        if ($check_visitor == false) {
            $cookie = array(
                "slug"   => urldecode($slug),
                "value"  => "$ip",
                "expire" =>  time() + 7200,
                "secure" => false
            );
            set_cookie($cookie);
            $this->news->update_counter(urldecode($slug));
        }
    }

    public function addcomment($id = null)
    {
        $idberita = $this->request->getVar('idberita');
        $idparent = $this->request->getVar('idparent');
        $berita = $this->news->find($idberita);
        // var_dump($berita);
        // die;
        if ($idparent > 0) { //jika id parent ada
            $data = [
                'id_user' => session('id'),
                'id_parent' => $idparent,
                'id_berita' => $idberita,
                'comment_content' => $this->request->getVar('comment'),
                'status_content' => 1
            ];
            // var_dump($idparent);
            // die;
        } else { //jika id parent tidak ada
            $data = [
                'id_user' => session('id'),
                'id_parent' => 0,
                'id_berita' => $idberita,
                'comment_content' => $this->request->getVar('comment'),
                'status_content' => 1
            ];
        }
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
                        'id' => $user['id'],
                        'nama' => $user['name_user'],
                        'email' => $user['email_user'],
                        'password' => $user['password_user'],
                        'divisi' => $user['divisi_user'],
                        'role' => $user['role_user'],
                        'login_time' => strtotime('now')
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
