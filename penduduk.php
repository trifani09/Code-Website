<?php
	require_once(dirname(__FILE__).'/function.php');
?>
<?php
  $database =  mysqli_connect('localhost','root','','dinas_pertanian');
  $query = 'SELECT * FROM data_diri';
  $result_set = $database->query($query);
  $result = mysqli_query($database,$query);
  $result2 = mysqli_query($database,$query);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin | Dinas Pertanian</title>

		<link rel="icon" type="image/png" href="img/logo2.jpg">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script type="text/javascript" src="js/Chart.js"></script>
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
		<center>
    <h3>Grafik Jumlah Kelompok Tani </h3><hr class="pg-titl-bdr-btm"></hr>
    <div style="width: 800px;margin: 0px auto;">
  		<canvas id="myChart"></canvas>
  	</div>


  </center>
						
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
					<h3>Daftar Kelompok Tani</h3>
					<hr class="pg-titl-bdr-btad"></hr>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Usia</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>NIK</th>
						</tr>
					</thead>
					<?php
					$getkepala = "select * from data_diri order by nama ASC";
					$res= $conn->query($getkepala);?>
					<form action="admin.php">
					<input type="text" name="name">
					<button type="submit" name="searchKK">Cari</button>
					</form>
					<?php 
				if (isset($_GET['name']) && $_GET['name'] != null) {
				$getKepalaByName = "select * from data_diri where nama like '%".$_GET['name']."%'";
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
		<td><?= $row['usia'] ?></td>
		<td><?= $row['jenis_kelamin'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['NIK'] ?></td>
	</tr>
</tbody>
<?php
		}
	}
}else{
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
		<td><?= $row['usia'] ?></td>
		<td><?= $row['jenis_kelamin'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['NIK'] ?></td>
		
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
		<script>
      		var ctx = document.getElementById("myChart").getContext('2d');
      		var myChart = new Chart(ctx, {
      			type: 'bar',
      			data: {
      				labels:["Wanita","Pria"]
              ,
      				datasets: [{
      					label: '',
      					data: [
                  <?php
                  $Wanita=mysqli_query($database,"select *from data_diri where jenis_kelamin='Wanita'");
                  echo mysqli_num_rows($Wanita);
                ?>,
                <?php
                  $Laki=mysqli_query($database,"select *from data_diri where jenis_kelamin='Pria'");
                  echo mysqli_num_rows($Laki);
                ?>
                		],
      					backgroundColor: [
      					'rgba(255, 99, 132, 0.2)',
      					'rgba(54, 162, 235, 0.2)',
      					'rgba(255, 206, 86, 0.2)',
      					'rgba(75, 192, 192, 0.2)'
      					],
      					borderColor: [
      					'rgba(255,99,132,1)',
      					'rgba(54, 162, 235, 1)',
      					'rgba(255, 206, 86, 1)',
      					'rgba(75, 192, 192, 1)'
      					],
      					borderWidth: 1
      				}]
      			},
      			options: {
      				scales: {
      					yAxes: [{
      						ticks: {
      							beginAtZero:true
      						}
      					}]
      				}
      			}
      		});
      	</script>

</html>
