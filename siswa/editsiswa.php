<!DOCTYPE html>
<html>

<head>
    <title>EDIT DATA</title>
</head>

<body>

    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
	include '../config.php';
	$nrp = $_GET['nrp'];
	$data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nrp='$nrp'");
	while($d = mysqli_fetch_array($data)){
		?>
    <form method="post" action="update.php">
        <table>
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
    </form>
    <?php 
	}
	?>

</body>

</html>