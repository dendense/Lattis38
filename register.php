<!DOCTYPE HTML>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container" align="center">
        <div class="mt-5 rounded" style="width: 300px">
            <h1>Tambah Data</h1>
            <form method="post" action="proses_register.php">
                <label>Nama</label>
                <input class="mb-2 w-100" type="text" name="nama" />
                <label>Username</label>
                <input class="mb-2 w-100" type="text" name="username" />
                <label>Password</label>
                <input class="mb-2 w-100" type="password" name="pass" />
                <label>Email</label>
                <input class="mb-2 w-100" type="text" name="email" />
                <label>Role</label>
                <select type="text" name="roles" class="mb-2 w-100">
                    <option value="Admin">Admin</option>
                    <option value="Siswa">Siswa</option>
                </select>





                <input class="btn btn-primary mt-2 w-100" type="submit" value="Tambah">

            </form>
        </div>
    </div>
</body>

</html>