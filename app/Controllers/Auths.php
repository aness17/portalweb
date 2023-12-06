<?php

namespace App\Controllers;

$pager = \Config\Services::pager();

use App\Models\Comments_model;
use App\Models\Info_model;
use App\Models\Log_model;
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
        $this->log = new Log_model();
        $this->info = new Info_model();
        $this->cekauth();
        $session = session();
    }
    public function cekauth()
    {
        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            if (time() - session('login_time') >= 7200) {
                session_destroy();
                echo "<script>location.href='" . base_url('') . "';alert('Session Timeout.');</script>";
            }
        }
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
    public function delete_comment($id)
    {
        if (session('role') == '1' || session('role') == '2' || session('role') == '3') {
            $comment = $this->comment->selectnews($id);

            $db = [
                'status_content' => 0
            ];

            // var_dump($comment);
            // die;
            $result = $this->comment->update($id, $db);
            if ($result > 0) {
                echo "<script> window.location=history.go(-1);alert('Success to delete comment');</script>";
            } else {
                echo "<script>location.href='" . base_url('news/' . $comment['slug']) . "';alert('Failed to delete comment');</script>";
            }
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }
    public function index()
    {
        $search = $this->request->getVar('search');
        $per_page = 5;
        if (isset($search)) {
            session()->set('search', $search);
            redirect()->to('/');
        } else {
            $search = session()->get('search');
        }
        $news = $this->news->selectnews($search);
        $breknew = $this->news->breaking_news();
        $info = $this->info->select();

        $data = [
            'new' => $news->paginate($per_page, 'news'),
            'breknew' => $breknew,
            'pager' => $news->pager,
            'search' => $search,
            'info' => $info
        ];
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
        $info = $this->info->select();
        $news = $this->news->getPageSlug($slug);
        $countcomment = $this->comment->getCountComment($news[0]['berita'])[0]->id;
        $countview = $this->log->CountViewsNews($slug);
        $comment = $this->comment->select($news[0]['berita']);
        $users = $this->user->find($id);
        $breknew = $this->news->breaking_news();

        $balas = array();
        $balas = $this->comment->balas($news[0]['berita']);

        $data = [
            'news' => $news,
            'info' => $info,
            'comment' => $comment,
            'balas' => $balas,
            'countcomment' => $countcomment,
            'countview' => $countview,
            'user' => $users,
            'breknew' => $breknew
        ];

        // var_dump($comment);
        // die;
        $agent = $this->request->getUserAgent();
        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        // $ip = $this->request->getIPAddress();
        $ip = $this->request->getIPAddress();
        if (session('id') != null) {
            $db = [
                'id_user' => session('id'),
                'id_berita' => $news[0]['berita'],
                'remarks' => 'Read News',
                'slug' => $slug,
                'ip_add' => $ip,
                'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
            ];
        } else {
            $db = [
                'id_user' => 0,
                'id_berita' => $news[0]['berita'],
                'remarks' => 'Read News',
                'slug' => $slug,
                'ip_add' => $ip,
                'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
            ];
        }

        $this->log->insert($db);
        return view('templates/header_usr', $data)
            . view('view', $data)
            . view('templates/footer');
    }

    // This is the counter function.. 
    public function addcomment($id = null)
    {
        $idberita = $this->request->getVar('idberita');
        $idparent = $this->request->getVar('idparent');
        $berita = $this->news->find($idberita);

        $agent = $this->request->getUserAgent();
        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        $ip = $this->request->getIPAddress();
        $db = [
            'id_user' => session('id'),
            'id_berita' => $idberita,
            'remarks' => 'Add Comment',
            'ip_add' => $ip,
            'slug' => $berita['slug'],
            'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
        ];

        $this->log->insert($db);
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
            'email' => 'required|valid_email|min_length[6]',
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

                    //get agent browser user
                    $agent = $this->request->getUserAgent();
                    if ($agent->isBrowser()) {
                        $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
                    } elseif ($agent->isRobot()) {
                        $currentAgent = $agent->getRobot();
                    } elseif ($agent->isMobile()) {
                        $currentAgent = $agent->getMobile();
                    } else {
                        $currentAgent = 'Unidentified User Agent';
                    }

                    $ip = $this->request->getIPAddress();
                    $db = [
                        'id_user' => session('id'),
                        'remarks' => 'Login System',
                        'ip_add' => $ip,
                        'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
                    ];
                    // var_dump($db);
                    // die;
                    $this->log->insert($db);
                    if ($user['role_user'] == 1) {
                        echo "<script>location.href='" . base_url('admins') . "';alert('You are already logged in as an Superadmin');</script>";
                    } elseif ($user['role_user'] == 2) {
                        echo "<script>location.href='" . base_url('admins') . "';alert('You are already logged in as an Admin');</script>";
                    } else {
                        echo "<script>location.href='" . base_url('/') . "';alert('You are already logged in as an User');</script>";
                    }
                } else {
                    echo "<script>location.href='" . base_url('loginform') . "';alert('Incorect Username or Password');</script>";
                }
            } else {
                echo "<script>location.href='" . base_url('loginform') . "';alert('Incorect Username or Password');</script>";
            }
        } else {
            echo "<script>location.href='" . base_url('loginform') . "';</script>";
        }
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

            $ip = $this->request->getIPAddress();
            $db = [
                'id_user' => 0,
                'remarks' => 'Register Account',
                'ip_add' => $ip
            ];
            $this->log->insert($db);

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
        //get agent browser user
        $agent = $this->request->getUserAgent();
        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        $ip = $this->request->getIPAddress();

        $db = [
            'id_user' => session('id'),
            'remarks' => 'Logout System',
            'ip_add' => $ip,
            'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
        ];

        $this->log->insert($db);
        $session = session();
        $session->destroy();
        // var_dump('hello');
        // die;
        echo "<script>location.href='" . base_url('') . "';alert('You are already logged out');</script>";
    }
}
