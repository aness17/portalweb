<?php

namespace App\Models;

use CodeIgniter\Model;

class Log_model extends Model
{
    protected $table = 'tlog';
    protected $primary = 'id_log';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_log', 'id_user', 'id_berita', 'ip_add', 'remarks', 'browser', 'time_access', 'slug'];

    public function CountViewsNews($slug)
    {
        $builder = $this->db->table($this->table);
        $builder->selectCount('id_log');
        $builder->where('remarks', 'Read News');
        $builder->where('slug', $slug);
        return $builder->get()->getResult();
    }
}
