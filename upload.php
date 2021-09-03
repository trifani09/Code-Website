<?php
	require_once(dirname(__FILE__).'/func.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kelompok Tani | Dinas Pertanian Humbang Hasundutan</title>

		<link rel="icon" type="image/png" href="img/png">
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

		 <form action="upload_process.php" method="POST" enctype="multipart/form-data">
                <div class="row" style="column-gap: 10px">
                    <div class="col-lg-5">
                        <input type="file" name="upload_file" id="upload-file" onchange="call();" multiple/>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-2">
                        <input type="submit" name="submit" class="btn btn-md" value="Submit" style="background: #ccccff">
                    </div>
            </div>
<div></div>
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

		<script>
    function call() {
        document.getElementById("showImageHere").src = URL.createObjectURL(event.target.files[0]);

    }
</script>

</html>
