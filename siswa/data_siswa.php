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
            <div class="col-sm-3 sidenav p-3">
                <h4>John's Blog</h4>
                <ul class="nav nav-pills nav-stacked d-grid">
                    <li><a href="/lattis38/admin/" class="btn btn-primary mb-1 w-100">Home</a></li>
                    <li><a href="#section2" class="btn btn-primary mb-1 w-100">Friends</a></li>
                    <li><a href="#section3" class="btn btn-primary mb-1 w-100">Family</a></li>
                    <li><a href="#section3" class="btn btn-primary w-100">Photos</a></li>
                </ul><br>

            </div>

            <div class="col-sm-9 p-3">
                <h4><small>RECENT POSTS</small></h4>
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
                                <a href="editsiswa.php" class="btn btn-sm btn-primary"
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
                    <div>
                        <a href="tambah_siswa.php" class="btn btn-success mt-2">Tambah Data</a>
                        <a href="../admin/index.php" class="btn btn-primary mt-2">Beranda</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <p>Footer Text</p>
        </div>


</body>

</html>