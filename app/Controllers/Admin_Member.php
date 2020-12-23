<?php
namespace App\Controllers;
use App\Models\Member_Model;

class Admin_Member extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->memberModel = new Member_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataMember'] = $this->memberModel->findAll();

        echo view('admin_member_v', $data);        
    }
}