<?php

namespace App\Controllers;

use App\Models\Categorys_model;
use \App\Models\Users_model;
use \App\Models\News_model;
use \App\Models\Comments_model;
use App\Models\Info_model;
use App\Models\Log_model;
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Admins extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'filesystem']);

        $session = session();
        $this->user = new Users_model();
        $this->kategori = new Categorys_model();
        $this->news = new News_model();
        $this->comment = new Comments_model();
        $this->log = new Log_model();
        $this->info = new Info_model();
        $this->cekauth();
    }
    public function cekauth()
    {
        $session = session();
        // var_dump(time());
        // var_dump(session('login_time'));
        // die;
        if (time() - session('login_time') >= 7200) {
            session_destroy();
            echo "<script>location.href='" . base_url('') . "';alert('Session Timeout.');</script>";
        }

        if (session('role') > '2') {
            session_destroy();
            echo "<script>location.href='" . base_url('') . "';alert('Your not authorized.');</script>";
        }
    }
    public function index()
    {
        $year = date('Y');

        if (session('role') == '1' || session('role') == '2') {
            $info = $this->info->select();

            if (session('role') == 1) {
                $log = $this->log->select();
                $countnews = $this->news->selectcountnews()[0]->id;
                $publishnews = $this->news->publishcountnews()[0]->id;
                $unpublishnews = $this->news->unpublishcountnews()[0]->id;
                $usercount = $this->user->usercount()[0]->id;
                $authorsrcount = $this->user->authorsrcount()[0]->id;
                $CountViewsTotal = $this->log->CountViewsTotal();
                $CountViewsTotalVisitors = $this->log->CountViewsTotalVisitors();
                $DataMonthly = $this->log->DataMonthly($year);

                $data = [
                    'log' => $log,
                    'DataMonthly' => $DataMonthly,
                    'info' => $info,
                    'header' => 'dashboard',
                    'countnews' => $countnews,
                    'publishnews' => $publishnews,
                    'unpublishnews' => $unpublishnews,
                    'usercount' => $usercount,
                    'authorsrcount' => $authorsrcount,
                    'CountViewsTotal' => $CountViewsTotal,
                    'CountViewsTotalVisitors' => $CountViewsTotalVisitors
                ];
                // var_dump($DataMonthly);
                // die;
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/dashboard', $data)
                    . view('templates/admins/footer_adm');
            } else {
                $id = session('id');
                $log = $this->log->select($id);
                $new = $this->news->selectbyUser($id);
                $countnews = $this->news->selectcountnews($id)[0]->id;
                $publishnews = $this->news->publishcountnews($id)[0]->id;
                $unpublishnews = $this->news->unpublishcountnews($id)[0]->id;
                $CountViewsTotal = $this->log->CountViewsTotal($id);
                $CountViewsTotalVisitors = $this->log->CountViewsTotalVisitors($id);
                $DataMonthly = $this->log->DataMonthly($year, $id);

                $data = [
                    'news' => $new,
                    'log' => $log,
                    'info' => $info,
                    'header' => 'dashboard',
                    'countnews' => $countnews,
                    'publishnews' => $publishnews,
                    'unpublishnews' => $unpublishnews,
                    'CountViewsTotal' => $CountViewsTotal,
                    'CountViewsTotalVisitors' => $CountViewsTotalVisitors,
                    'DataMonthly' => $DataMonthly
                ];
                // var_dump($log);
                // die;
                return view('templates/admins/header_adm', $data)
                    . view('templates/admins/sidebar', $data)
                    . view('admins/dashboard', $data)
                    . view('templates/admins/footer_adm');
            }
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getRandomName();
        $data = [
            'name_user' => $this->request->getVar('nama'),
            'email_user' => $this->request->getVar('email'),
            'divisi_user' => $this->request->getVar('divisi'),
            'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_user' => $this->request->getVar('role'),
            'fotouser' => $fileName
        ];

        $result = $this->user->create($data);
        $dataBerkas->move('foto/', $fileName);

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
        $fileName = $this->request->getVar('oldFile');
        if ($this->request->getFile('foto') != "") {
            unlink('foto/' . $fileName);
            $dataBerkas = $this->request->getFile('foto');
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('foto/', $fileName);
        }
        if ($this->request->getVar('password') != "") {
            $data = [
                'id' => $id,
                'name_user' => $this->request->getVar('nama'),
                'email_user' => $this->request->getVar('email'),
                'divisi_user' => $this->request->getVar('divisi'),
                'fotouser' => $fileName,
                'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role_user' => $this->request->getVar('role')
            ];
        } else {
            $data = [
                'id' => $id,
                'name_user' => $this->request->getVar('nama'),
                'email_user' => $this->request->getVar('email'),
                'divisi_user' => $this->request->getVar('divisi'),
                'fotouser' => $fileName,
                'role_user' => $this->request->getVar('role')
            ];
        }


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
                $id = session('id');
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
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
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
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
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
                'title' => 'required|is_unique[tberita.title_berita]',
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
                    // 'id' => session('id'),
                    'id_user' => session('id'),
                    'title_berita' => $this->request->getPost('title'),
                    'isi_berita' => $this->request->getPost('news'),
                    'id_kategori' => $this->request->getVar('cat'),
                    'status' => 'Unpublished',
                    'doc' => $fileName,
                    'jadwal_tayang' => $this->request->getVar('brosche'),
                    'slug' => url_title($this->request->getVar('title'), '-', TRUE),
                    'breaking_news' => $this->request->getVar('brenews'),
                ];

                $result = $this->news->insert($db);
                $dataBerkas->move('foto/', $fileName);

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
                    'remarks' => 'Create News',
                    'ip_add' => $ip,
                    'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
                ];
                $this->log->insert($db);
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
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
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
                    unlink('foto/' . $fileName);
                    $dataBerkas = $this->request->getFile('foto');
                    $fileName = $dataBerkas->getRandomName();
                    $dataBerkas->move('foto/', $fileName);
                }

                $db = [
                    'id' => session('id'),
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
                    'remarks' => 'Edit News',
                    'ip_add' => $ip,
                    'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
                ];
                $this->log->insert($db);

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
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
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
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }

    // Comments 
    public function datacomment()
    {
        if (session('role') == '1' || session('role') == '2') {
            if (session('role') == '1') {
                $comment = $this->comment->select();
            } else {
                $id = session('id');
                $comment = $this->comment->selectbyUser($id);
            }

            $data = [
                'cmt' => $comment,
                'header' => 'comment'
            ];

            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $data)
                . view('admins/comment/datacomment', $data)
                . view('templates/admins/footer_adm');
        }
    }
    public function datainformasi()
    {
        if (session('role') == '1') {
            $info = $this->info->findAll();

            $data = [
                'info' => $info,
                'header' => 'info'
            ];

            return view('templates/admins/header_adm')
                . view('templates/admins/sidebar', $data)
                . view('admins/info/datainformasi', $data)
                . view('templates/admins/footer_adm');
        }
    }
    public function addinformasi()
    {
        if (session('role') == '1') {
            $data = [
                'header' => 'info'
            ];

            $validation =  \Config\Services::validation();
            $validation->setRules([
                'content' => 'required|is_unique[tinfo.content]'
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {
                $db = [
                    'content' => $this->request->getPost('content'),
                    'status' => 1
                ];

                $result = $this->info->insert($db);

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
                    'remarks' => 'Add Information',
                    'ip_add' => $ip,
                    'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
                ];
                $this->log->insert($db);

                if ($result > 0) {
                    echo "<script>location.href='" . base_url('datainformasi') . "';alert('Success to add data');</script>";
                } else {
                    return view('templates/admins/header_adm')
                        . view('templates/admins/sidebar', $data)
                        . view('admins/info/addinformasi', $data)
                        . view('templates/admins/footer_adm');
                    echo "<script>alert('Failed to add data');</script>";
                }
            } else {
                return view('templates/admins/header_adm')
                    . view('templates/admins/sidebar', $data)
                    . view('admins/info/addinformasi', $data)
                    . view('templates/admins/footer_adm');
            }
        }
    }
    public function deleteinformasi($id)
    {
        if (session('role') == '1') {
            $db = [
                'status' => 0
            ];

            $result = $this->info->update($id, $db);
            if ($result > 0) {
                echo "<script>location.href='" . base_url('datainformasi') . "';alert('Success to Unpublished data');</script>";
            } else {
                echo "<script>location.href='" . base_url('datainformasi') . "';alert('Failed to Unpublished data');</script>";
            }
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }
}
