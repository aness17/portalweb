<?php

namespace App\Models;

use CodeIgniter\Model;

class Info_model extends Model
{
    protected $table = 'tinfo';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'content', 'status'];

    public function select()
    {
        $builder = $this->db->table($this->table);
        $builder->where('status', 1);
        return $builder->get()->getResultArray();
    }
}
