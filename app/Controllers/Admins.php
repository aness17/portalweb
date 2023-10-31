<?php

namespace App\Controllers;

use App\Models\Categorys_model;
use \App\Models\Users_model;
use \App\Models\News_model;
use \App\Models\Comments_model;


use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Admins extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);

        $session = session();
        $this->user = new Users_model();
        $this->kategori = new Categorys_model();
        $this->news = new News_model();
        $this->comment = new Comments_model();
    }
    public function index()
    {
        // var_dump(session('role'));
        // die;
        if (session('role') == '1' || session('role') == '2') {
            if (session('role') == 1) {
                $new = $this->news->select();
                $countnews = $this->news->selectcountnews()[0]->id;
                $publishnews = $this->news->publishcountnews()[0]->id;
                $unpublishnews = $this->news->unpublishcountnews()[0]->id;
                $usercount = $this->user->usercount()[0]->id_user;
                $authorsrcount = $this->user->authorsrcount()[0]->id_user;

                $data = [
                    'news' => $new,
                    'header' => 'dashboard',
                    'countnews' => $countnews,
                    'publishnews' => $publishnews,
                    'unpublishnews' => $unpublishnews,
                    'usercount' => $usercount,
                    'authorsrcount' => $authorsrcount
                ];
                // var_dump($usercount);
                // die;
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/dashboard', $data)
                    . view('templates/admins/footer_adm');
            } else {
                $id = session('id_user');
                $new = $this->news->selectbyUser($id);
                $countnews = $this->news->selectcountnews($id)[0]->id;
                $publishnews = $this->news->publishcountnews($id)[0]->id;
                $unpublishnews = $this->news->unpublishcountnews($id)[0]->id;

                $data = [
                    'news' => $new,
                    'header' => 'dashboard',
                    'countnews' => $countnews,
                    'publishnews' => $publishnews,
                    'unpublishnews' => $unpublishnews
                ];
                // var_dump($countnews);
                // die;
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/dashboard', $data)
                    . view('templates/admins/footer_adm');
            }
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }

    // user 
    public function datauser()
    {
        $users = $this->user->getUsers();

        $data = [
            'user' => $users,
            'header' => 'user'
        ];

        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $data)
            . view('admins//user/datauser', $data)
            . view('templates/admins/footer_adm');
    }
    public function form_adduser()
    {
        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $datas = ['header' => 'user'])
            . view('admins//user/adduser')
            . view('templates/admins/footer_adm');
    }

    public function adduser()
    {
        $data = [
            'name_user' => $this->request->getVar('nama'),
            'email_user' => $this->request->getVar('email'),
            'divisi_user' => $this->request->getVar('divisi'),
            'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_user' => $this->request->getVar('role')
        ];

        $result = $this->user->create($data);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datauser') . "';alert('Success to add data');</script>";
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $datas = ['header' => 'user'])
                . view('admins//user/adduser')
                . view('templates/admins/footer_adm');
        }
    }
    public function form_edituser($id)
    {
        $users = $this->user->getUsers($id)->getRow();

        $data = [
            'user' => $users
        ];

        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $datas = ['header' => 'user'])
            . view('admins//user/edituser', $data)
            . view('templates/admins/footer_adm');
    }

    public function edituser($id)
    {
        $data = [
            'id_user' => $id,
            'name_user' => $this->request->getVar('nama'),
            'email_user' => $this->request->getVar('email'),
            'divisi_user' => $this->request->getVar('divisi'),
            'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_user' => $this->request->getVar('role')
        ];

        $result = $this->user->edit($data);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datauser') . "';alert('Success to add data');</script>";
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $datas = ['header' => 'user'])
                . view('admins/user/edituser')
                . view('templates/admins/footer_adm');
        }
    }
    public function deleteuser($id)
    {
        $result = $this->user->hapus($id);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datauser') . "';alert('Success to delete data');</script>";
        } else {
            echo "<script>location.href='" . base_url('datauser') . "';alert('Failed to delete data');</script>";
        }
    }

    // kategori 
    public function datakategori()
    {
        $kategoris = $this->kategori->findAll();

        $data = [
            'kategori' => $kategoris,
            'header' => 'cat'
        ];

        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $data)
            . view('admins/category/datacategory', $data)
            . view('templates/admins/footer_adm');
    }
    public function form_addkategori()
    {
        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $datas = ['header' => 'cat'])
            . view('admins/category/addcategory')
            . view('templates/admins/footer_adm');
    }
    public function addkategori()
    {
        $data = [
            'name_kategori' => $this->request->getVar('nama'),
        ];

        $result = $this->kategori->insert($data);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datakategori') . "';alert('Success to add data');</script>";
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $datas = ['header' => 'cat'])
                . view('admins/category/addcategory')
                . view('templates/admins/footer_adm');
        }
    }
    public function editkategori($id)
    {
        $kategoris = $this->kategori->find($id);

        $data = [
            'kategori' => $kategoris,
            'header' => 'cat'
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $db = [
                'name_kategori' => $this->request->getVar('nama')
            ];
            $result = $this->kategori->update($id, $db);

            if ($result > 0) {
                echo "<script>location.href='" . base_url('datakategori') . "';alert('Success to add data');</script>";
            } else {
                echo "<script>location.href='" . base_url('datakategori') . "';alert('Failed to add data');</script>";
            }
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $data)
                . view('admins/category/editcategory', $data)
                . view('templates/admins/footer_adm');
        }
    }
    public function deletekategori($id)
    {
        $result = $this->kategori->delete($id);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datakategori') . "';alert('Success to delete data');</script>";
        } else {
            echo "<script>location.href='" . base_url('datakategori') . "';alert('Failed to delete data');</script>";
        }
    }

    // News 
    public function datanews()
    {
        if (session('role') == '1' || session('role') == '2') {
            if (session('role') == '1') {
                $news = $this->news->select();

                $data = [
                    'new' => $news,
                    'header' => 'newsp'
                ];

                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/news/datanews', $data)
                    . view('templates/admins/footer_adm');
            } else {
                $id = session('id_user');
                $news = $this->news->selectbyUser($id);
                $data = [
                    'new' => $news,
                    'header' => 'newsp'
                ];

                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/news/datanews', $data)
                    . view('templates/admins/footer_adm');
            }
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }

    public function detailnews()
    {
        if (session('role') == '1' || session('role') == '2') {
            $id_berita = (int)$_POST['id_berita'];
            $news = $this->news->select($id_berita);

            $isi[] = '';

            if (empty($news)) {
                $isi .= 'No Record';
            } else {
                $isi = $news;
            }
            $isi = json_encode($isi);
            echo $isi;
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }
    public function addnews()
    {
        if (session('role') == '1' || session('role') == '2') {

            $news = $this->news->findAll();
            $kategoris = $this->kategori->findAll();

            $data = [
                'new' => $news,
                'cat' => $kategoris,
                'header' => 'newsp'
            ];

            $validation =  \Config\Services::validation();
            $validation->setRules([
                'title' => 'required',
                'cat' => 'required',
                'news' => 'required',
                'brosche' => 'required',
                'brenews' => 'required'
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {

                $dataBerkas = $this->request->getFile('foto');
                $fileName = $dataBerkas->getRandomName();
                $db = [
                    'id_user' => session('id_user'),
                    'title_berita' => $this->request->getPost('title'),
                    'isi_berita' => $this->request->getPost('news'),
                    'id_kategori' => $this->request->getVar('cat'),
                    'status' => 'Published',
                    'doc' => $fileName,
                    'jadwal_tayang' => $this->request->getVar('brosche'),
                    'slug' => url_title($this->request->getVar('title'), '-', TRUE),
                    'breaking_news' => $this->request->getVar('brenews'),
                ];

                $result = $this->news->insert($db);
                $dataBerkas->move('foto/', $fileName);
                if ($result > 0) {
                    echo "<script>location.href='" . base_url('datanews') . "';alert('Success to add data');</script>";
                } else {
                    return view('templates/admins/header_adm')
                        . view('templates/admins/sidebar', $data)
                        . view('admins/news/addnews', $data)
                        . view('templates/admins/footer_adm');
                    echo "<script>alert('Failed to add data');</script>";
                }
            } else {
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/news/addnews', $data)
                    . view('templates/admins/footer_adm');
            }
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }
    public function editnews($id)
    {
        if (session('role') == '1' || session('role') == '2') {
            $kategoris = $this->kategori->findAll();
            $news = $this->news->find($id);
            $breknew = $this->news->breaking_news();

            $data = [
                'cat' => $kategoris,
                'new' => $news,
                'breknew' => $breknew,
                'header' => 'newsp'
            ];
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'title' => 'required',
                'cat' => 'required',
                'news' => 'required',
                'brosche' => 'required',
                'brenews' => 'required'
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            $fileName = $this->request->getVar('oldFile');

            if ($isDataValid) {
                if ($this->request->getFile('foto') != "") {
                    $dataBerkas = $this->request->getFile('foto');
                    $fileName = $dataBerkas->getRandomName();
                    $dataBerkas->move('foto/', $fileName);
                }

                $db = [
                    'id_user' => session('id_user'),
                    'title_berita' => $this->request->getPost('title'),
                    'isi_berita' => $this->request->getPost('news'),
                    'id_kategori' => $this->request->getVar('cat'),
                    'status' => 'Published',
                    'doc' => $fileName,
                    'jadwal_tayang' => $this->request->getVar('brosche'),
                    'slug' => url_title($this->request->getVar('title'), '-', TRUE),
                    'breaking_news' => $this->request->getVar('brenews')
                ];

                $result = $this->news->update($id, $db);

                if ($result > 0) {
                    echo "<script>location.href='" . base_url('datanews') . "';alert('Success to Edit data');</script>";
                } else {
                    echo "<script>location.href='" . base_url('datanews') . "';alert('Failed to Edit data');</script>";
                }
            } else {
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/news/editnews', $data)
                    . view('templates/admins/footer_adm');
            }
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }
    public function deletenews($id)
    {
        if (session('role') == '1' || session('role') == '2') {
            $db = [
                'status' => 'Unpublished'
            ];

            $result = $this->news->update($id, $db);
            if ($result > 0) {
                echo "<script>location.href='" . base_url('datanews') . "';alert('Success to Unpublished data');</script>";
            } else {
                echo "<script>location.href='" . base_url('datanews') . "';alert('Failed to Unpublished data');</script>";
            }
        } else {
            echo "<script>location.href='" . base_url('auth') . "';alert('Your not authorized.');</script>";
        }
    }

    // Comments 
    public function datacomment()
    {
        $comment = $this->comment->select();

        $data = [
            'cmt' => $comment,
            'header' => 'comment'
        ];

        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $data)
            . view('admins/comment/datacomment', $data)
            . view('templates/admins/footer_adm');
    }

    public function addcomment()
    {
        $comment = $this->comment->findAll();
        $kategoris = $this->kategori->findAll();

        $data = [
            'cmt' => $comment,
            'cat' => $kategoris,
            'header' => 'comment'
        ];

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'cat' => 'required',
            'comment' => 'required',
            'brosche' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {

            $dataBerkas = $this->request->getFile('foto');
            $fileName = $dataBerkas->getRandomName();
            $db = [
                'id_user' => session('id_user'),
                'title_berita' => $this->request->getPost('title'),
                'isi_berita' => $this->request->getPost('comment'),
                'id_kategori' => $this->request->getVar('cat'),
                'status' => 'Published',
                'doc' => $fileName,
                'jadwal_tayang' => $this->request->getVar('brosche'),
                'slug' => url_title($this->request->getVar('title'), '-', TRUE)
            ];

            $result = $this->comment->insert($db);
            $dataBerkas->move('foto/', $fileName);
            if ($result > 0) {
                echo "<script>location.href='" . base_url('datacomment') . "';alert('Success to add data');</script>";
            } else {
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/comment/addcomment', $data)
                    . view('templates/admins/footer_adm');
                echo "<script>alert('Failed to add data');</script>";
            }
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $data)
                . view('admins/comment/addcomment', $data)
                . view('templates/admins/footer_adm');
        }
    }
    public function editcomment($id)
    {
        $kategoris = $this->kategori->findAll();
        $comment = $this->comment->find($id);

        $data = [
            'cat' => $kategoris,
            'cmt' => $comment,
            'header' => 'comment'
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'cat' => 'required',
            'comment' => 'required',
            'brosche' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        $fileName = $this->request->getVar('oldFile');

        if ($isDataValid) {
            if ($this->request->getFile('foto') != "") {
                $dataBerkas = $this->request->getFile('foto');
                $fileName = $dataBerkas->getRandomName();
                $dataBerkas->move('foto/', $fileName);
            }

            $db = [
                'id_user' => session('id_user'),
                'title_berita' => $this->request->getPost('title'),
                'isi_berita' => $this->request->getPost('comment'),
                'id_kategori' => $this->request->getVar('cat'),
                'status' => 'Published',
                'doc' => $fileName,
                'jadwal_tayang' => $this->request->getVar('brosche'),
                'slug' => url_title($this->request->getVar('title'), '-', TRUE)
            ];

            $result = $this->comment->update($id, $db);

            if ($result > 0) {
                echo "<script>location.href='" . base_url('datacomment') . "';alert('Success to Edit data');</script>";
            } else {
                echo "<script>location.href='" . base_url('datacomment') . "';alert('Failed to Edit data');</script>";
            }
        } else {
            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $data)
                . view('admins/comment/editcomment', $data)
                . view('templates/admins/footer_adm');
        }
    }
    public function deletecomment($id)
    {
        $db = [
            'status' => 'Unpublished'
        ];

        $result = $this->comment->update($id, $db);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datacomment') . "';alert('Success to delete data');</script>";
        } else {
            echo "<script>location.href='" . base_url('datacomment') . "';alert('Failed to delete data');</script>";
        }
    }
}
