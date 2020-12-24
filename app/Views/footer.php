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
                    <div class="button-get-started text-center">
                        <a href="<?php echo site_url('Beranda/logout')?>" class="btn btn-danger btn-fill btn-lg"> Logout </a>
                    </div>
                <?php         
                }
                else{
                ?>
                <div class="button-get-started text-center">
                    <a href="<?php echo site_url('Beranda/masuk');?>" class="btn btn-danger btn-fill btn-lg">Login</a>
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
                        <h5 class="title">Kelompok 3 P2</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="">Hilmi Nugroho J3C118154</a></li>
                                <li>
                                    <a href="">Defa Daniah J3C118139</a>
                                </li>
                                <li>
                                    <a href="">Cika Mielenie A J3C218195</a>
                                </li>
                                <li>
                                    <a href="">Dimas Eka Putra J3C118083</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                    <h5 class="title"></h5>   <br>                     
                        <nav>
                            <ul>
                                <li>
                                    <a href="">Egie Hendyana P J3C218174</a>
                                </li>
                                <li>
                                    <a href="">Danny Thorqurrohman J3C118130</a></li>
                                <li>
                                    <a href="">Haidar Rasyid A M J3C118075</a>
                                </li>
                                <li>
                                    <a href="">Kaisar Renaissanc Al-Ars J3C118088</a>
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
