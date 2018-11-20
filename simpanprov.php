<?php 
include 'koneksi.php';

$kode_prov = $_POST['kode_prov'];
$nama_prov = $_POST['nama_prov'];

$query = "INSERT INTO provinsi values ('$kode_prov','$nama_prov')";
$sql = mysqli_query($conn,$query);

if(!sql)
{
	die('Data Gagal Disimpan').mysqli_error();
}
else
{
	header('location:provinsi.php');
}


 ?>
