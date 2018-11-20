<?php 
include 'koneksi.php';

$nama_prov = $_POST['nama_prov']; 
$kode_kota = $_POST['kode_kota'];
$nama_kota = $_POST['nama_kota'];

$query = "INSERT INTO kota values ('$nama_prov','$kode_kota','$nama_kota')";
$sql = mysqli_query($conn,$query);

if(!sql)
{
	die('Data Gagal Disimpan').mysqli_error();
}
else
{
	header('location:kota.php');
}


 ?>
