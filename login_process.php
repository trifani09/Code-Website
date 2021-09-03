<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  require_once(dirname(__FILE__).'/function.php');
  //MD5('".$password."')

  $query = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";
	$exect = mysqli_query($conn,$query);

	$user_konfirmasi = "";
	$pass_konfirmasi = "";

	while($row=mysqli_fetch_array($exect))
	{
		$user_konfirmasi = $row['username'];
		$pass_konfirmasi = $row['password'];
		$name = $row['nama'];
    $id = $row['id'];
    $role = $row['role'];
	}
	if($username == $user_konfirmasi && $password == $pass_konfirmasi)
	{
    $_SESSION['is_logged_in'] = TRUE;
    $_SESSION['nama'] = $name;
    $_SESSION['id'] = $id;
    $_SESSION['role'] = $role;
    if($role == 1)
    {
      header("Refresh:0 url=index2.php");
    }
    else if($role==2){
      header("Location:admin.php");
      //echo "admin";
    }
	else
	{
	  echo"<script>alert('Maaf Anda Tidak Terdaftar!');</script>";
      header("Refresh:0 url=login.php");
	}
}

?>
