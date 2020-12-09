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
                        <a href="<?php echo site_url('Beranda');?>">Beranda</a></li>
                    <li>
                    <li>
                        <a href="<?php echo site_url('Pangan');?>">Pangan Lokal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Berita');?>">Berita</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Manfaat');?>">Manfaat</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Resep');?>">Resep</a>
                    </li>
                    <li>
                        <form class="form-inline">
                            <input class="form-control search" type="search" placeholder="Search">
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_pangan1.jpg');?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Pangan Lokal Indonesia</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Pangan Lokal Kita!</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Hasil bumi Indonesia</p>

                    <a href="<?php echo site_url('Pangan/add');?>" type="btn btn-primary">Upload Pangan Lokal</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/kentang.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Kentang</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/jagung.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Jagung</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/ubi.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Ubi</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/pisang.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Pisang</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/berita3.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Kentang Kekinian</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/berita3.jpg');?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title">Kentang Kekinian</h3>
                            <p class="card-text">Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <div class="text-right">
                                <a href=""><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head3.jpg');?>')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Ingin ikut berbagi seputar Pangan Lokal Indonesia?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">Untuk kamu yang mau ikut meramaikan konten-konten menarik seputar pangan lokal. Yuk gabung sekarang!</p>
                </div>

                <div class="button-get-started text-center">
                    <a href="#" class="btn btn-danger btn-fill btn-lg">Register</a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <h5 class="title">Telusuri</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('Beranda');?>">Beranda</a></li>
                                <li>
                                    <a href="<?php echo site_url('Pangan');?>">Pangan Lokal</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Berita');?>">Berita</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Manfaat');?>">Manfaat</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Resep');?>">Resep</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <h5 class="title"> Pilih Pangan Lokal</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Kentang</a></li>
                                <li>
                                    <a href="#">Ubi</a>
                                </li>
                                <li>
                                    <a href="#">Singkong</a>
                                </li>
                                <li>
                                    <a href="#">Pisang</a>
                                </li>
                                <li>
                                    <a href="#">Sagu</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <h5 class="title">Ingin tau?</h5>
                        <nav>
                            <ul>
                                <li>
                                    <form class="form-inline">
                                        <input class="form-control search2" type="search" placeholder="Search">
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="js/gaia.js"></script>

</html>