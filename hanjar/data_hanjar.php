<DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
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
                <div class="col-sm-2 sidenav p-3">
                    <h4>DATA HANJAR</h4>
                    <ul class="nav nav-pills nav-stacked d-grid">
                        <li><a href="/lattis38/admin/" class="btn btn-primary mb-1 w-100">Home</a></li>
                        <li><a href="tambah_hanjar.php" class="btn btn-success mb-1 w-100">Tambah Data</a></li>
                    </ul><br>

                </div>

                <div class="col-sm-10 p-3">
                    <h4>DATA HANJAR</h4>
                    <style>
                    table,
                    th
                    </style>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Nomor Kep</th>
                            <th>Nama Sekolah</th>
                            <th>Materi</th>
                            <th>file</th>
                            <th>Download</th>

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
                            <td><a href="download.php?file=<?=$data['file']?>">Download</a></td>
                        </tr>
                        <?php
                    }
?>

                    </table>
    </body>