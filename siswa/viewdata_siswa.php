<?php
    if(isset($_GET['nama'])){
        $nama    =$_GET['nama'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../config.php";
    $query     =mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama='$nama'");
    $result    =mysqli_fetch_array($query);
?>
<html>

<head>
    <title>View Siswa <?php echo $nrp?></title>
</head>

<body>
    <h1 align="center">Detail Data Siswa</h1>
    <hr witdh="500" style="2">


    </p>
    <table align="center" border="0" cellpadding="10">
        <tr>
            <td size="90">Nama</td>
            <td>: <?php echo $result['nama']?></td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td>: <?php echo $result['pangkat']?></td>
        </tr>
        <tr>
            <td>NRP</td>
            <td>: <?php echo $result['nrp']?></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>: <?php echo $result['sekolah']?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $result['jabatan']?></td>
        </tr>
        <tr>
            <td>Korp</td>
            <td>: <?php echo $result['korp']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $result['jenis']?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: <?php echo $result['agama']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $result['alamat']?></td>
        </tr>
        <tr>
            <td> <img src="<?php echo $result['foto']?>" /></td>
            <td>: <?php echo $result['foto']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td> <a href="data_siswa.php">Kembali</a></td>
        </tr>
    </table>
</body>

</html>