<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed; width: 630px; padding: 25px 0px 25px 0px; }
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>
<?php 

include "function.php";
$id_request = $_GET['id'];
$query = "SELECT request.*,user.jenis_kelamin,user.username,user.nama,user.alamat,user.email,user.tanggal_lahir,status_request.keterangan,kategori_surat.nama as kategori FROM request 
JOIN user ON request.id_user=user.id JOIN kategori_surat ON request.id_kategori_surat=kategori_surat.id_kategori JOIN status_request ON request.id_status=status_request.id_status 
WHERE request.id = '$id_request'";

$gquery = mysqli_query($conn,$query);
?>
<h1 style="text-align: center;">Surat Keterangan Pengambilan Surat</h1>
<hr/>
<table border="0" width="100%" >
<?php 

while($row=mysqli_fetch_array($gquery))
  {
?>
<tr>
  <td>Nama</td><td>:</td><td><?=$row['nama']?></td>
</tr>
<tr>
  <td>Tanggal Lahir</td><td>:</td><td><?=$row['tanggal_lahir']?></td>
</tr>
<tr>
  <td>Jenis Kelamin</td><td>:</td><td><?=$row['jenis_kelamin']?></td>
</tr>
<tr>
  <td>Alamat</td><td>:</td><td><?=$row['alamat']?></td>
</tr>
<tr>
  <td>Username</td><td>:</td><td><?=$row['username']?></td>
</tr>
<tr>
  <td>Email</td><td>:</td><td><?=$row['email']?></td>
</tr>
<tr>
  <td>Jenis Surat</td><td>:</td><td><?=$row['jenis_surat']?></td>
</tr>
<tr>
<td>Alat yang dipinjam</td><td>:</td><td><?=$row['kategori']?></td>
</tr>
<tr>
<td>Luas Tanah</td><td>:</td><td><?=$row['kategori']?></td>
</tr>
<tr>
<td>Jumlah yang dipinjam</td><td>:</td><td><?=$row['kategori']?></td>
</tr>
<tr>
<td>Date</td><td>:</td><td><?=$row['kategori']?></td>
</tr>
<tr>
<td>Tanda tangan</td><td>:</td><td><?=$row['kategori']?></td>
</tr>

<?php
  }
?>
</table>

<p>*Silahkan membawa surat ini, ketika pengambilan surat</p>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('SuratRequest.pdf', 'D');
?>