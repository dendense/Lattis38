<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
</head>

<body>
    <?php
//Variable Data Disesuaikan dengan Variabel Kalian Bro
include("config.php");
$username   = $_POST['username'];
$password   = md5($_POST['pass']);

$login  = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND pass='$password'");
$row    = mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['pass'] == $password){
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['role'] = $row['role'];
    $cek = mysqli_num_rows($login);
	
    if($row['role'] == "admin"){
	    $_SESSION['role'] = "admin";
        header("location:/lattis38/admin/index.php");
	}else if($row['role']=="siswa"){
        $_SESSION['role'] = "siswa";
        header("location:/lattis38/siswa/index.php");
	}else{
    	header("location:home.php");
	}
}


?>
</body>

</html>