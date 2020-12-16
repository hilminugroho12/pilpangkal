<?php include'admin_header.php'?>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Berita</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('Admin'); ?>">Beranda</a></li>
                            <li class="active">Berita</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-md-4">
                        <a href="formBerita.html"><button class="fa fa-plus btn btn-danger"> Tambah Berita</button>
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Data Berita</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Berita</th>
                                            <th>Judul Berita</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Author</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>BR01</td>
                                            <td>Kentang itu ternyata bukan singkong</td>
                                            <td>.jpg</td>
                                            <td>harus panjang harus panjang </td>
                                            <td>Member 1</td>
                                            <td>
                                                <a href="editBerita.html"><button class="fa fa-edit btn btn-success"></button></a>
                                                <button class="fa fa-trash-o btn btn-danger"></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> </footer>
        </div>
        <!-- /#page-wrapper -->
<?php include'admin_footer.php'?>