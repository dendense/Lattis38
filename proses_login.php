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

if ($row['username'] == $username AND $row['pass'] == $password)
{
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['passwd'] = $row['passwd'];

<<<<<<< HEAD
$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['role']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";

        header("location:home.php");
 
	}else if($data['role']=="antap"){
		
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "antap";
	
		header("location:antap.php");
 
	
	}else if($data['role']=="siswa"){
	
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "siswa";
		
		header("location:siswa.php");
 
	}else{
 
	
		header("location:index.php?pesan=gagal");
	}	
}
    else{
    echo "<script>alert('Username atau Password Salah !!!');</script>";
=======
    header('location:index.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
}else{
    echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
>>>>>>> d4e6443843908e878034462e60c3d423c42fc46d
    echo "<script>location='login.php';</script>";
  }
?>
</body>

</html>