<?php
include '../../config.php';
$nokep            = $_POST["nokep"];
$namasekolah      = $_POST["namasekolah"];
$materi           = $_POST["materi"];
$file             = $_POST["file"];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','doc','pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:data_hanjar.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['nss']['tmp_name'], 'nss/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO siswa (nokep, namasekolah, materi, file, jabatan, korp, jenis, agama, alamat, foto) VALUES ('$nama','$pangkat','$nrp','$sekolah','$jabatan','$korp','$jenis','$agama','$alamat', '$xx')");
		header("location:data_siswa.php?alert=berhasil");
	}else{
		header("location:data_siswa.php?alert=gagak_ukuran");
	}
}