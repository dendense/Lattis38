<DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="mt-5 rounded" style="width: 300px">
                <div class="mb-3 h4">DATA BAHAN AJAR</div>

                <style>
                table,
                th,
                td {
                    border: 2px solid black;
                }
                </style>
                <table style="width:350%; height:50%">
                    <tr>
                        <th>No</th>
                        <th>Nomor Kep</th>
                        <th>Nama Sekolah</th>
                        <th>Materi</th>
                        <th>file</th>
                    </tr>
                    <?php
                    include '../config.php';
                    $no=0;
                    session_start();
                    $query = mysqli_query($koneksi,"SELECT * FROM hanjar");
                    while($data = mysqli_fetch_array($query)){
                        $roleacc = mysqli_query($koneksi,"SELECT * FROM akun");
                        $access = mysqli_fetch_array($roleacc);
                        $no++;
                ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['nokep']; ?></td>
                        <td><?php echo $data['namasekolah']; ?></td>
                        <td><?php echo $data['materi']; ?></td>
                        <td><?php echo $data['file']; ?></td>
                    </tr>
                    <?php
                    }
?>

                </table>

                <div>
                    <a href="tambah_hanjar.php" class="btn btn-success mt-2">Tambah Data</a>
                    <a href="../admin/index.php" class="btn btn-primary mt-2">Beranda</a>
                    <div>
    </body>