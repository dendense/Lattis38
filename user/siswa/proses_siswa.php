<?php
include '../../config.php';
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$nrp = $_POST['nrp'];
$sekolah = $_POST['sekolah'];
$jabatan = $_POST['jabatan'];
$korp = $_POST['korp'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:data_siswa.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO siswa (nama, pangkat, nrp, sekolah, jabatan, korp, jenis, agama, alamat, foto) VALUES ('$nama','$pangkat','$nrp','$sekolah','$jabatan','$korp','$jenis','$agama','$alamat', '$xx')");
		header("location:data_siswa.php?alert=berhasil");
	}else{
		header("location:data_siswa.php?alert=gagak_ukuran");
	}
}