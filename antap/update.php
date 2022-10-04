<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$nrp = $_POST['nrp'];
 
// update data ke database
if (mysqli_query($koneksi,"UPDATE antap SET nama='$nama', pangkat='$pangkat', nrp='$nrp' WHERE nrp='$nrp'")){
    header("location:data_antap.php");
}else{
    echo "<script>location='data_siswa.php';</script>";
}
 
// mengalihkan halaman kembali ke index.php

 
?>