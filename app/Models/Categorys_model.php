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
    public function getCategory($value)
    {
        $builder = $this->db->table($this->table);
        $builder->select('name_kategori');
        $builder->where('name_kategori like', '%' . $value . '%');
        return $builder->get()->getRowArray();
    }
}
