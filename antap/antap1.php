<DOCTYPE html>

    <head>
        <title>Biodata</title>
        <style type="text/css"></style>
    </head>

    <body>

        <h1 align="center">BIODATA</h1>
        <hr witdh="500" style="2">
        <table>
            <th><img src="img/123.jpg" width="60" height="80" /></th>
        </table>

        <table align="center" cellpadding="15">
            <?php
                    include 'config.php';
                    $data = mysqli_query($koneksi,"select * from antap");
                    while($d = mysqli_fetch_array($data)){
?>
            <tr>
                <td>Nama</td>
                <td>:<?php echo $d['nama']; ?></td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>:<?php echo $d['pangkat']; ?></td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>: 3522104020555060</td>
            </tr>
            <tr>
                <td>Sekolah </td>

                <td>: Sejurba PDE A-38</td>
            </tr>

            <tr>
                <td>Korp</td>

                <td>: PDE</td>

            </tr>
            <tr>
                <td>Jabatan </td>

                <td>: Ba Operator Skadik 501</td>

            </tr>
            <tr>
                <td>Jenis Kelamin </td>

                <td>: Laki Laki</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: Islam</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Komplek </td>
            </tr>
            <?php
                    }
?>

        </table>
    </body>