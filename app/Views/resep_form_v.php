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
    
            <div class="container-fluid">
                 <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Resep</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('Beranda') ?>">Beranda</a></li>
                            <li class="active">Tambah Resep</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="<?php echo site_url('Resep/save') ?>" method="POST">
                                <div class="form-group">
                                    <label class="col-md-12">Kode Resep</label>
                                    <div class="col-md-12">
                                        <input type="text" name="kode_resep" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="col-md-12">Judul Resep</label>
                                    <div class="col-md-12">
                                        <input type="text" name="judul" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Gambar</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-line" name="foto" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Deskripsi</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Author</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="author">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="Reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"></footer>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>