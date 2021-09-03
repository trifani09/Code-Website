<?php
	//mulai proses tambah data
	//cek dahulu, jika tombol tambah di klik
	if(isset($_POST['tambah'])){
		//inlcude atau memasukkan file koneksi ke database
		include('function.php');
		//jika tombol tambah benar di klik maka lanjut prosesnya
		$nama = $_POST['nama'];
		$usia = $_POST['umur'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$nik = $_POST['NIK'];
		//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
		$input = mysqli_query($conn, "INSERT INTO data_diri VALUES('','$nama','$usia','$tanggal_lahir', '$jenis_kelamin', '$nik')") or die(mysqli_error($conn));
		//jika query input sukses
		if($input){
			echo"<script>alert('Tambah Penduduk Berhasil');</script>";
			header("Refresh:0 url=admin.php");
		}
		else{
			echo 'Gagal menambahkan data '; //Pesan jika proses tambah	gagal
			header("location:tambah_penduduk.php");//membuat Link untuk kembali ke halaman tambah
		}
	}
	else{ //jika tidak terdeteksi tombol tambah di klik
		//redirect atau dikembalikan ke halaman tambah
		echo '<script>window.history.back()</script>';
	}
?>

