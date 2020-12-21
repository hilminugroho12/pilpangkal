<?php
namespace App\Controllers;

use App\Models\Resep_Model;

class Resep extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->resepModel = new Resep_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataResep'] = $this->resepModel->findAll();
        $data['isLogin'] = $this->session->get('username');
        return view('resep_v', $data);        
    }

    public function add() {        
        echo view('resep_form_v');
    }

    public function edit($id) {
        $data['dataBertia'] = $this->resepModel->find($id);
        
        echo view('resep_form_v', $data);        
    }

    public function save() {
        $data = [
            'kode_resep' => $this->request->getPost('kode_resep'),
            'kode_admin' => $this->request->getPost('kode_admin'),
            'kode_member' => $this->request->getPost('kode_member'),
            'judul' => $this->request->getPost('judul'),
            'foto' => $this->request->getPost('foto'),
            'video' => $this->request->getPost('video'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'author' => $this->request->getPost('author')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->resepModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_resep' => $id];

            $response = $this->resepModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Resep'));
    }

    public function delete($id) {
        $response = $this->resepModel->delete($id);
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Resep'));
    }

}