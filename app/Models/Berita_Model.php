<?php namespace App\Models;

use CodeIgniter\Model;

class Berita_Model extends Model {
    protected $table      = 'berita';
    protected $primaryKey = 'kode_berita';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_berita','kode_admin','author','kode_member', 'judul','deskripsi', 'foto'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}