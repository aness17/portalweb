<?php

namespace App\Models;

use CodeIgniter\Model;

class Categorys_model extends Model
{
    protected $table = 'tkategori';
    protected $primary = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name_kategori'];


    public function sumKategori()
    {
        $builder = $this->db->table($this->table);
        $builder->selectSum('id');
        return $builder->get();
    }
}
