<?php
//Ini untuk koneksi saja
$user_name = "root";
$password  = "";
$database  = "db_pilpangkal"; //Tulis sesuai dengan nama database yang digunakan
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
$find_db=mysql_select_db($database);
//Akhir koneksi

//Pertama ambil data kiriman dari form
$judul = @$_POST['judul'];
$deskripsi = @$_POST['deskripsi'];
$foto = @$_POST['foto'];

//Kemudian dapat langsung kita simpan dengan query INSERT
$sql_simpan = mysql_query ("INSERT into pangan_lokal (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$foto')");

if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>