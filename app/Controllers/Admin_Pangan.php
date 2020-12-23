<?php
namespace App\Controllers;
use App\Models\Pangan_Model;

class Admin_Pangan extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->panganModel = new Pangan_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataPangan'] = $this->panganModel->findAll();

        echo view('admin_pangan_v', $data);        
    }
}