<?php
include '../config.php';
$foto       = $_POST["foto"];
$nama       = $_POST["nama"];
$pangkat    = $_POST["pangkat"];
$nrp        = $_POST["nrp"];
$sekolah    = $_POST["sekolah"];
$jabatan    = $_POST["jabatan"];
$korp       = $_POST["korp"];
$jenis      = $_POST["jenis"];
$agama      = $_POST["agama"];
$alamat     = $_POST["alamat"];

$query_sql = " INSERT INTO siswa (foto, nama, pangkat, nrp, sekolah, jabatan, korp, jenis, agama, alamat) VALUES ('$foto', '$nama', '$pangkat', '$nrp', '$sekolah', '$jabatan', '$korp', '$jenis', '$agama', '$alamat')";

if (mysqli_query($koneksi, $query_sql)){
      echo "<script>alert('siswa" , $nama ," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='data_siswa.php'</script>";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}

?>