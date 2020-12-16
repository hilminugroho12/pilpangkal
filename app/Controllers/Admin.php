<?php
namespace App\Controllers;

use App\Models\Admin_Model;

class Admin extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->adminModel = new Admin_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataAdmin'] = $this->adminModel->findAll();

        echo view('admin_v', $data);        
    }

    public function member()
    {
        echo view('admin_member_v');
    }

    public function pangan()
    {
        echo view('admin_pangan_v');
    }

    public function berita()
    {
        echo view('admin_berita_v');
    }

    public function resep()
    {
        echo view('admin_resep_v');
    }

    public function manfaat()
    {
        echo view('admin_manfaat_v');
    }

    public function add() {        
        echo view('admin_form_v');
    }

    public function edit($id) {
        $data['dataBertia'] = $this->adminModel->find($id);
        
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
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Admin'));
    }

}