<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda | Website Dinas Pertanian Humbang Hasundutan </title>

		<link rel="icon" type="image/png" href="logo humbang.jpg">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css">
	</head>
	<body>
		<!-- Header-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>
		<div class="main-slider">
			<div id="myCarousel" class="carousel slide" dataride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- deklarasi carousel -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/img/img1.png" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Rap Marsidapari</h3>
							<p>Sisolisoli do uhum, siadapari do gogo</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/img/img7.jpeg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Rap Marsidapari</h3>
							<p>Tampakna do tajomna, rim ni tahi do gogona”</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/img/img5.jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>HUTANTA</h3>
							<p>Marsipature Huta Na Be</p>
						</div>
					</div>
					</div>
				</div>

			</div>
		</div>
					

		<section class="box">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.4s">
							<div class="services">
								<h4><b>Humbang Hasundutan</b></h4>
								<p>
									Desa yang asri memiliki penduduk yang mayoritas penduduknya bertani.
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
							<div class="services">
								<h4><b>Letak</b></h4>
								<p>
									Dinas Pertanian berlokasi Jl. Sidikalang Km. 3.5 Simpang Sitapongan Desa Simangaronsang Doloksanggul, Sumatera Utara, Indonesia
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
								<h4><b>Humbang Hasundutan</b></h4>
								<p>
								Penduduk Humbang Hasundutan mayoritsa bergerak dalam bidang tanaman pangan dan perkebunan.
								</p>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 f-about">
							<h1>Disperhum</h1>
							<p>Sebuah Website Pertanian Humbang Hasundutan yang bertujuan untuk membantu masyarakat dalam melakukan peminjaman alat traktor untuk lahan pertanian Humbang Hasundutan <br>
							Pendiri : Trifani Hasibuan, Talenta Manurung, Yolanda Magdalena, Ayu Naiborhu, Eva Panjaitan, Siska Sihite </p>

						</div>
						<div class="col-md-4 l-posts">
							<h3 class="widgetheading">Visit</h3>
								<ul>
									<li><a href="https://distan.humbanghasundutankab.go.id/">Dinas Pertanian Humbang Hasundutan</a></li>
									<li><a href="index.php">Website Pertanian Humbang Hasundutan</a></li>
								</ul>
						</div>
						<div class="col-md-4 f-contact">
							<h3 class="widgetheading">Contact Us</h3>
							<a href="#"><p><i class="fa fa-envelope"></i>distan@humbanghasundutankab.go.id/</p></a>
							<p><i class="fa fa-phone"></i>  +6282163637652</p>
							<p><i class="fa fa-home"></i> Website Pertanian Humbang Hasundutan|  Kode POS 22457
								Jl. Sidikalang Km. 3.5 Simpang Sitapongan Desa Simangaronsang Doloksanggul, Sumatera Utara<br>
								INDONESIA</p>
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
				interval: 3000
			})
		</script>
	</body>
</html>
