<?php
	require_once(dirname(__FILE__).'/function.php');
?>
<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Password| Dinas Pertanian Humbang Hasundutan</title>
		<link rel="icon" type="image/png" href="img/parna_logo.png">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<body>
		<!-- Heaader-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>
		<?php
		
		$user=$_SESSION['username'];
		if($user){
		if($_POST['submit']){
			$old_pass=$_POST['old_pass'];
			$new_pass=$_POST['new_pass'];
			$re_pass=$_POST['re_pass'];
			$queryget=mysql_query("SELECT password FROM user where username='$user'")or die("Query didn't Work");
			$row=mysql_fetch_assoc($queryget);
			$old_passddb=$row['password'];
			if($old_pass==$old_passddb){
				if($new_pass==$re_pass){
					if(strlen($new_pass)>25||strlen($new_pass)<6){
						echo "Password harus antara 6 dan 25";
					}else{
						$querychange=mysql_query("UPDATE user SET password='$new_pass' WHERE username='$user'");
						session_destroy();
						die("Password telah diganti.<a href='index2.php'>Kembali</a> Ke SIDESHUT");
					}
				}
				else
					die("Tidak dapat memperbaharui Password");
			}
			else
				die("Password lama tidak sama");
			
		}
		else{

			echo "
		
		<form action='edit_akun_user.php' method='POST'>
			Old password:    <input type='text' name='oldpassword'><p>
			New password:	<input type='password' name='newpassword'><p><br>
			Repeat new password:	<input type='password' name='repeatnewpassword'><p>
			<input type='submit' name='submit' value='Change Password'>
		
		</form>

";

		}

	}

		?>

	
			
			<!-- Footer-->
		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>

		<!-- Scroll Up Button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>