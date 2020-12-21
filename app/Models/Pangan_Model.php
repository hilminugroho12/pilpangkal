<?php namespace App\Models;

use CodeIgniter\Model;

class Pangan_Model extends Model {
    protected $table      = 'pangan_lokal';
    protected $primaryKey = 'kode_Pangan';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_pangan', 'kode_admin', 'author', 'nama_pangan','deskripsi', 'foto'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}