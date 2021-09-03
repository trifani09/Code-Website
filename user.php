<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin | Dinas Pertanian Humbang Hasundutan </title>

		<link rel="icon" type="image/png" href="img/logo2.jpg">
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
		
						
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="admin.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
								<li><a href="#">Daftar Kelompok Tani</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="about">
				<div class="panel panel-heading">
					<h3>DAFTAR KELOMPOK TANI</h3>
					<hr class="pg-titl-bdr-btad"></hr>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>Role</th>
						</tr>
					</thead>
					<?php
					$getkepala = "select * from user order by nama ASC";
					$res= $conn->query($getkepala);?>
					<form action="user.php">
					<input type="text" name="name">
					<button type="submit" name="searchKK">Cari</button>
					</form>
					<?php 
				if (isset($_GET['name']) && $_GET['name'] != null) {
				$getKepalaByName = "select * from user where nama like '%".$_GET['name']."%'";
				$res = $conn->query($getKepalaByName);
					?>

<?php
	if ($res->num_rows > 0) {
		$i = 0;
		while($row = $res->fetch_assoc()){
		$i++;
?>	
<tbody>
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['nama'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['alamat'] ?></td>
		<td><?= $row['username'] ?></td>
		<td><?= $row['password'] ?></td>
		<td><?= $row['email'] ?></td>
		<td><?= $row['role'] ?></td>
	</tr>
</tbody>
<?php
		}
	}
}
else{
?>
<?php
if ($res->num_rows > 0) {
	$i = 0;
	while($row = $res->fetch_assoc()){
	$i++
?>	
<tbody>
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['nama'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['alamat'] ?></td>
		<td><?= $row['username'] ?></td>
		<td><?= $row['password'] ?></td>
		<td><?= $row['email'] ?></td>
		<td><?= $row['role'] ?></td>
		<td><a href="functions.php?del2=true&id=<?= $row['id'] ?>" class="btn btn-komentar btn-lg">Hapus</a></td>
	</tr>
</tbody>
<?php
	}
}
?>
<?php
}
?>

</table>
</table>
</table>
<section class="product">
					<a href="tambah_user.php">
						<button class="btn btn-tambah"><i class="fa fa-plus-circle"> Tambah Kelompok Tani</i></button>
					</a>
		</section>


					
			
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
