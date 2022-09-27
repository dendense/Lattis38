<?php
include 'config.php';
$nama           = $_POST["nama"];
$username       = $_POST["username"];
$password       = $_POST["pass"];
$email          = $_POST["email"];
$roles          = $_POST["roles"];

$query_sql = "INSERT INTO akun (nama, username, pass, email, roles) VALUES ('$nama', '$username', '$password', '$email' '$roles')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('akun ",$nama," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='index.php';</script>";

} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>