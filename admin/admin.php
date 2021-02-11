<?php 
session_start();
include('header.php'); 
include('koneksi.php');
$ambil = $koneksi->query("SELECT * FROM admin");
if (!isset($_SESSION['level'])) 
{
echo "<script>location='index.php';</script>"; 
}
?>
<?php
if ($_SESSION['level']=="admin") {
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Admin <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-user"></i> Data Admin
			</li>
		</ol>
	</div>
</div>

<div class="col-lg-12" style="margin-top: 10px;">
	<div class="panel panel-success">
		<!-- Default panel contents -->
		<div class="panel-heading">Data Admin</div>
		<div class="panel-body" style="padding: 15px;">
			<!-- Table -->
			<table class="table table-bordered table-center">
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Tools</th>
			</tr>
			<tr class="isi-tabel">
			<?php while ($data = $ambil->fetch_assoc()) { ?>
				<td><?php echo $data ['id_admin']; ?></td>
				<td><?php echo $data ['username']; ?></td>
				<td><?php echo $data ['password']; ?></td>
				<td><?php echo $data ['nama']; ?></td>
				<td>
					<center><a href="edit-admin.php" class="btn btn-primary fa fa-edit"><!-- </a><a href="hapus-admin.php" class="btn btn-danger fa fa-trash-o"></a> -->
				</td>
			</tr>
			<?php } ?>
			<tr class="isi-tabel2">
				<?php while ($data = $ambil->fetch_assoc()) { ?>
				<td><?php echo $data ['id_admin']; ?></td>
				<td><?php echo $data ['username']; ?></td>
				<td><?php echo $data ['password']; ?></td>
				<td><?php echo $data ['nama']; ?></td>
				<td>
					<center><a href="edit-admin.php" class="btn btn-primary fa fa-edit"><!-- </a><a href="hapus-admin.php" class="btn btn-danger fa fa-trash-o"></a> -->
				</td>
			</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</div>
</div>
<?php } ?>
<?php include('footer.php'); ?>