<?php 
session_start();
include('header.php');
include ('koneksi.php');
if (!isset($_SESSION['level'])) 
{
	echo "<script>location='index.php';</script>";
}
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Kamera <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-camera fa-md"></i> Data Kamera
			</li>
		</ol>
	</div>
</div>
<div class="col-md-4">
	<form method="post" action="data-kamera.php">
	</form>
	<form action="data-kamera.php" method="post">
		<input type="text" name="cari" class="form-control" style="margin-bottom: 4px;" placeholder='Cari Merk & Tipe Kamera' required />
		<input type="submit" value="Cari Data" class="btn btn-primary"/>
		<a href="data-kamera.php" class="btn btn-success">Refresh</a>
	</form>
	<?php
				 
           $ambil="SELECT * FROM  kamera";
            if(isset($_POST['cari']))
            {
	         $cari=$_POST['cari'];
	         $ambil="SELECT * FROM  kamera 
	         where merk_kamera like '%$cari%'
	         or tipe_kamera like '%$cari%'  ";
            }
           $tampil=$koneksi->query($ambil);
    ?>
</div>
<div class="col-lg-12" style="margin-top: 10px;">
	<div class="panel panel-success">
		<div class="panel-heading">Data Kamera</div>
		<table class="table table-bordered table-justified">
		<tr>
			<th>ID Kamera</th>
			<th>Merk</th>
			<th>Tipe</th>
			<th>Harga</th>
			<th>Stock</th>
			<th>Spesifikasi</th>
			<th>Gambar</center></th>
			<th>
				<center>Tool</th>
		</tr>
		<?php while( $data=$tampil->fetch_assoc()) { ?>
		<tr class="isi-tabel">
			<td><?php echo $data ['id_kamera'] ?></td>
			<td><?php echo $data ['merk_kamera'] ?></td>
			<td><?php echo $data ['tipe_kamera'] ?></td>
			<td>Rp.<?php echo number_format($data['harga_kamera'],0, ",", ".") ?> /1 hari</td>
			<td><?php echo $data ['stock_kamera'] ?></td>
			<td><?php echo $data ['deskripsi_singkat_kamera'] ?></td>
			<td> <img src="../img/foto_produk/<?php echo $data['gambar'];?>" class="img-rounded" width="250" height="250" style="border: 1px solid #666;"></td>
			<td>
				<center><a href="edit-kamera.php?id=<?php echo $data['id_kamera'] ?>" class="btn btn-primary fa fa-edit"></a>
				<a href="hapus-kamera.php?id=<?php echo $data['id_kamera'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger fa fa-trash-o"></a>
			</td>
		</tr>
		<?php } ?>
		</table>
	</div>
</div>
</div>
<?php include('footer.php'); ?>
