<?php 
session_start();
error_reporting(0);
$koneksi = new mysqli("localhost","root","","ta");
if (isset($_SESSION['level'])) 
{
	if ($_SESSION['level'] == "admin") 
	{
			include ('dashboard.php');
			break;

			include 'data-kamera.php';
			break;

			include 'tambah-kamera.php';
			break;

			include 'edit-kamera.php';
			break;

			include 'data-aksesoris.php';
			break;

			include 'tambah-aksesoris.php';
			break;

			include 'data-peminjaman.php';
			break;

			include 'data-admin.php';
			break;
	}
	else if ($_SESSION['level'] == "operator") 
	{
		// echo "Anda Tidak Mempunyai Hak Akses Ke Halaman Ini";
		include 'tambah-kamera.php';
		
		include 'data-aksesoris.php';
		
		include 'tambah-aksesoris.php';
		
		include 'data-peminjaman.php';
		
	}
}
?>