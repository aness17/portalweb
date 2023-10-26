<?php

namespace App\Models;

use CodeIgniter\Model;

class Comments_model extends Model
{
    protected $table = 'tkomentar';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_berita', 'id_user', 'comment_content', 'status_content', 'created_at', 'updated_at', 'deleted_at'];

    public function select($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table . " as A");
            // $builder->select('B.id as kategori, A.id as berita, A.*, B.*, A.*');
            $builder->join('tuser C', 'A.id_user = C.id_user');
            $builder->join('tberita B', 'A.id_berita = B.id');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id_user');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.id', $id);
            return $builder->get()->getRowArray();
        }
    }
    // public function sumUser()
    // {
    //     $builder = $this->db->table($this->table);
    //     $builder->selectSum('id_user');
    //     $builder->where('id_role', 2);
    //     return $builder->get();
    // }
}
