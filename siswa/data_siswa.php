<html>

<head>
    <title>Siswa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
        height: 1500px
    }

    /* Set gray background color and 100% height */
    .sidenav {
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }

        .row.content {
            height: auto;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-10 p-3">
                <div style="margin-bottom: 1rem">
                    DATA SISWA<a href="tambah_siswa.php" class="btn btn-success btn-sm" style="margin-left: 10px">Tambah
                        Data</a>
                </div>
                <table class="table table-striped">
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
                    include '../config.php';
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
                            <a href="editsiswa.php?nrp=<?=$data['nrp']?>" class="btn btn-sm btn-primary"
                                style="margin-right: 5px; width: 80px">Edit</a>
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
            </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/sidebar.js"></script>
</body>

</html>