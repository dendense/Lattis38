<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<?php
include '../config.php';
session_start();
$query  = mysqli_query($koneksi,"SELECT * FROM siswa");
$data   = mysqli_fetch_array($query)
?>

<body>
    <div class="container" style="margin-top : 200px" align="center">
        <div class="mt-5 rounded" style="width: 700px">
            <div class="mb-3 h3">Selamat Datang <b><?php echo $data['nama']?></b></div>
            <a href="login.php" class="btn btn-success">Data Siswa</a>
            <a href="../logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>

</html>