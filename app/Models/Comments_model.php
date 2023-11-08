<?php

namespace App\Models;

use CodeIgniter\Model;

class Comments_model extends Model
{
    protected $table = 'tkomentar';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_berita', 'id_user', 'id_parent', 'comment_content', 'status_content', 'created_at', 'updated_at', 'deleted_at'];

    public function select($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table . " as A");
            $builder->select('B.title_berita,C.name_user, A.*');
            $builder->join('tuser C', 'A.id_user = C.id_user');
            $builder->join('tberita B', 'A.id_berita = B.id');
            $builder->where('A.id_parent', 0);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->join('tuser C', 'A.id_user = C.id_user');
            $builder->where('A.id_berita', $id);
            $builder->where('A.id_parent', 0);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        }
    }
    public function balas($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table . " as A");
            $builder->join('tuser C', 'A.id_user = C.id_user');
            $builder->join('tberita B', 'A.id_berita = B.id');
            $builder->where('A.id_parent >', 0);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->join('tuser C', 'A.id_user = C.id_user');
            $builder->where('A.id_parent >', 0);
            $builder->where('A.id_berita', $id);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        }
    }
    public function getCountComment($id)
    {

        $builder = $this->db->table($this->table);
        $builder->selectCount('id');
        $builder->where('id_berita', $id);
        return $builder->get()->getResult();
    }
}
