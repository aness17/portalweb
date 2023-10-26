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
        $data = [
            'header' => 'dashboard'
        ];

        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $data)
            . view('admins/dashboard', $data)
            . view('templates/admins/footer_adm');
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
        // var_dump($data);
        // die;
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
        // var_dump($data);
        // die;
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
        // var_dump($id);
        // die;
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
        // var_dump($data);
        // die;
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
        // var_dump($data);
        // die;
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
        // $kategoris = $this->kategori->where('id_kategori', $id)->first();
        $kategoris = $this->kategori->find($id);
        // var_dump($kategoris);
        // die;
        $data = [
            'kategori' => $kategoris,
            'header' => 'cat'
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // var_dump($isDataValid);
        // die;
        if ($isDataValid) {
            $db = [
                'name_kategori' => $this->request->getVar('nama')
            ];
            // var_dump($id);
            // die;
            $result = $this->kategori->update($id, $db);
            // var_dump($result);
            // die;
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
        $news = $this->news->select();

        $data = [
            'new' => $news,
            'header' => 'news'
        ];
        // var_dump($data);
        // die;
        return view('templates/admins/header_adm')
            . view('templates/admins/sidebar', $data)
            . view('admins/news/datanews', $data)
            . view('templates/admins/footer_adm');
    }
    // public function detail($id_berita = null)
    // {
    //     $news = $this->news->select($id_berita);
    //     return $this->response->setJSON([
    //         'error' => false,
    //         'message' => $news
    //     ]);
    // }
    public function detailnews()
    {
        $id_berita = (int)$_POST['id_berita'];
        $news = $this->news->select($id_berita);


        $content =  '';
        $isi[] = '';
        // $isi_table .= '<td>' . str_replace('\n\n', '<div>&nbsp;</div>', $news) . '</td>';
        // $isi .= $news;
        // die;
        // $isi = json_encode($isi);

        if (empty($news)) {
            $isi .= 'No Record';
        } else {
            $isi = $news;
        }
        // $content .= $isi;
        $isi = json_encode($isi);
        // $isi = json_encode($data);
        echo $isi;
    }
    public function addnews()
    {
        $news = $this->news->findAll();
        $kategoris = $this->kategori->findAll();

        $data = [
            'new' => $news,
            'cat' => $kategoris,
            'header' => 'news'
        ];

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'cat' => 'required',
            'news' => 'required',
            'brosche' => 'required'
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
                'slug' => url_title($this->request->getVar('title'), '-', TRUE)
            ];
            // var_dump($file);
            // die;
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
    }
    public function editnews($id)
    {
        $kategoris = $this->kategori->findAll();
        $news = $this->news->find($id);
        // var_dump($news);
        // die;
        $data = [
            'cat' => $kategoris,
            'new' => $news,
            'header' => 'news'
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'cat' => 'required',
            'news' => 'required',
            'brosche' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // var_dump($isDataValid);
        // die;
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
                'slug' => url_title($this->request->getVar('title'), '-', TRUE)
            ];
            // var_dump($db);
            // die;
            $result = $this->news->update($id, $db);

            // var_dump($result);
            // die;
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
    }
    public function deletenews($id)
    {
        $db = [
            'status' => 'Unpublished'
        ];
        // var_dump($id);
        // die;
        $result = $this->news->update($id, $db);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datanews') . "';alert('Success to delete data');</script>";
        } else {
            echo "<script>location.href='" . base_url('datanews') . "';alert('Failed to delete data');</script>";
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
        // var_dump($data);
        // die;
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
            // var_dump($file);
            // die;
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
        // var_dump($comment);
        // die;
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

        // var_dump($isDataValid);
        // die;
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
            // var_dump($db);
            // die;
            $result = $this->comment->update($id, $db);

            // var_dump($result);
            // die;
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
        // var_dump($id);
        // die;
        $result = $this->comment->update($id, $db);
        if ($result > 0) {
            echo "<script>location.href='" . base_url('datacomment') . "';alert('Success to delete data');</script>";
        } else {
            echo "<script>location.href='" . base_url('datacomment') . "';alert('Failed to delete data');</script>";
        }
    }
}
