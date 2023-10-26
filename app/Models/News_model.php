<?php

namespace App\Models;

use CodeIgniter\Model;

class News_model extends Model
{
    protected $table = 'tberita';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'title_berita', 'id_kategori', 'isi_berita', 'jadwal_tayang', 'create_date', 'update_date', 'deleted_date', 'slug', 'status', 'doc'];

    public function select($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id_user');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id_user');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.id', $id);
            return $builder->get()->getResultArray();
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
