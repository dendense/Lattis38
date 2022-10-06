<!DOCTYPE html>
<html>

<head>
    <title>www.malasngoding.com - Upload file menggunakan php mysqli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Tambah Data Siswa</h2>
        <form action="proses_siswa.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>Pangkat :</label>
                <input type="text" class="form-control" name="pangkat" required="required">
            </div>
            <div class="form-group">
                <label>NRP :</label>
                <input type="text" class="form-control" name="nrp" required="required">
            </div>
            <div class="form-group">
                <label>Sekolah :</label>
                <input type="text" class="form-control" name="sekolah" required="required">
            </div>
            <div class="form-group">
                <label>Jabatan :</label>
                <input type="text" class="form-control" name="jabatan" required="required">
            </div>
            <div class="form-group">
                <label>Korp :</label>
                <input type="text" class="form-control" name="korp" required="required">
            </div>
            <div>
                Jenis Kelamin
                <select type="text" name="jenis" class="w-100">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama :</label>
                <input type="text" class="form-control" name="agama" required="required">
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" class="form-control" name="alamat" required="required">
            </div>
            <div class="form-group">
                <label>Foto :</label>
                <input type="file" name="foto" required="required">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
            </div>
            <input type="submit" name="" value="Simpan" class="btn btn-primary">
        </form>
    </div>

</body>

</html>