<?php
include 'config.php';
?>

<html>
<?php 
	session_start();

	if($_SESSION['roles']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <br><br><br><br>
    <div class="container" align="center">
        <div class="mt-5 rounded" style="width: 300px">
            <div class="mb-3 h4">Selamat Datang</div>
            <form action="proses_login.php" method="post">
                <label>Username</label>
                <input class="mb-2 w-100" type="text" name="username" required />
                <label>Password</label>
                <input class="w-100" type="password" name="pass" required />
                <input class="btn btn-success mt-3 w-100" type="submit" value="LOGIN">
                <a href="register.php" class="btn btn-warning mt-2 w-100">REGISTER</a>
                <a href="index.php" class="btn btn-primary mt-2 w-100">BACK</a>
            </form>
        </div>
    </div>
</body>

</html>