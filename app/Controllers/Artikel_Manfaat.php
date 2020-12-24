<?php
namespace App\Controllers;
use App\Models\Manfaat_Model;

class Artikel_Manfaat extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->manfaatModel = new Manfaat_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataManfaat'] = $this->manfaatModel->findAll();

        echo view('artikel_manfaat_v', $data);        
    }

    public function tampil($id)
    {
        $data['dataManfaat'] = $this->manfaatModel->find($id);
        
        echo view('artikel_manfaat_v', $data);        
    }
}