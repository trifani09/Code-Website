<?php
  session_start();
  if(isset($_SESSION['is_logged_in']))
  {
    require_once(dirname(__FILE__).'/function.php');

    $id = NULL;
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
	  $kategori = $_POST['kategori'];
    $quer = "INSERT INTO layanan VALUES('$id','$nama','$no_telepon','$alamat', '$kategori')";
    $hasil = mysqli_query($conn,$quer);

    if($hasil)
    {
	  echo"<script>alert('Terimakasih Atas Sarannya!');</script>";
      header("Refresh:0 url=index2.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
