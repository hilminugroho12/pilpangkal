<div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head3.jpg'); ?>')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Ingin ikut berbagi seputar Pangan Lokal Indonesia?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">Untuk kamu yang mau ikut meramaikan konten-konten menarik seputar pangan lokal. Yuk gabung sekarang!</p>
                </div>

                <?php 
                if (!empty($isLogin)) 
                {
                ?> 
                    <a href="<?php echo site_url('Beranda/logout')?>" class="btn btn-danger"> Logout </a>
                <?php         
                }
                else{
                ?>
                <div class="button-get-started text-center">
                    <a href="<?php echo site_url('Login');?>" class="btn btn-danger btn-fill btn-lg">Login</a>
                </div>
                <?php } ?>
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
                                    <a href="<?php echo site_url('Beranda'); ?>">Beranda</a></li>
                                <li>
                                    <a href="<?php echo site_url('Pangan'); ?>">Pangan Lokal</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Berita'); ?>">Berita</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Manfaat'); ?>">Manfat</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Resep'); ?>">Resep</a>
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
