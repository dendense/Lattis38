<!DOCTYPE html>
<html>
<?php
session_start();
if($_SESSION['roles']==""){
    header("location:../index.php?pesan=gagal");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="container" style="margin-top : 200px" align="center">
        <div class="mt-5 rounded" style="width: 700px">
            <div class="mb-3 h3">Selamat Datang di SKADIK 501, <?php echo $_SESSION['roles']?></div>

            <a href="/lattis38/siswa/data_siswa.php" class="btn md btn-primary">Data Siswa</a>
            <a href="/lattis38/antap/data_antap.php" class="btn md btn-primary">Data Antap</a>
            <a href="/lattis38/hanjar/data_hanjar.php" class="btn md btn-primary">Data Hanjar</a>
            <a href="/lattis38/logout.php" class="btn md btn-danger">Log Out</a>
</body>

</html>