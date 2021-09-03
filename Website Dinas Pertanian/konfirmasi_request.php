<?php
	//mulai proses tambah data
	//cek dahulu, jika tombol tambah di klik
  	require_once(dirname(__FILE__).'/function.php');

	if(isset($_GET['id'])){
		//inlcude atau memasukkan file koneksi ke database
		include('function.php');
		//jika tombol tambah benar di klik maka lanjut prosesnya
		$id = $_GET['id'];
		
		$query = 'UPDATE request SET id_status="2" WHERE id='.$_GET['id'];
		$res = $conn->query($query);

		//jika query input sukses
			echo"<script>alert('Request Berhasil Di Konfirmasi');</script>";
			header("Refresh:0 url=daftar_request.php");
	}
	else{ //jika tidak terdeteksi tombol tambah di klik
		//redirect atau dikembalikan ke halaman tambah
		echo '<script>window.history.back()</script>';
	}
?>


