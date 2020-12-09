<?php
namespace App\Controllers;

use App\Models\Pangan_Model;

class Pangan extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->panganModel = new Pangan_Model();
    }

    public function index() {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataPangan'] = $this->panganModel->findAll();

        echo view('Pangan_v', $data);
    }

    public function add() {
        echo view('header_v');
        echo view('Pangan_form_v');
        echo view('footer_v');
    }

    public function edit($id) {
        $data['dataPangan'] = $this->panganModel->find($id);
        
        echo view('header_v');
        echo view('Pangan_form_v', $data);
        echo view('footer_v');
    }

    public function save() {
        $data = [
            'kode_pangan' => $this->request->getPost('kode'),
            'nama_pangan' => $this->request->getPost('Pangan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->panganModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_Pangan' => $id];

            $response = $this->panganModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Pangan_c'));
    }

    public function delete($id) {
        $response = $this->panganModel->delete($id);
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Pangan_c'));
    }

}