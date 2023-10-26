<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model
{
    protected $table = 'tuser';
    protected $primary = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user', 'name_user', 'email_user', 'password_user', 'divisi_user', 'role_user'];

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
            return $this->getWhere(['id_user' => $id]);
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
    public function sumUser()
    {
        $builder = $this->db->table($this->table);
        $builder->selectSum('id_user');
        $builder->where('id_role', 2);
        return $builder->get();
    }
}
