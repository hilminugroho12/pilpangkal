<?php
namespace App\Controllers;

use App\Models\Member_Model;

class Register extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->memberModel = new Member_Model();
    }

    public function index() {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataMember'] = $this->memberModel->findAll();

        echo view('register_v');        
    }

    public function edit($id) {
        $data['dataMember'] = $this->memberModel->find($id);
        
        echo view('register_v', $data);        
    }

    public function save() {
        $data = [
            'kode_member' => $this->request->getPost('kode_member'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email')
        ];
        //var_dump($data);die;

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->memberModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_member' => $id];

            $response = $this->memberModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Beranda/login'));
    }

    public function delete($id) {
        $response = $this->memberModel->delete($id);
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Admin_Member'));
    }

}