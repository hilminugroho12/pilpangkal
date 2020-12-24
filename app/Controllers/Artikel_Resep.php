<?php
namespace App\Controllers;
use App\Models\Resep_Model;

class Artikel_Resep extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->resepModel = new Resep_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataResep'] = $this->resepModel->findAll();

        echo view('artikel_resep_v', $data);        
    }

    public function tampil($id)
    {
        $data['dataResep'] = $this->resepModel->find($id);
        
        echo view('artikel_resep_v', $data);        
    }
}