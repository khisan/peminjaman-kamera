<?php include('header.php');
	  include('koneksi.php');
		session_start();
		$koneksi = new mysqli("localhost", "root", "", "ta");
		if (!isset($_SESSION['admin'])) 
		{
			echo "<script>location='index.php';</script>";
		}
		$ambilkamera = $koneksi->query("SELECT * FROM kamera");
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">
<pre><?php print_r($_SESSION); ?></pre>
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
<!-- /.row -->
<div class="col-md-8">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Data Kamera</div>
		<!-- Table -->
		<table class="table table-bordered">
		<?php $datakamera = $ambilkamera->fetch_assoc(); 
		break;
		?>
		<tr class="isi-tabel">
			<td>ID </td>
			<td>Kamera</td>
			<td>Harga</td>
		</tr>
		<tr class="isi-tabel">
			<td><?php echo $datakamera ['id_kamera']; ?></td>
			<td><?php echo $datakamera ['merk_kamera']; ?></td>
			<td><?php echo $datakamera ['harga_kamera']; ?></td>
		</tr>
		</table>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Data Peminjaman</div>
		<!-- Table -->
		<table class="table table-bordered">
		<tr>
			<td>Username <!-- <?php echo $data['username'] ?> --></td>
			<td>Nama <!-- <?php echo $data['password'] ?> --></td>
		</tr>
		</table>
	</div>
</div>
</div>
<!-- /#page-wrapper -->
<?php include('footer.php'); ?>