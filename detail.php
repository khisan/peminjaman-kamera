<?php
include ('header.php');
include('koneksi.php');
 	$ambil = $koneksi->query("SELECT * FROM kamera WHERE id_kamera='$_GET[id]'");
 	$data = $ambil->fetch_assoc();
?>
<style type="text/css">
	.img-detail img{width: 90%;}
	.detail{padding-left: 10px;
			border-left: 1px solid #dadfe1;
			padding-bottom: 20px;}
	.harga{padding-bottom: 30px;}
</style>
<div class="detail-produk jarak">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="img-detail">
					<img src="img/foto_produk/<?php echo $data ['gambar'] ?>">
				</div>
			</div>
			<div class="col-md-6 detail">
				<div>
					<h3><?php echo $data ['merk_kamera']." ".$data['tipe_kamera']; ?></h3>
					<table>
					<tr>
					<div class="panel panel-success">
  						<div class="panel-heading">Deskripsi</div>
  						<div class="panel-body" style="text-align: justify;">
    						<?php echo $data ['deskripsi_singkat_kamera']; ?>
  						</div>
						</div>
					</tr>
					<tr>
						<td>
							<p>
								Merk : <?php echo  $data ['merk_kamera']; ?> 
							</p>
						</td>
					</td>
					</tr>
						<td>
							<p>
								Tipe : <?php echo $data ['tipe_kamera']; ?> 
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>
								ID Produk : <?php echo $data ['id_kamera']; ?> 
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>
								Stock	: <?php echo $data ['stock_kamera']; ?> 
							</p>
						</td>
					</tr>
					</table>
					<div class="col-md-6 col-md-offset-4">
						<td class="kol-pinjam">
					<h4>Harga Sewa</h4>
					<P>Rp.<?php echo number_format($data['harga_kamera'],0, ",", ".")?> / 1 Hari</P>
          <!-- Cek Stock -->
          <?php
          $ambil3 = $koneksi->query("SELECT * FROM kamera WHERE id_kamera='$_GET[id]'");
          $cek1 = $ambil3->fetch_array();
          $cekstock = $cek1['stock_kamera'];
            if ($cekstock == '0'){
                echo "<div class='alert alert-info'>Maaf Stock Habis</div>";
            }
          ?>
					<button type="button" name="pinjam" <?php if ($cekstock == '0'){ ?> disabled <?php   } ?> class="btn btn-success" data-toggle="modal" data-target="#myModal">Pinjam</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Peminjaman-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      <div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Input Data Peminjam</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-md-4 control-label">ID Kamera</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" readonly="readonly" name="id_kamera" placeholder="Auto Number Tidak Perlu Di isi!" value="<?php echo $data['id_kamera'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">No.KTP</label>
                <div class="col-md-5">
                    <input class="form-control" placeholder="no ktp" name="no_identitas" required oninvalid="this.setCustomValidity('Input Angka 16 Digit')" oninput="setCustomValidity('')" pattern="[0-9]{16}" type="number">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nama</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="nama" name="nama" type="text" pattern="[a-zA-Z]+" required="Input Huruf Saja"></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">No.Telepon</label>
                <div class="col-md-5">
                    <input class="form-control" placeholder="no telepon" name="kontak" required oninvalid="this.setCustomValidity('Input No Hp')" oninput="setCustomValidity('')" pattern="^08[0-9]{9,}" type="number" ></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Tanggal Mulai Peminjaman</label>
                <div class="col-md-5">
                    <input type="date" class="form-control" placeholder="tgl mulai peminjaman" name="tgl_peminjaman" required=""></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Tanggal Selesai</label>
                <div class="col-md-5">
                    <input type="date" class="form-control" placeholder="lama peminjaman" name="tgl_selesai" required=""></div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Harga Kamera</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="harga_kamera" readonly="readonly" value="<?php echo $data ['harga_kamera'] ?>"></div>
                     <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            </div>
            <div class="modal-footer">
        		<input type="submit" class="btn btn-danger" name="" value="Batal" data-dismiss="modal">
        		<input type="submit" class="btn btn-primary" name="kirim" value="Kirim">
        	</div>
        </form>
		<?php 
    
    if (isset($_POST['kirim'])) 
		{ 
			 $tgl_mulai = $_POST['tgl_peminjaman'];
       $tgl_selesai = $_POST['tgl_selesai'];
       $selisih = ((abs(strtotime ($tgl_mulai) - strtotime ($tgl_selesai)))/(60*60*24)) + 1;
       $total_biaya = $selisih * $_POST['harga_kamera'];
       $sql = $koneksi->query("INSERT INTO data_peminjaman(id_peminjam, nama, kontak, no_identitas, tgl_peminjaman, tgl_selesai,  total_biaya)VALUES(null, '$_POST[nama]', '$_POST[kontak]', '$_POST[no_identitas]', '$_POST[tgl_peminjaman]', '$_POST[tgl_selesai]', $total_biaya)"); 
            
               if (isset($sql)) {
               	$ambil2 = $koneksi->query("SELECT * FROM kamera WHERE id_kamera='$_GET[id]'");
               	$tes = $ambil2->fetch_array();
               	$stock = $tes['stock_kamera'] - 1;
               	$sql1 = $koneksi->query("UPDATE kamera SET stock_kamera='$stock' WHERE id_kamera='$_GET[id]'");
               	echo "<script>location='detail-transaksi.php'</script>"; 
               }  
		}

		?>
	</div>
	</div> 
		</div>
      </div>
    </div>
  </div>
<?php
include ('footer.php');
?>