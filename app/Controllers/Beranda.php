<?php

namespace App\Controllers;
use App\Models\Admin_Model;
use App\Models\Berita_Model;
use App\Models\Manfaat_Model;
use App\Models\Resep_Model;

//Beranda = Controller
//beranda_v = view
//beranda_m = model


class Beranda extends BaseController 
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->beritaModel = new Berita_Model();
        $this->manfaatModel = new Manfaat_Model();
        $this->resepModel = new Resep_Model();        
    }

    public function index()
    {            
        $data['session'] = $this->session->getFlashdata('response');
        $data['isLogin'] = $this->session->get('username');
        $data['dataBerita'] = $this->beritaModel->findAll();
        $data['dataManfaat'] = $this->manfaatModel->findAll();
        $data['dataResep'] = $this->resepModel->findAll();        
        return view('beranda_v',$data);                
    }

    public function masuk()
    {
        return view('login_v');
    }

    public function login()
    { 
        $adminModel = new Admin_Model();
        $where = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password'))
        ];

        $data = $adminModel->where($where)->find();
        // var_dump($where);die;
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

?>

