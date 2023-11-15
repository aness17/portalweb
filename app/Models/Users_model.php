<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model
{
    protected $table = 'tuser';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'name_user', 'email_user', 'password_user', 'divisi_user', 'role_user', 'fotouser'];

    public function create($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function getUsers($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    public function edit($data)
    {
        $builder = $this->db->table($this->table);
        $builder->where($this->primary, $data[$this->primary]);
        return $builder->update($data);
    }
    public function hapus($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete([$this->primary => $id]);
        // $this->db->where($this->primary, $id);
        // return $this->db->delete($this->table);
    }
    public function usercount()
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('id');
        $builder->where('role_user', 3);
        return $builder->get()->getResult();
    }
    public function authorsrcount()
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('id');
        $builder->where('role_user', 2);
        return $builder->get()->getResult();
    }
}
