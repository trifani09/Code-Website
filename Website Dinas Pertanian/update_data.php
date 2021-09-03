<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kelompok Tani | Dinas Pertanian Humbang Hasundutan</title>

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
			$getKepala = "select * from data_diri where id=". $_GET['id'];
	$res = $conn->query($getKepala);
	while($row = $res->fetch_assoc()){
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product">
					<h3>Edit Data</h3>
					<hr class="pg-tittl-bdr-bte"></hr>
					<form action="functions.php?update&id=<?= $row['id'] ?>" method="POST"enctype="multipart/form-data">
					<div class="form-group">
					<p>Nama</p>	<input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" required/>
				</div>
				<div class="form-group">
					<p>Usia</p><input type="number" name="umur" value="<?= $row['usia'] ?>" class="form-control" required/>
				</div>
				<div class="form-group">
					<p>Tanggal Lahir</p> <input type="date"  name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>" class="form-control" required/>
				</div>
				<div class="form-group">	
				<p>Jenis Kelamin</p>
				<input type="text" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>" class="form-control" required/></div>	<div class="form-group">
					<p>NIK</p><input type="text" name="nik" value="<?= $row['NIK'] ?>" class="form-control" required/>
				</div>
				<div class="text-center">
					<button name="edit" type="submit" class="btn btn-komentar btn-lg">Edit</</button>
				</div>
	</form>
<?php 	} ?>
</div>
</div>
</div>
		
			
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