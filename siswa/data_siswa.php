<html>

<head>
    <title>Siswa</title>
    <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">SKADIK 501</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
            </div>
        </div>
        <!-- Page Wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <?php
                    include '../config.php';
                    session_start();
                    $data_siswa= mysqli_query($koneksi,"SELECT * FROM siswa");
                    $jumlah_siswa = mysqli_num_rows($data_siswa);
                ?>
                <div class="col-sm-10 p-3">
                    <h4>DATA SISWA SEJURBA PDE A-38 | <?php echo $jumlah_siswa . " Siswa" ?></h4>
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
                            $no=0;
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