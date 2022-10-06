<!DOCTYPE html>
<html>

<head>
    <title>hanjar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Tambah Data Hanjar</h2>
        <form action="proses_hanjar.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nokep :</label>
                <input type="text" class="form-control" name="nokep" required="required">
            </div>
            <div class="form-group">
                <label>Nama Sekolah:</label>
                <input type="text" class="form-control" name="namasekolah" required="required">
            </div>
            <div class="form-group">
                <label>Materi :</label>
                <input type="text" class="form-control" name="materi" required="required">
            </div>
            <div class="form-group">
                <label>File :</label>
                <input type="file" name="fi" required="required">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif | .doc | .pdf</p>
            </div>
            <input type="submit" name="" value="Simpan" class="btn btn-primary">
        </form>
    </div>

</body>

</html>