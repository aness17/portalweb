<?php

namespace App\Models;

use CodeIgniter\Model;

class Log_model extends Model
{
    protected $table = 'tlog';
    protected $primary = 'id_log';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_log', 'id_user', 'id_berita', 'ip_add', 'remarks', 'browser', 'time_access', 'slug'];
    public function select($id = false)
    {
        if ($id == false) {
            $builder = $this->db->table($this->table . " as A");
            $builder->join('tuser C', 'A.id_user = C.id', 'LEFT');
            $builder->join('tberita B', 'A.id_berita = B.id', 'LEFT');
            $builder->where('A.time_access like ', '%' . date('Y-m-d') . '%');
            $builder->orderBy('A.time_access desc');
            $builder->limit(10);
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->join('tuser C', 'A.id_user = C.id', 'LEFT');
            $builder->join('tberita B', 'A.id_berita = B.id', 'LEFT');
            $builder->like('A.remarks', 'Read%');
            $builder->orlike('A.remarks', '%Comment%');
            $builder->where('B.id_user', $id);
            $builder->where('A.time_access like ', date('Y-m-d'));
            $builder->orderBy('A.time_access desc');
            $builder->limit(10);
            return $builder->get()->getResultArray();
        }
    }
    public function DataMonthly($year, $id = false)
    {
        $db = db_connect();
        if ($id == false) {
            $result = $db->query("
        SELECT COUNT(DISTINCT(concat(ip_add,browser,slug))) as views , month(time_access) as bln
        FROM `tlog`
        WHERE `remarks` like '%Read%' and time_access like '$year%'
        GROUP BY bln")->getResultArray();
            return $result;
        } else {
            $result = $db->query("
        SELECT COUNT(DISTINCT(concat(tlog.ip_add,tlog.browser,tlog.slug))) as views , month(tlog.time_access) as bln
        FROM `tlog` JOIN tberita on tberita.id = tlog.id_berita
        WHERE `remarks` like '%Read%' and time_access like '$year%' and tberita.id_user = $id
        GROUP BY bln")->getResultArray();
            return $result;
        }
    }
    public function CountViewsNews($slug)
    {
        $builder = $this->db->table($this->table);
        $builder->distinct('ip_add,browser, slug');
        $builder->where(['remarks' => 'Read News', 'slug' => $slug]);
        $builder->like('time_Access', '%' . date('Y-m') . '%');
        $builder->groupBy(['ip_add', 'browser']);
        // $builder->groupBy('browser');
        return $builder->get()->getNumRows();
    }
    public function CountViewsTotal($id = false)
    {
        if ($id == false) {
            $builder = $this->db->table($this->table);
            $builder->distinct('ip_add,browser, slug');
            // $builder->where(['remarks' => 'Read News', 'slug' => $slug]);
            $builder->like('time_Access', '%' . date('Y-m') . '%');
            $builder->groupBy(['ip_add', 'browser']);
            // $builder->groupBy('browser');
            return $builder->get()->getNumRows();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->distinct('ip_add,browser, slug');
            $builder->join('tuser C', 'A.id_user = C.id', 'LEFT');
            $builder->join('tberita B', 'A.id_berita = B.id', 'LEFT');
            $builder->where('B.id_user', $id);
            $builder->like('time_Access', '%' . date('Y-m') . '%');
            $builder->groupBy(['ip_add', 'browser']);
            // $builder->groupBy('browser');
            return $builder->get()->getNumRows();
        }
    }
    public function CountViewsTotalVisitors($id = false)
    {
        if ($id == false) {
            $builder = $this->db->table($this->table);
            $builder->distinct('ip_add,browser, slug');
            $builder->where('id_user', 0);
            $builder->groupBy(['ip_add', 'browser']);
            return $builder->get()->getNumRows();
        } else {
            $builder = $this->db->table($this->table . " as A");
            $builder->distinct('ip_add,browser, slug');
            $builder->join('tuser C', 'A.id_user = C.id', 'LEFT');
            $builder->join('tberita B', 'A.id_berita = B.id', 'LEFT');
            $builder->where('B.id_user', $id);
            $builder->where('A.id_user', 0);
            $builder->groupBy(['ip_add', 'browser']);
            return $builder->get()->getNumRows();
        }
    }
}
