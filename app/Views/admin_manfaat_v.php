<?php include'admin_header.php'?>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manfaat</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('Beranda'); ?>">Beranda</a></li>
                            <li class="active">Manfaat</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php echo site_url('Manfaat/add') ?>"><button class="fa fa-plus btn btn-danger"> Tambah Manfaat</button></a>
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Data Manfaat</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Manfaat</th>
                                            <th>Judul Manfaat</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Author</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dataManfaat as $row): ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $row->kode_manfaat ?></td>
                                            <td><?php echo $row->judul ?></td>
                                            <td><img src="<?php echo base_url('assets/img/'.$row->foto) ?>" alt="" style="width:100px; height:100px;"></td>
                                            <td><p style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi ?></p></td>
                                            <td><?php echo $row->author ?></td>
                                            <td>
                                                <a class="fa fa-edit btn btn-success" href="<?php echo site_url('Manfaat/edit/'.$row->kode_manfaat) ?>" ></a>
                                                <a class="fa fa-trash-o btn btn-danger" onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('Manfaat/delete/'.$row->kode_manfaat); ?>"></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
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