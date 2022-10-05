<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama  = $_POST["nama"];
$pangkat   = $_POST["pangkat"];
$nrp   = $_POST["nrp"];
$korp   = $_POST["korp"];
$jabatan   = $_POST["jabatan"];
$jenis   = $_POST["jenis"];
$agama   = $_POST["agama"];
$alamat   = $_POST["alamat"];
// update data ke database
if (mysqli_query($koneksi,"UPDATE antap SET nama='$nama', pangkat='$pangkat', nrp='$nrp', jabatan='$jabatan', korp='$korp', jenis='$jenis', agama='$agama', alamat='$alamat' WHERE nrp='$nrp'")){
    header("location:data_antap.php");
}else{
    echo "<script>location='data_antap.php';</script>";
}
 
// mengalihkan halaman kembali ke index.php

 
?>