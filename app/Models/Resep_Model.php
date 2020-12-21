<?php namespace App\Models;

use CodeIgniter\Model;

class Resep_Model extends Model {
    protected $table      = 'resep';
    protected $primaryKey = 'kode_resep';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_resep', 'kode_admin', 'kode_member', 'author', 'video', 'judul','deskripsi', 'foto'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}