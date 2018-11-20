<?php
 include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kota</title>
</head>
<body>
<center>
	<form action="simpankota.php" method="POST">
		<table border="1">
			<tr>
				<td>Nama Provinsi</td> 
				<td>
					<select name="nama_prov">
						<?php 
							$sql = "SELECT * FROM provinsi";
							$query = mysqli_query($conn,$sql);

							while($datakota = mysqli_fetch_array($query)){ ?>

							<option value="<?php echo $datakota['nama_prov']?>"><?php echo $datakota['nama_prov'];?></option>

							<?php } ?>
					</select>
				<td>
			</tr>
			<tr>
				<td>Kode Kota</td>
				<td><input type="text" name="kode_kota"></td>
			</tr>
			<tr>
				<td>Nama Kota</td>
				<td><input type="text" name="nama_kota"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="simpan" value="SIMPAN"></td>
			</tr>	
		</table>
	</form>
	<br><br>
	<h1>DATA KOTA</h1>
	<table border="1">
		<tr>
			<td>Nama Provinsi</td>
			<td>Kode Kota</td>
			<td>Nama Kota</td>
		</tr>

	<?php
	include "koneksi.php";
	$sql = 'select * from kota';
	$query = mysqli_query($conn,$sql);
	while($datakota = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $datakota['nama_prov'];?></td>
			<td><?php echo $datakota['kode_kota'];?></td>
			<td><?php echo $datakota['nama_kota'];?></td>
		</tr>
	<?php }?>
</center>
</body>
</html>