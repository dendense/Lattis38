<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$nrp = $_POST['nrp'];
$sekolah = $_POST['sekolah'];
$jabatan = $_POST['jabatan'];
$korp = $_POST['korp'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
 
// update data ke database
if (mysqli_query($koneksi,"UPDATE siswa SET nama='$nama', pangkat='$pangkat', nrp='$nrp' , sekolah='$sekolah', jabatan='$jabatan' , korp='$korp', jenis='$jenis' , agama='$agama', alamat='$alamat' WHERE nrp='$nrp'")){
    header("location:data_siswa.php");
}else{
    echo "<script>location='data_siswa.php';</script>";
}
 
// mengalihkan halaman kembali ke index.php

 
?>