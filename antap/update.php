<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$nrp = $_POST['nrp'];
$jabatan = $_POST['jabatan'];
$korp = $_POST['korp'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
// update data ke database
if (mysqli_query($koneksi,"UPDATE antap SET nama='$nama', pangkat='$pangkat', nrp='$nrp' , sekolah='$sekolah', jabatan='$jabatan' , korp='$korp', jenis='$jenis' , agama='$agama', alamat='$alamat' WHERE nrp='$nrp'")){
    header("location:data_antap.php");
}else{
    echo "<script>location='data_antap.php';</script>";
}
 
// mengalihkan halaman kembali ke index.php

 
?>