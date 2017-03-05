<?php 
	include 'koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM kamera WHERE id_kamera='$_GET[id]'");
	$data = $ambil->fetch_assoc();
	$foto_produk = $data['gambar'];
	if (file_exists("../foto_produk/$foto_produk")) {
		unlink("../foto_produk/$foto_produk");
	}
	$koneksi->query("DELETE FROM kamera WHERE id_kamera='$_GET[id]'");
	echo "<script>alert('Produk Terhapus!');</script>";
	echo "<script>location='data-kamera.php'</script>";
?>