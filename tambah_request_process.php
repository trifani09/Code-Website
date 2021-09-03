<?php
  session_start();
  
  //mulai proses tambah data
  //cek dahulu, jika tombol tambah di klik
  if(isset($_POST['tambah'])){
    //inlcude atau memasukkan file koneksi ke database
    include('function.php');
    //jika tombol tambah benar di klik maka lanjut prosesnya
    $id_user = $_SESSION['id'];
    $id_status = '1';
    $id_kategori_surat = $_POST['id_kategori_surat'];
    $tanggal_request = date();
    //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
    $input = mysqli_query($conn, "INSERT INTO request  VALUES('','$id_user','$id_status','$id_kategori_surat','$tanggal_request')") or die(mysqli_error($conn));
    //jika query input sukses
    if($input){
      echo"<script>alert('Request Berhasil Dikirimkan');</script>";
      header("Refresh:0 url=index.php");
    }
    else{
      echo 'Gagal Mengirimkan Request  '; //Pesan jika proses tambah  gagal
      header("location:form_process.php");//membuat Link untuk kembali ke halaman tambah
    }
  }
  else{ //jika tidak terdeteksi tombol tambah di klik
    //redirect atau dikembalikan ke halaman tambah
    echo '<script>window.history.back()</script>';
  }
?>


