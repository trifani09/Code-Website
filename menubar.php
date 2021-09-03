<!--Menubar-->
	<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed toggle" data-toggle="collapse" data-target="#top-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php
		if(isset($_SESSION['is_logged_in']))
		{

				   $role = $_SESSION['role'];
					 if($role == 1)
					 {
				?>
				<div class="navbar-collapse collapse" id="top-menu">
					<div class="menu">
						<ul class="nav navbar-nav" role="tablist">
							<li><a href="index2.php"><i class="fa fa-home">BERANDA</i></a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-archive">REQUEST</i> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="tambah_request.php">Surat</a></li>
										<li><a href="daftar_request_user.php">Daftar Request</a></li>
										<li><a href="upload.php">Upload</a></li>
									</ul>
								</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-question"> HELP</i> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="daf_lay_user.php">Daftar Saran</a></li>
									<li><a href="help.php">Kritik & Saran</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
		<?php
			}
			else if($role == 2)
			{
		?>

		<div class="navbar-collapse collapse" id="top-menu">
			<div class="menu">
				<ul class="nav navbar-nav" role="tablist">
					<li><a class="menu" href="#"> </a></li>
					<li><a class="menu" href="admin.php"><i class="fa fa-home"> ADMIN</i></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-list"> REQUEST</i> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="daftar_request.php">Daftar Request</a></li>
								<li><a href="daftar_transaksi_selesai.php">Request Selesai</a></li>
								<li><a href="upload.php">Upload</a></li>
							</ul>
					</li>

					<li><a class="menu" href="user.php"><i class="fa fa-user"> USER</i></a></li>
					<li><a class="menu" href="daftar_layanan.php"> <i class="fa fa-bullhorn"> DAFTAR LAYANAN</i></a></li>
				</ul>
			</div>
		</div>

			<?php
			}
		}
		else if(!isset($_SESSION['is_logged_in']))
		{
			?>
			<div class="navbar-collapse collapse" id="top-menu">
				<div class="menu">
					<ul class="nav navbar-nav" role="tablist">
						<li><a href="index.php"><i class="fa fa-home">BERANDA</i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-archive">USER</i> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="penduduk.php">Dinas Pertanian</a></li>
								</ul>
							</li>
					</ul>
				</div>
			</div>
		<?php
			}
		?>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-->
		</nav>
