<?php

namespace App\Models;

use CodeIgniter\Model;

class Log_model extends Model
{
    protected $table = 'tlog';
    protected $primary = 'id_log';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_log', 'id_user', 'id_berita', 'ip_add', 'remarks', 'browser', 'time_access', 'slug'];
    public function select()
    {
        $builder = $this->db->table($this->table . " as A");
        $builder->join('tuser C', 'A.id_user = C.id', 'LEFT');
        $builder->join('tberita B', 'A.id_berita = B.id', 'LEFT');
        $builder->where('A.time_access like ', '%' . date('Y-m-d') . '%');
        $builder->orderBy('A.time_access desc');
        return $builder->get()->getResultArray();
    }
    public function CountViewsNews($slug)
    {
        $builder = $this->db->table($this->table);
        $builder->distinct('ip_add,browser, slug');
        $builder->where(['remarks' => 'Read News', 'slug' => $slug]);
        // $builder->where('slug', $slug);
        $builder->groupBy(['ip_add', 'browser']);
        // $builder->groupBy('browser');
        return $builder->get()->getNumRows();
    }
    public function CountViewsTotal()
    {
        $builder = $this->db->table($this->table);
        $builder->distinct('ip_add,browser, slug');
        // $builder->where(['remarks' => 'Read News', 'slug' => $slug]);
        // $builder->where('slug', $slug);
        $builder->groupBy(['ip_add', 'browser']);
        // $builder->groupBy('browser');
        return $builder->get()->getNumRows();
    }
    public function CountViewsTotalVisitors()
    {
        $builder = $this->db->table($this->table);
        $builder->distinct('ip_add,browser, slug');
        // $builder->where(['remarks' => 'Read News', 'slug' => $slug]);
        $builder->where('id_user', 0);
        $builder->groupBy(['ip_add', 'browser']);
        // $builder->groupBy('browser');
        return $builder->get()->getNumRows();
    }
}
