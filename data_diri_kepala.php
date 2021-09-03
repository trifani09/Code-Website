<?php
$host = "localhost";
$password = "";

$koneksi = mysqli_connect("127.0.0.1", "root", "", "data diri");

$getKepala = "select * from data_diri_kepala_keluarga order by nama ASC";
$res = $koneksi->query($getKepala);
?>
<form action="data_diri_kepala.php">
	<input type="text" name="name">
	<button type="submit" name="searchKK">Cari</button>
</form>

<?php 
if (isset($_GET['name']) && $_GET['name'] != null) {
	$getKepalaByName = "select * from data_diri_kepala_keluarga where nama like '%".$_GET['name']."%'";
	$res = $koneksi->query($getKepalaByName);
?>
<table border="1">
	<tr>
		<td>Nomor</td>
		<td>Nama</td>
		<td>Usia</td>
		<td>Jenis Kelamin</td>
		<td>tanggal_lahir</td>
		<td>NIK</td>
	</tr>
<?php
	if ($res->num_rows > 0) {
		$i = 0;
		while($row = $res->fetch_assoc()){
		$i++;
?>	
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['nama'] ?></td>
		<td><?= $row['usia'] ?></td>
		<td><?= $row['jenis_kelamin'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['NIK'] ?></td>
	</tr>
<?php
		}
	}
}else{
?>
<table border="1">
	<tr>
		<td>Nomor</td>
		<td>Nama</td>
		<td>Usia</td>
		<td>Jenis Kelamin</td>
		<td>tanggal_lahir</td>
		<td>NIK</td>
		<td colspan="2">Action</td>
	</tr>
<?php
if ($res->num_rows > 0) {
	$i = 0;
	while($row = $res->fetch_assoc()){
	$i++
?>	
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['nama'] ?></td>
		<td><?= $row['usia'] ?></td>
		<td><?= $row['jenis_kelamin'] ?></td>
		<td><?= $row['tanggal_lahir'] ?></td>
		<td><?= $row['NIK'] ?></td>
		<td><a href="update_data_diri_kepala.php?id=<?= $row['id'] ?>">update</a></td>
		<td><a href="functions.php?del=true&id=<?= $row['id'] ?>">delete</a></td>
	</tr>
<?php
	}
}
?>
<?php
}
?>
</table>