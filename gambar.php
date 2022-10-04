<html>

<head>
    <title>Data Gambar</title>
</head>

<body>

    <!-- Membuat form upload dengan action upload.php -->
    <center>
        <h1>Form Upload Gambar</h1>
        <form method="post" enctype="multipart/form-data" action="upload.php">
            <input type="file" nama="foto">
            <input type="submit" value="Upload">
        </form>
    </center>
    <!-- Form menampilkan data gambar ke dalam tabel -->
    <h2>Data Gambar</h2>
    <hr>
    <table border="1" cellpadding="8">

        <!-- Membuat proses tampil data -->
        <?php
// Mengambil action dari file koneksi.php
include "config.php";
// Memanggil semua data dalam tabel gambar
$query = "SELECT * FROM foto";
// Eksekusi/Jalankan query dari variabel $query

// Ambil jumlah data dari hasil eksekusi $sql

// Kondisi perulangan Jika jumlah data lebih dari 0 (Berarti jika data ada)
if($row > 0){
    // Mengambil semua data dari hasil eksekusi $sql
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
  }
    // Jika data tidak ada
}else{
  echo "<tr><td colspan='5'>Belum ada data gambar</td></tr>";
}
?>
    </table>
</body>

</html>