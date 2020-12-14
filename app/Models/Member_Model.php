<?php namespace App\Models;

use CodeIgniter\Model;

class Member_Model extends Model {
    protected $table      = 'member';
    protected $primaryKey = 'kode_member';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_member', 'username','passwprd', 'nama', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}