<?php
  if(isset($_POST['edit']))
  {
    include('function.php');

    $id = $_GET['id'];
	$tanggapan = $_POST['tanggapan'];
    
	$hasil = mysqli_query($conn, "UPDATE layanan SET tanggapan='$tanggapan' WHERE id='$id'");
	
    if($hasil)
    {
	  echo"<script>alert('Saran Telah Ditanggapi!');</script>";
      header("Refresh:0 url=daftar_layanan.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
