<!DOCTYPE html>
<html>

<head>
    <title>EDIT DATA</title>
</head>

<body>

    <link rel="stylesheet" href="../css/bootstrap.min.css">


    <?php
	include '../config.php';
	$nrp = $_GET['nrp'];
	$data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nrp='$nrp'");
	while($d = mysqli_fetch_array($data)){
		?>
    <form method="POST" action="update.php">
        <div class="container" align="center">
            <table>
                <h3>EDIT DATA MAHASISWA</h3>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td><input type="text" name="pangkat" value="<?php echo $d['pangkat']; ?>"></td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><input type="text" name="nrp" value="<?php echo $d['nrp']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </div>
    </form>
    <?php 
	}
	?>

</body>

</html>