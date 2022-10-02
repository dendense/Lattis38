<html>

<head>
    <title>Siswa</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 rounded" style="width: 350px">
            <div class="mb-3 h4">DATA SISWA SKADIK 501</div>

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
                    <th>Sekolah</th>
                    <th>Jabatan</th>
                    <th>Korp</th>
                    <th>Action</th>

                </tr>
                <?php
                    include '../../config.php';
                    $no=0;
                    session_start();
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    while($data = mysqli_fetch_array($query)){
                        $roleacc = mysqli_query($koneksi,"SELECT * FROM akun");
                        $access = mysqli_fetch_array($roleacc);
                        $no++;
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['pangkat']; ?></td>
                    <td><?php echo $data['nrp']; ?></td>
                    <td><?php echo $data['sekolah']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><?php echo $data['korp']; ?></td>
                    <td>
                        <?php 
                        if($access['roles'] = "admin"){?>
                        <a href="viewdata_siswa.php?nrp=<?=$data['nrp']?>" class="btn btn-sm btn-primary"
                            style="width: 80px">View</a>

                        <?php
                        }else{
                        ?>

                        <a href="/lattis38/siswa/tampil_siswa.php" class="btn btn-sm btn-primary"
                            style="width: 80px">View</a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            <div>
                <a href="../index.php" class="btn btn-primary mt-2">Beranda</a>
            </div>

</body>

</html>