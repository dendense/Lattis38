<?php
include '../config.php';
$nama  = $_POST["nama"];
$pangkat   = $_POST["pangkat"];
$nrp   = $_POST["nrp"];
$korp   = $_POST["korp"];
$jabatan   = $_POST["jabatan"];
$jenis   = $_POST["jenis"];
$agama   = $_POST["agama"];
$alamat   = $_POST["alamat"];
$foto   = $_POST["foto"];



$query_sql = "INSERT INTO antap (nama, pangkat, nrp, korp, jabatan, jenis, agama, alamat, foto) VALUES ('$nama', '$pangkat', '$nrp', '$korp', '$jabatan', '$jenis', '$agama', '$alamat', '$foto')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('antap ",$nama," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='data_antap.php';</script>";

} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>