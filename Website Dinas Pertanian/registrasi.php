<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login | Website Dinas Pertanian Humbang Hasundutan</title>

		<link rel="icon" type="image/png" href="img/logo2.jpg">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<style>
		.styled-select {
  		width: 416px;
  		font-size: 18px;
  		height: 50px;
  		padding: 2px 2px 2px 8px;
  		overflow: hidden;
  		border: 1px solid #007cff;
  		transition:ease all 0.3s;
  		-webkit-transition:ease all 0.3s;
	</style>
	<body background="img/background2.jpg" style="background-size:cover;">
		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
			  <div class="form">
				<!-- the input -->
			  <div class="first-row">
					<a href="index.php"><img src="img/logo humbang.jpg" alt="login" class="icon-login"></a>
					<h2 class="first-login">REGISTRASI</h2>
			  </div>
					<form method="post" action="registrasi_process.php">
					  <div class="input-group">
						<input type="text"  name="nama" class="form-control" placeholder="Nama" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-user fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
						<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-calendar fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
					  	<select class="styled-select" name="jenis_kelamin">
					  		<option disabled selected> Jenis Kelamin </option>
							<option  name="Wanita" value="Pria">Pria</option>
							<option  name="Pria" value="Wanita">Wanita</option>
						</select>
						<span class="input-group-addon">
						  <span class="fa fa-user fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
						<input type="text"  name="alamat" class="form-control" placeholder="Alamat" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-map-marker fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
						<input type="text"  name="username" class="form-control" placeholder="Username" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-user fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
						<input type="password"  name="password" class="form-control" placeholder="Password" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-key fa-fw"></span>
						</span>
					  </div>
					  <div class="input-group">
						<input type="text"  name="email" class="form-control" placeholder="Email" required></input>
						<span class="input-group-addon">
						  <span class="fa fa-envelope fa-fw"></span>
						</span>
					  </div>
					<br>
					<input name="tambah" type="submit" value="DAFTAR" class="btn btn-lg login-btn"></input>
					</form>
			  </div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
