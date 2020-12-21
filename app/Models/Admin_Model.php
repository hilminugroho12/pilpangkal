<?php namespace App\Models;

use CodeIgniter\Model;

class Admin_Model extends Model {
    protected $table      = 'admin';
    protected $primaryKey = 'kode_admin';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_admin', 'username','password', 'nama', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}