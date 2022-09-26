<!DOCTYPE html>
<html lang="en">

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
            <div class="mb-3 h3">Selamat Datang di SKADIK 501</div>
            <?php session_start(); ?>
            <a href="/lattis38/siswa" class="btn md btn-primary">Edit Siswa</a>
            <a href="/lattis38/antap" class="btn md btn-primary">Edit Antap</a>
            <a href="/lattis38/hanjar" class="btn md btn-primary">Edit Hanjar</a>
            <a href="/lattis38/login.php" class="btn md btn-danger">Log Out</a>
</body>

</html>