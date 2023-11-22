<?php

namespace App\Controllers;

use App\Models\Log_model;
use App\Models\News_model;
use App\Models\Users_Model;


class Users extends BaseController
{
    public function __construct()
    {
        $this->user = new Users_Model();
        $this->news = new News_model();
        $this->log = new Log_model();
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
    }
    public function profile()
    {
        if (session('role') == '2' || session('role') == '3') {
            $id_user = session('id');
            $user = $this->user->find($id_user);
            $search = $this->request->getVar('nama');
            $data = [
                'header' => 'dasbooard',
                'new' => $this->news->selectnews($search),
                'user' => $user
            ];

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
                'remarks' => 'Access Menu Profile',
                'ip_add' => $ip,
                'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
            ];
            $this->log->insert($db);

            return view('templates/header_usr', $data)
                . view('users/profile', $data)
                . view('templates/footer');
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }
    public function edit_profile()
    {
        if (session('role') == '2' || session('role') == '3') {
            $id_user = session('id');
            $user = $this->user->find($id_user);

            $data = [
                'user' => $user
            ];
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'nama' => 'required',
                'email' => 'required',
                'divisi' => 'required'
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {
                if ($this->request->getFile('foto') != "") {
                    $dataBerkas = $this->request->getFile('foto');
                    $fileName = $dataBerkas->getRandomName();
                    $dataBerkas->move('foto/', $fileName);
                } else {
                    $fileName = $this->request->getVar('oldFile');
                }
                // var_dump($fileName);
                // die;
                $db = [
                    'id' => $id_user,
                    'name_user' => $this->request->getVar('nama'),
                    'email_user' => $this->request->getVar('email'),
                    'divisi_user' => $this->request->getVar('divisi'),
                    'fotouser' => $fileName,
                    'password_user' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'role_user' => 3

                ];

                $result = $this->user->edit($db);

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
                    'remarks' => 'Edit Profile',
                    'ip_add' => $ip,
                    'browser' => $currentAgent . ' (' . $agent->getPlatform() . ')'
                ];
                $this->log->insert($db);
                if ($result > 0) {
                    echo "<script>location.href='" . base_url('profile') . "';alert('Success to edit data');</script>";
                } else {
                    echo "<script>location.href='" . base_url('profile') . "';alert('Success to edit data');</script>";
                }
            } else {
                // var_dump($user);
                // die;
                return view('templates/header_usr', $data)
                    . view('users/edit_profile', $data)
                    . view('templates/footer');
            }
        } else {
            echo "<script>location.href='" . base_url('/') . "';alert('Your not authorized.');</script>";
        }
    }
}
