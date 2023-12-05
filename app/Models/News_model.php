<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class News_model extends Model
{
    protected $table = 'tberita';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'title_berita', 'id_kategori', 'isi_berita', 'jadwal_tayang', 'create_date', 'update_date', 'deleted_date', 'slug', 'status', 'doc', 'breaking_news'];

    public function select($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            // $builder->where('tberita.jadwal_tayang <', date('Y-m-d'));
            $builder->orderBy('tberita.jadwal_tayang desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.id', $id);
            // $builder->where('tberita.jadwal_tayang <', date('Y-m-d'));
            return $builder->get()->getResultArray();
        }
    }
    public function selectbyUser($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.id_user', $id);
            return $builder->get()->getResultArray();
        }
    }

    public function selectnews($src = NULL)
    {
        if ($src === NULL) {
            $this->builder()
                ->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*')
                ->join('tuser A', 'tberita.id_user = A.id')
                ->join('tkategori B', 'tberita.id_kategori = B.id')
                ->where('tberita.jadwal_tayang <=', date('Y-m-d'))
                ->where('tberita.status like', 'Published%')
                ->orderBy('tberita.jadwal_tayang desc');
            return $this;
        } else {
            $this->builder()
                ->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*')
                ->join('tuser A', 'tberita.id_user = A.id')
                ->join('tkategori B', 'tberita.id_kategori = B.id')
                ->where('tberita.title_berita like', '%' . $src . '%')
                ->where('tberita.jadwal_tayang <=', date('Y-m-d'))
                ->where('tberita.status like', 'Published%')
                ->orderBy('tberita.jadwal_tayang desc');
            return $this;
        }
    }
    public function getPageSlug($slug)
    {
        $builder = $this->db->table($this->table);
        $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
        $builder->join('tuser A', 'tberita.id_user = A.id');
        $builder->join('tkategori B', 'tberita.id_kategori = B.id');
        $builder->where('tberita.slug like', '%' . $slug . '%');
        return $builder->get()->getResultArray();
    }
    public function breaking_news()
    {
        $builder = $this->db->table($this->table);
        $builder->join('tkategori B', 'tberita.id_kategori = B.id');
        $builder->where('breaking_news ', 1);
        $builder->where('status ', 'Published');
        return $builder->get()->getResultArray();
    }
    public function selectcountnews($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            return $builder->get()->getResult();
        } else {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            $builder->where('id_user', $id);
            return $builder->get()->getResult();
        }
    }
    public function publishcountnews($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            $builder->where('status', 'Published');
            return $builder->get()->getResult();
        } else {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            $builder->where('status', 'Published');
            $builder->where('id_user', $id);
            return $builder->get()->getResult();
        }
    }
    public function unpublishcountnews($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            $builder->where('status', 'Unpublished');
            return $builder->get()->getResult();
        } else {
            $builder = $this->db->table($this->table);
            $builder->selectCount('id');
            $builder->where('status', 'Unpublished');
            $builder->where('id_user', $id);
            return $builder->get()->getResult();
        }
    }
}
