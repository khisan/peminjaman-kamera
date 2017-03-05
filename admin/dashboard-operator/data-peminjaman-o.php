<?php
include('header.php');
include ('koneksi.php');
session_start();
$ambil = $koneksi->query("SELECT * FROM data_peminjaman");
if (!isset($_SESSION['level'])) 
{
	echo "<script>location='index.php';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Peminjaman <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-database fa-md"></i> Data Peminjaman
			</li>
		</ol>
	</div>
</div>
<div class="col-md-4">
	<form action="data-peminjaman.php" method="post">
		<input type="text" name="cari" class="form-control" style="margin-bottom: 4px;" placeholder="Cari nama User" required/>
		<input type="submit" value="Cari Data" class="btn btn-primary"/>
		<a href="data-peminjaman.php" class="btn btn-success">Refresh</a>
	</form>
</div>
<div class="col-lg-12" style="margin-top: 10px;">
	<div class="panel panel-success">
		<!-- Default panel contents -->
		<div class="panel-heading">Data Peminjaman</div>
		<div class="panel-body" style="padding: 15px;">
		<?php 
			$ambil = "SELECT * FROM data_peminjaman";

			if (isset($_POST['cari'])) {
				$cari=$_POST['cari'];
				$ambil = "SELECT * FROM  data_peminjaman 
	               where nama like '%$cari%'
	               or no_identitas like '%$cari%'  ";
			}
			$tampil=$koneksi->query($ambil);
		?>
			<!-- Table -->
			<table class="table table-bordered table-center">
			<tr>
				<th>ID Peminjam</th>
				<th>Nama Peminjam</th>
				<th>No.Identitas</th>
				<th>Kontak</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Total Biaya</th>
				<th>Tool</th>
			</tr>
			<?php while ( $data = $tampil->fetch_assoc()) { ?>
			<tr class="isi-tabel">
				<td><?php echo $data['id_peminjam'] ?></td>
				<td><?php echo $data['nama']?></td>
				<td><?php echo $data['no_identitas']?></td>
				<td><?php echo $data['kontak']?></td>
				<td><?php echo $data['tgl_peminjaman']?></td>
				<td><?php echo $data['tgl_selesai']?></td>
				<td><?php echo $data['total_biaya']?></td>
				<td>
					<center><a href="edit-peminjaman.php?id=<?php echo $data['id_peminjam'] ?>" class="btn btn-primary fa fa-edit"></a><a href="hapus-peminjam.php?id=<?php echo $data['id_peminjam'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger fa fa-trash-o"></a>
				</td>
			</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</div>
</div>
<?php include('footer.php'); ?>