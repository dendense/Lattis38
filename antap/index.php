<DOCTYPE html>

    <?php  session_start(); ?>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="mt-5 rounded" style="width: 300px">
                <div class="mb-3 h4">DATA ANTAP SKADIK 501</div>

                <style>
                table,
                th,
                td {
                    border: 2px solid black;
                }
                </style>
                <table style="width:250%">

                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>NRP</th>
                        <th>Korp</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include '../config.php';
                    $data = mysqli_query($koneksi,"select * from antap");
                    while($d = mysqli_fetch_array($data)){
?>
                    <tr>
                        <td><?php echo $d['id'];?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['pangkat']; ?></td>
                        <td><?php echo $d['nrp']; ?></td>
                        <td><?php echo $d['korp']; ?></td>
                        <td><?php echo $d['jabatan']; ?></td>
                        <td><a href="" class="btn btn-sm btn-primary" style="margin-right: 5px; width: 80px">Edit</a><a
                                href="" class="btn btn-sm btn-primary" style="width: 80px">View</a>
                        </td>
                    </tr>
                    <?php
                    }
?>


                </table>
                <a href=" dataantap.php" class="btn btn-success mt-2 w-100">Tambah Data</a>
    </body>