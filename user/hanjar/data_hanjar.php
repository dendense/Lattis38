<html>

<head>
    <title>Hanjar</title>
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
            <td><a href="download.php?file=<?=$data['file']?
                        <td>
                            <?php 
                                    if($access['roles'] = "admin"){?>
                            <a href=" editsiswa.php?nrp=<?=$data['nrp']?>" class="btn btn-sm btn-primary"
                    style="margin-right: 5px; width: 80px">Edit</a>
                <a href="viewdata_siswa.php?nrp=<?=$data['nrp']?>" class="btn btn-sm btn-primary"
                    style="width: 80px">View</a>

                <?php
                                }else{
                                ?>
                <a href="/lattis38/siswa/tampil_hanjar.php" class="btn btn-sm btn-primary" style="width: 80px">View</a>
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