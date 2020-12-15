<?php

namespace App\Controllers;
//Beranda = Controller
//beranda_v = view
//beranda_m = model


class Register extends BaseController 
{
    public function index()
    {    
        echo view('header');
        echo view('register_v.php');        
    }
}

?>

