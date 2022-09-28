<html>

<head>
    <title>Panel Siswa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<?php
session_start();
if($_SESSION['roles']==""){
    header("location:../index.php?pesan=gagal");
}
?>

<body>
    <div class="container" style="margin-top : 200px" align="center">
        <div class="mt-5 rounded" style="width: 700px">
            <div class="mb-3 h3">Selamat Datang <b><?php echo $_SESSION['roles']?></b></div>
            <a href="data_siswa.php" class="btn btn-success">Data Siswa</a>
        </div>
    </div>
</body>

</html>