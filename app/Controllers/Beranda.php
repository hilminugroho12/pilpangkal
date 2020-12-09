<?php

namespace App\Controllers;
//Beranda = Controller
//beranda_v = view
//beranda_m = model


class Beranda extends BaseController 
{
    public function index()
    {    
        echo view('beranda_v.php');        
    }
}

?>

