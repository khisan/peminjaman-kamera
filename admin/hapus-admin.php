<?php 
	include('koneksi.php');
	$koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");
	echo "<script>alert('Data Terhapus!');</script>";
	echo "<script>location='data-peminjaman.php'</script>";
?>