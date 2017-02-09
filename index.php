<?php
include ('header.php');
include('koneksi.php');
	$ambil = $koneksi->query("SELECT * FROM kamera WHERE id_kamera"); ?>
<div class="automatic-slider">
	<ul>
		<li><img src="img/slider/slider1.jpg"></li>
		<li><img src="img/slider/slider2.jpg"></li>
		<li><img src="img/slider/slider3.jpg"></li>
	</ul>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="header">Produk</h3>
		</div>
		<?php
			while ($data = $ambil->fetch_assoc()) { ?>
		<div class='col-md-4'>
			<div class='thumbnail'>
				<div class='gambar-produk'>
					<img src='img/foto_produk/<?php echo $data ['gambar'] ?>'>
				</div>
				<div class='judul'>
					<p>
						Kode Produk : <?php echo $data ['id_kamera'] ?>
					</p>
					<h3><?php echo $data ['merk_kamera'] ?>
					</h3>
				</div>
				<div class='keterangan'>
					<p>
						Rp.<?php echo number_format($data['harga_kamera'],0, ",", ".")?>
						 / 1 Hari
					</p>
					<a href="detail.php?id=<?php echo $data['id_kamera'] ?>" class='btn btn-default'>Detail</a>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>
<?php
include ('footer.php');
?>