<?php
  if(isset($_POST['edit']))
  {
    include('func.php');

    $id = $_GET['id'];
    $tanggapan = $_POST['tanggapan'];
    
    $hasil = mysqli_query($conn, "UPDATE layanan SET tanggapan='$tanggapan' WHERE id='$id'");
    
    if($hasil)
    {
      echo"<script>alert('Saran Telah Ditanggapi!');</script>";
      header("Refresh:0 url=upload.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:index.php');
  }
?>
