<?php 
$host = "localhost";
$password = "";

$koneksi = mysqli_connect("127.0.0.1", "root", "", "dinas_pertanian");

if (isset($_GET['del'])) {
	$query = 'DELETE FROM data_diri WHERE id = '. $_GET["id"] . '';
	$res = $koneksi->query($query);
	header("location: admin.php");
}

if (isset($_GET['update'])) {
	$query = 'UPDATE data_diri SET nama="'.$_POST['nama'].'", usia='.$_POST['umur'].', tanggal_lahir="'.$_POST['tanggal_lahir'].'", jenis_kelamin="'.$_POST['jenis_kelamin'].'", NIK='.$_POST['nik'].' WHERE id='.$_GET['id'];
	$res = $koneksi->query($query);
	header("location: admin.php");		
	echo $_POST['tanggal_lahir'];
}
if (isset($_GET['del2'])) {
	$query = 'DELETE FROM user WHERE id = '. $_GET["id"] . '';
	$res = $koneksi->query($query);
	header("location: user.php");
}
if (isset($_GET['up2'])) {
	$query = 'UPDATE user SET nama="'.$_POST['nama'].'", tanggal_lahir='.$_POST['tanggal_lahir'].', alamat="'.$_POST['alamat'].'", username="'.$_POST['username'].'", password='.$_POST['password'].'email='.$_POST['email'].' WHERE id='.$_GET['id'];
	$res = $koneksi->query($query);
	header("location: index2.php");		
	//echo $_POST['tanggal_lahir'];
}


?>