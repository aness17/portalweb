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
            $builder->select('B.title_berita,C.name_user,A.id as id_comment ,A.*,C.*,B.id_user as id_creator');
            $builder->join('tuser C', 'A.id_user = C.id');
            $builder->join('tberita B', 'A.id_berita = B.id');
            // $builder->where('A.id_parent', 0);
            // $builder->where('A.status_content', 1);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->select('A.id as id_comment ,A.*,C.*, B.id_user as id_creator');
            $builder->join('tuser C', 'A.id_user = C.id');
            $builder->join('tberita B', 'A.id_berita = B.id');
            $builder->where('A.id_berita', $id);
            $builder->where('A.id_parent', 0);
            $builder->where('A.status_content', 1);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        }
    }
    public function balas($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table . " as A");
            $builder->select('A.id as id_comment ,A.*,C.*, B.id_user as id_creator');
            $builder->join('tuser C', 'A.id_user = C.id');
            $builder->join('tberita B', 'A.id_berita = B.id');
            $builder->where('A.id_parent >', 0);
            $builder->where('A.status_content', 1);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->select('A.id as id_comment ,A.*,C.*, B.id_user as id_creator');
            $builder->join('tuser C', 'A.id_user = C.id');
            $builder->join('tberita B', 'A.id_berita = B.id');
            $builder->where('A.id_parent >', 0);
            $builder->where('A.id_berita', $id);
            $builder->where('A.status_content', 1);
            $builder->orderBy('A.created_at desc');
            return $builder->get()->getResultArray();
        }
    }
    public function getCountComment($id)
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('id');
        $builder->where('id_berita', $id);
        $builder->where('status_content', 1);
        return $builder->get()->getResult();
    }
    public function getCommentbyParent($id_parent)
    {
        $builder = $this->db->table($this->table . " as A");
        $builder->select('C.id as iduser,A.id as id_comment ,A.*,C.*');
        $builder->join('tuser C', 'A.id_user = C.id');
        $builder->where('A.id', $id_parent);
        $builder->where('A.status_content', 1);
        $builder->orderBy('A.created_at desc');
        return $builder->get()->getResultArray();
    }
    public function selectnews($id)
    {
        $builder = $this->db->table($this->table . " as A");
        $builder->join('tberita B', 'A.id_berita = B.id');
        $builder->where('A.id ', $id);
        return $builder->get()->getRowArray();
    }
}
