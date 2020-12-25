<?php
namespace App\Controllers;

use App\Models\Admin_Model;
use App\Models\Member_Model;
use App\Models\Pangan_Model;
use App\Models\Berita_Model;
use App\Models\Manfaat_Model;
use App\Models\Resep_Model;

class Admin extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->adminModel = new Admin_Model();
        $this->memberModel = new Member_Model();
        $this->panganModel = new Pangan_Model();
        $this->beritaModel = new Berita_Model();
        $this->manfaatModel = new Manfaat_Model();
        $this->resepModel = new Resep_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataAdmin'] = $this->adminModel->findAll();
        $data['dataMember'] = $this->memberModel->findAll();
        $data['dataPangan'] = $this->panganModel->findAll();
        $data['dataBerita'] = $this->beritaModel->findAll();
        $data['dataManfaat'] = $this->manfaatModel->findAll();
        $data['dataResep'] = $this->resepModel->findAll();

        echo view('admin_v', $data);        
    }

    public function add() {        
        echo view('admin_form_v');
    }

    public function edit($id) {
        $data['dataAdmin'] = $this->adminModel->find($id);
        
        echo view('admin_form_v', $data);        
    }

    public function save() {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->adminModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_admin' => $id];

            $response = $this->adminModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Admin'));
    }

    public function delete($id) {
        $response = $this->adminModel->delete($id);
        return redirect()->to(site_url('Admin'));
    }

    public function login()
    { 
        $adminModel = new Admin_Model();
        $where = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password'))
        ];

        $data = $adminModel->where($where)->find();
        if (!empty($data)) {
            $this->session->set('username',$this->request->getPost('username'));
            $this->session->setFlashdata('response',['status' => 1,'message' => 'Berhasil Login']);     
        }
        else{
            $this->session->setFlashdata('response',['status' => 0,'message' => 'Gagal Login']);  
        }
        return redirect()->to(site_url('Beranda'));
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('Beranda'));
    }

}