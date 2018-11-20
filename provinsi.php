<!DOCTYPE html>
<html>
<head>
	<title>Provinsi</title>
</head>
<body><center>
	<form action="simpanprov.php" method="POST">
		<table border="1">
			<tr>
				<td>Kode provinsi</td> 
				<td><input type="text" name="kode_prov"></td>
			</tr>
			<tr>
				<td>Nama provinsi</td>
				<td><input type="text" name="nama_prov"></td>
			</tr>		
			<tr>
				<td colspan="2" align="center"><input type="submit" name="simpan" value="SIMPAN"></td>
			</tr>	
		</table>
	</form>
	<br><br>
	<h1>DATA PROVINSI</h1>
	<table border="1">
		<tr>
			<td>Kode Provinsi</td>
			<td>Nama Provinsi</td>
		</tr>

	<?php
	include "koneksi.php";
	$sql = 'select * from provinsi';
	$query = mysqli_query($conn,$sql);
	while($dataprov = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $dataprov['kode_prov'];?></td>
			<td><?php echo $dataprov['nama_prov'];?></td>
		</tr>
	<?php }?>
	</table>
	</center>
</body>
</html>