<?php
    if(isset($_GET['materi'])){
        $nama    =$_GET['materi'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../config.php";
    $query     =mysqli_query($koneksi, "SELECT * FROM hanjar WHERE materi='$materi'");
    $result    =mysqli_fetch_array($query);
?>
<html>

<head>
    <title>View Hanjar <?php echo $nrp?></title>
</head>

<body>
    <h1 align="center">Detail Data Bahan Ajar</h1>
    <hr witdh="500" style="2">


    </p>
    <table align="center" border="0" cellpadding="10">
        <tr>
            <td size="90">Nokep</td>
            <td>: <?php echo $result['nokep']?></td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td>: <?php echo $result['namasekolah']?></td>
        </tr>
        <tr>
            <td>Materi</td>
            <td>: <?php echo $result['materi']?></td>
        </tr>
        <tr>
            <td> <img src="<?php echo $result['file']?>" /></td>
            <td>: <?php echo $result['file']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td> <a href="data_hanjar.php">Kembali</a></td>
        </tr>
    </table>
</body>

</html>