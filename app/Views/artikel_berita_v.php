<?php include 'header.php' ?>
<div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_berita1.jpg') ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Berita Pangan Lokal</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section" id="berita">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Tren Sarapan Sehat</h2>
                    <div class="separator separator-danger">✻</div>
                    <p>
                        <a href="#" class="btn btn-social btn-facebook btn-simple">
                            <i class="fa fa-pencil"></i> Author
                        </a>
                        <a href="#" class="btn btn-social btn-dribbble btn-simple">
                            <i class="fa fa-calendar"></i> Tanggal
                        </a>
                         <a href="#" class="btn btn-social btn-dribbble btn-simple">
                            <i class="fa fa-heart"></i> Suka
                        </a>
                        <a href="#" class="btn btn-social btn-twitter btn-simple">
                            <i class="fa fa-share"></i> Berbagi
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <img src="img/berita1.jpg" class="artikel" alt="">
                    <div class="card-body">
                            <p>Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <p>Bubur dan kopi telah menjadi menu sarapan yang disukai banyak orang di dunia. Menikmati bubur sambil didampingi dengan secangkir kopi panas bisa jadi menu yang sempurna sebelum memulai aktivitas seharian.</p>
                            <p>Namun, apa jadinya jika kedua ikon sarapan ini digabungkan menjadi sebuah makanan? Beberapa bulan terakhir media sosial dipenuhi foto-foto menu sarapan modern semacam bubur, tetapi bercita rasa kopi. Makanan ini disebut latte poridge atau bubur latte. Makanan ini pertama kali dipublikasikan oleh Rochelle Bilow di tahun 2015 dalam website Bon Appetit.</p>
                            <p>Bubur latte dihidangkan oleh seorang bernama Johanna Hirschboeck, yakni seorang pemilik kedai kopi Cuppa Joe yang bertempat di kota pegunungan bernama Breckenridge, Colorado. Billow, dalam artikelnya menuliskan bahwa makanan ini merupakan oatmeal yang diseduh dengan susu dan espreso. Teksturnya amat unik, kental namun cair. Makanan ini membuat penikmatnya dapat meminum sekaligus memakannya. “Oats mengentalkan campuran menjadi konsistensi seperti smoothie, yang membuatnya menyenangkan untuk diminum. </p>
                            <p>Tetapi ada juga banyak bagian di bawah cangkir yang sempurna untuk diraup menggunakan sendok” tulis Billow. Selain nikmat, bubur latte juga memiliki nutrisi yang baik untuk tubuh. Bahan oatmeal yang digunakan dalam bubur latte memiliki manfaat yang bagus untuk menurunkan kadar kolestrol dan menekan kadar gula darah, demikian seperti diwartakan HealthLine.</p>
                            <p>Sementara bahan utama lainnya, yakni espresso merupakan minuman rendah kalori dan tinggi oksidan. Ditambah, aroma yang dihasilkannya dapat meningkatkan mood. Bagi Anda yang sedang melakukan diet, tidak perlu ragu untuk menikmati bubur latte, karena makanan ini mengenyangkan tetapi memiliki kalori dan kandungan gula yang cenderung rendah.</p>
                    </div> 
                </div>
                <div class="col-md-3">
                    <?php foreach($dataBerita as $row): ?>
                    <img src="img/berita2.jpg" class="artikel" alt="aaaa">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row->judul ?></h3>
                        <a href="#" class="card-text">Selengkapnya..</p>
                    </div>
                    <hr>
                    <?php endforeach ?>                    
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>