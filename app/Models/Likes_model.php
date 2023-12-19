<?php

namespace App\Models;

use CodeIgniter\Model;

class Likes_model extends Model
{
    protected $table = 'tlike';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_berita', 'id_user', 'created_at', 'updated_at', 'deleted_at', 'status_content'];

    public function getCountLike($id)
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('id');
        $builder->where('id_berita', $id);
        $builder->where('status_content', 1);
        return $builder->get()->getResult();
    }

}
