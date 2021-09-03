<?php
	//mulai proses tambah data
	//cek dahulu, jika tombol tambah di klik
	if(isset($_POST['tambah'])){
    //inlcude atau memasukkan file koneksi ke database
    include('function.php');
    //jika tombol tambah benar di klik maka lanjut prosesnya
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role=$_POST['role'];
    //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
    $input = mysqli_query($conn, "INSERT INTO user  VALUES('','$nama','$tanggal_lahir','$jenis_kelamin','$alamat', '$username','$password', '$email','$role')") or die(mysqli_error($conn));
		//jika query input sukses
		if($input){
			echo"<script>alert('Tambah User Berhasil');</script>";
			header("Refresh:0 url=tambah_user.php");
		}
		else{
			echo 'Gagal menambahkan data '; //Pesan jika proses tambah	gagal
			header("location:tambah_user.php");//membuat Link untuk kembali ke halaman tambah
		}
	}
	else{ //jika tidak terdeteksi tombol tambah di klik
		//redirect atau dikembalikan ke halaman tambah
		echo '<script>window.history.back()</script>';
	}
?>


