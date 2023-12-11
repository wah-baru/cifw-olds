<?php

namespace App\Models;

use CodeIgniter\Model;

class News extends Model
{
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content'];

    // Dates
    //protected $useTimestamps = false;
    //protected $dateFormat    = 'datetime';
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // test

    public function getNews($limit = 5, $offset = 0)
    {
        return $this->findAll($limit, $offset);
    }

    public function getNewsById($id)
    {
        return $this->find($id);
    }

    public function createNews($data)
    {
        $this->insert($data);
    }

    public function updateNews($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteNews($id)
    {
        $this->delete($id);
    }
}

