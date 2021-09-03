<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar Request | Dinas Pertanian Humbang Hasundutan</title>

		<link rel="icon" type="image/png" href="img/parna_logo.png">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css">
	</head>
	<body>
		<!-- Heaader-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!--Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Daftar Request</a></li>
					</ul>
				</div>
			</div>
		</div>
		</section>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
		  <div class="panel panel-heading">
            <h3>DAFTAR REQUEST YANG MASUK</h3><hr class="pg-titl-bdr-bta"></hr>
		  </div>
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Kategori</th>
                  <th>Status Request</th>
                </tr>
              </thead>
<?php
if(isset($_SESSION['is_logged_in']))
{
include "function.php";
$query = "SELECT request.*,user.nama,user.alamat,user.email,status_request.keterangan,kategori_surat.nama as kategori FROM request 
JOIN user ON request.id_user=user.id JOIN kategori_surat ON request.id_kategori_surat=kategori_surat.id_kategori JOIN status_request ON request.id_status=status_request.id_status 
WHERE request.id_status = 3";
$gquery = mysqli_query($conn,$query);
while($trans = mysqli_fetch_array($gquery))
{
		
  ?>
            <tbody>
              <tr>
                <td><?=$trans['id']?></td>
                <td><?=$trans['nama']?></td>
                <td><?=$trans['alamat']?></td>
                <td><?=$trans['email']?></td>
				<td><?=$trans['kategori']?></td>
                <td><?=$trans['keterangan']?> <font color="red">*</font> </td>
              </tr>
            </tbody>



<?php
  };
}
?>
</table>
</div>
</div>
</div>
</div>

		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>

		<!-- Scroll Up Button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.singlePageNav.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>
		<script>
			$('.carousel').carousel({			//Waktu Carousel
				interval: 5000
			})
		</script>
	</body>
</html>
