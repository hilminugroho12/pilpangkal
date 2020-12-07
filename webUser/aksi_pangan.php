<?php
    include 'koneksi.php';

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    $i=mysqli_query("INSERT INTO pangan_lokal (`judul`, `deskripsi`, `foto`) VALUES ('$judul','$deskripsi','$foto') ");
    header("location: pangan.php");
    if ($i) {
        echo 'data berhasil disimpan';
    }
    else {
        echo 'data gagal disimpan';
    }
?>