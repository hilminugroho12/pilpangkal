<?php
namespace App\Controllers;

use App\Models\Berita_Model;

class Berita extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $this->beritaModel = new Berita_Model();
    }

    public function index() {   
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataBerita'] = $this->beritaModel->findAll();

        echo view('berita_v', $data);
    }

    public function add() {        
        echo view('berita_form_v');
    }

    public function edit($id) {
        $data['dataBertia'] = $this->beritaModel->find($id);
        
        echo view('berita_form_v', $data);        
    }

    public function save() {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $this->request->getPost('foto')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->beritaModel->insert($data);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        } else { // Update
            $where = ['kode_berita' => $id];

            $response = $this->beritaModel->update($where, $data);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Berita'));
    }

    public function delete($id) {
        $response = $this->beritaModel->delete($id);
        
        if ($response) {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal dihapus.']);
        }

        return redirect()->to(site_url('Berita'));
    }

}