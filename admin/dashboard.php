<?php 
session_start();
include('header.php');
include('koneksi.php');
if (!isset($_SESSION['level']))
{
	// echo "<script>location='index.php';</script>";
}
$ambilpeminjaman = $koneksi->query("SELECT * FROM data_peminjaman ORDER BY id_peminjam DESC LIMIT 3");
$ambiladmin = $koneksi->query("SELECT * FROM admin");

?>
<?php
if ($_SESSION['level']=="admin") {
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Admin <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Admin
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-camera fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"></div>
						<div>Data Kamera</div>
					</div>
				</div>
			</div>
			<a href="data-kamera.php">
			<div class="panel-footer">
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-cart-plus fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"></div>
						<div>Tambah Data Kamera</div>
					</div>
				</div>
			</div>
			<a href="tambah-kamera.php">
			<div class="panel-footer">
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-database fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"></div>
						<div>Data Peminjaman</div>
					</div>
				</div>
			</div>
			<a href="data-peminjaman.php">
			<div class="panel-footer">
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-user-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"></div>
						<div>Data Admin</div>
					</div>
				</div>
			</div>
			<a href="admin.php">
			<div class="panel-footer">
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
			</a>
		</div>
	</div>
</div>
<div class="col-lg-4" style="margin-top: 10px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Admin</div>
		<table class="table table-bordered table-justified">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Nama Admin</th>
			<th>Password</th>
		</tr>
		<?php while( $data=$ambiladmin->fetch_assoc()) { ?>
		<tr class="isi-tabel">
			<td><?php echo $data ['id_admin'] ?></td>
			<td><?php echo $data ['username'] ?></td>
			<td><?php echo $data ['nama'] ?></td>
			<td><?php echo $data ['password'] ?></td>
		</tr>
		<?php } ?>
		</table>
	</div>
</div>
<div class="col-lg-8" style="margin-top: 10px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Peminjaman</div>
		<table class="table table-bordered table-justified">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Kontak</th>
			<th>No Identitas</th>
			<th>Tgl.Pinjam</th>
			<th>Tgl.Selesai</th>
			<th>Total Biaya</th>
		</tr>
		<?php while( $data=$ambilpeminjaman->fetch_assoc()) { ?>
		<tr class="isi-tabel">
			<td><?php echo $data ['id_peminjam'] ?></td>
			<td><?php echo $data ['nama'] ?></td>
			<td><?php echo $data ['kontak'] ?></td>
			<td><?php echo $data ['no_identitas'] ?></td>
			<td><?php echo $data ['tgl_peminjaman'] ?></td>
			<td><?php echo $data ['tgl_selesai'] ?></td>
			<td><?php echo $data ['total_biaya'] ?></td>
		</tr>
		<?php } ?>
		</table>
	</div>
<!-- /#page-wrapper -->
<?php } ?>
<?php include('footer.php'); ?>