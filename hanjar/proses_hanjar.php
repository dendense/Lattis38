<?php
include '../config.php';
$nokep            = $_POST["nokep"];
$namasekolah      = $_POST["namasekolah"];
$materi           = $_POST["materi"];
$file             = $_POST["folder"];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','doc','pdf');
$filename = $_FILES['folder']['name'];
$ukuran = $_FILES['folder']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:data_hanjar.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['nss']['tmp_name'], 'nss/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO siswa (nokep, namasekolah, materi, folder) VALUES ('$nokep','$namasekolah','$materi','$folder', '$xx')");
		header("location:data_siswa.php?alert=berhasil");
	}else{
		header("location:data_siswa.php?alert=gagak_ukuran");
	}
}