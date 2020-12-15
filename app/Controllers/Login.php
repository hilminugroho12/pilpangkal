<?php

namespace App\Controllers;
use App\Models\Admin_Model;
//Beranda = Controller
//beranda_v = view
//beranda_m = model


class Login extends BaseController 
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    
    }

    public function index()
    {    
        $data['session'] = $this->session->getFlashdata('response');
        $data['isLogin'] = $this->session->get('username');
        
        return view('login_v', $data);        
    }

    public function login()
    { 
        $adminModel = new Admin_Model();
        $where = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password')
        ];

        $data = $adminModel->where($where)->find();
        //var_dump($data);die;
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

