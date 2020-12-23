<?php
namespace App\Controllers;
use App\Models\Manfaat_Model;

class Admin_Manfaat extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->manfaatModel = new Manfaat_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataManfaat'] = $this->manfaatModel->findAll();

        echo view('admin_manfaat_v', $data);        
    }
}