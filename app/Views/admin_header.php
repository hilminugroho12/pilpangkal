<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
            content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, pixel  design, pixel  dashboard bootstrap 4 dashboard template">
        <meta name="description"
            content="Pixel Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>Pil Pangkal</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/pixel-admin-lite/" />
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16"
            href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/images/logos/pixel-favicon.png">
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="<?php echo base_url('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css'); ?>" rel="stylesheet">
        <!-- toast CSS -->
        <link href="<?php echo base_url('assets/plugins/bower_components/toast-master/css/jquery.toast.css'); ?>" rel="stylesheet">
        <!-- morris CSS -->
        <link href="<?php echo base_url('assets/plugins/bower_components/morrisjs/morris.css'); ?>" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/style_admin.css'); ?>" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url('assets/css/colors/blue-dark.css'); ?>" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <!-- Preloader -->

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg "
                        href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i
                            class="fa fa-bars"></i></a>
                    <div class="top-left-part"><a class="logo" href="index.html"><b><img
                                    src="<?php echo base_url('assets/img/pil.png'); ?>" alt="home" /></b><span
                                class="hidden-xs"><img src="<?php echo base_url('assets/img/pil_pangkal.png'); ?>" alt="home" /></span></a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <a class="fa fa-power-off" href="<?php echo site_url('Admin/logout') ?>"><b class="hidden-xs"> Keluar</b> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('Admin'); ?>" class="waves-effect"><i class="fa fa-user fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Admin</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin_Member'); ?>" class="waves-effect"><i class="fa fa-users fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Member</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin_Pangan'); ?>" class="waves-effect"><i class="fa fa-star fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Pangan Lokal</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin_Berita'); ?>" class="waves-effect"><i class="fa fa-bullhorn fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Berita</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin_Manfaat'); ?>" class="waves-effect"><i class="fa fa-check-circle-o fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Manfaat</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin_Resep'); ?>" class="waves-effect"><i class="fa fa-cutlery fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Resep</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Left navbar-header end -->