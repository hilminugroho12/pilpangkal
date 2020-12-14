<?php
namespace App\Controllers;

use App\Models\Manfaat_Model;

class Manfaat extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->manfaatModel = new Manfaat_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataManfaat'] = $this->manfaatModel->findAll();

        echo view('header');
        echo view('manfaat_v', $data);
        echo view('footer');
    }

    public function add() {        
        echo view('manfaat_form_v');
    }

    public function edit($id) {
        $data['dataManfaat'] = $this->manfaatModel->find($id);
        
        echo view('manfaat_form_v', $data);        
    }

    public function save() {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->manfaatModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_manfaat' => $id];

            $response = $this->manfaatModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Manfaat'));
    }

    public function delete($id) {
        $response = $this->manfaatModel->delete($id);
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Manfaat'));
    }

}