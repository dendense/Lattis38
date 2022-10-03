<html>

<head>
    <title>Redirecting</title>
</head>

<body>
    <?php
        session_start();
        include("config.php");
        $username   = $_POST['username'];
        $password   = md5($_POST['pass']);

        $login  = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND pass='$password'");
        $row    = mysqli_num_rows($login);

        if ($row > 0){
            $data = mysqli_fetch_assoc($login);
            if($data['roles']=="admin"){
                $_SESSION['username'] = $username;
		        $_SESSION['roles'] = "admin";
                header("location:/lattis38/admin/index.php");
            }else if($data['roles']=="siswa"){
                $_SESSION['username'] = $username;
		        $_SESSION['roles'] = "siswa";
                header("location:/lattis38/user/index.php");
            }else{
                header("location:index.php?pesan=gagal");
            }
        }else{
            header("location:login.php?pesan=gagal");
        }
    ?>
</body>

</html>