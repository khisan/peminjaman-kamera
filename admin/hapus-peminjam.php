<?php 
	include('koneksi.php');
	$koneksi->query("DELETE FROM data_peminjaman WHERE id_peminjam='$_GET[id]'");
	echo "<script>alert('Data Terhapus!');</script>";
	echo "<script>location='data-peminjaman.php'</script>";
?>