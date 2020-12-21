<?php namespace App\Models;

use CodeIgniter\Model;

class Manfaat_Model extends Model {
    protected $table      = 'manfaat';
    protected $primaryKey = 'kode_manfaat';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_manfaat','kode_admin', 'author', 'judul','deskripsi', 'foto'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}