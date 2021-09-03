<?php
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "dinas_pertanian");

	if(!$conn){
		die("Masalah Pada Database");
	}
	$db_use = mysqli_select_db($conn, "dinas_pertanian") or die("Select Database Problem !!");
?>
