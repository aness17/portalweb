<?php

namespace App\Models;

use CodeIgniter\Model;

class News_model extends Model
{
    protected $table = 'tberita';
    protected $primary = 'id';
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
            $builder->orderBy('tberita.jadwal_tayang desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.id', $id);
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
    public function selectnews($sc = NULL)
    {
        if ($sc === null) {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->orderBy('tberita.jadwal_tayang desc');
            return $builder->get()->getResultArray();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('B.id as kategori, tberita.id as berita, A.*, B.*, tberita.*');
            $builder->join('tuser A', 'tberita.id_user = A.id');
            $builder->join('tkategori B', 'tberita.id_kategori = B.id');
            $builder->where('tberita.title_berita like', '%' . $sc . '%');
            $builder->orderBy('tberita.jadwal_tayang desc');
            return $builder->get()->getResultArray();
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
        $builder->select('title_berita');
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
    function update_counter($slug)
    {
        $builder = $this->db->table($this->table);
        // return current article views 
        $builder->where('slug', urldecode($slug));
        $builder->select('news_views');

        $count = $this->db->table('tberita');
        // then increase by one 
        $builder->where('slug', urldecode($slug));
        $builder->set('news_views', ($count->article_views + 1));
        $builder->update('tberita');
    }
}
