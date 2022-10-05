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
	$data = mysqli_query($koneksi,"SELECT * FROM antap WHERE nrp='$nrp'");
	while($d = mysqli_fetch_array($data)){
		?>
    <form method="POST" action="update.php">
        <div class="container" align="center">
            <table>
                <h3>EDIT DATA ANTAP</h3>
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
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
                </tr>
                <tr>
                    <td>Korp</td>
                    <td><input type="text" name="korp" value="<?php echo $d['korp']; ?>"></td>
                </tr>
                <tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><select type="text" name="jenis" class="w-100">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
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