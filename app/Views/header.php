<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/pil.png');?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/pil.png');?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pil Pangkal</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/gaia.css');?>" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/fonts/pe-icon-7-stroke.css');?>" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="" class="navbar-brand">
                    <img src="<?php echo base_url('assets/img/pil_pangkal.png');?>">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="<?php echo site_url('Beranda'); ?>">Beranda</a></li>
                    <li>
                    <li>
                        <a href="<?php echo site_url('Pangan'); ?>">Pangan Lokal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Berita'); ?>">Berita</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Manfaat'); ?>">Manfaat</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Resep'); ?>">Resep</a>
                    </li>
                    <?php 
                    if (!empty($isLogin)) 
                    {
                    ?> 
                        <li>
                            <a href="<?php echo site_url('Admin'); ?>">Dasboard Admin</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>