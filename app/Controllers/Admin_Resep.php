<?php
namespace App\Controllers;
use App\Models\Resep_Model;

class Admin_Resep extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->resepModel = new Resep_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataResep'] = $this->resepModel->findAll();

        echo view('admin_resep_v', $data);        
    }
}