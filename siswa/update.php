<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$nrp = $_POST['nrp'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', pangkat='$pangkat', nrp='$nrp' where nrp='$nrp'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_siswa.php");
 
?>