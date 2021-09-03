<?php 	
$host = "localhost";		
$password = "";

$koneksi = mysqli_connect("127.0.0.1", "root", "", "data diri");

$getKepala = "select * from data_diri_kepala_keluarga where id=". $_GET['id'];
$res = $koneksi->query($getKepala);
?>

<!DOCTYPE html>
<html>
<head>
	<title>	Update Data</title>
</head>
<body>
	<h1>Update Data</h1>
	<?php 	
		while($row = $res->fetch_assoc()){
	?>
	<form action="functions.php?update&id=<?= $row['id'] ?>" method="POST">	
		Nama : <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>	
		Usia : <input type="number" name="umur" value="<?= $row['usia'] ?>"><br>	
		Tanggal Lahir : <input type="date"  name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>"><br>	
		Jenis Kelamin : <input type="text" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>"><br>	
		NIK : <input type="text" name="nik" value="<?= $row['NIK'] ?>">	<br>	
		<button type="submit">Submit</button>
	</form>
<?php 	} ?>
</body>
</html>