<?php include('header.php');
      include ('koneksi.php');

    $ambil = $koneksi->query("SELECT * FROM data_peminjaman ORDER BY id_peminjam DESC LIMIT 1");
    $data = $ambil->fetch_assoc();
?>
<div class="detail-produk jarak">
    <center><h4>Detail Transaksi Anda</h4></center>
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Detail Transaksi</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Id Peminjaman</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['id_peminjam'] ?>"></div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">No.Identitas</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['no_identitas'] ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Pemminjam</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['nama'] ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Kontak</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['kontak'] ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Pinjam</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['tgl_peminjaman'] ?>"></div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Kembali</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['tgl_selesai'] ?>"></div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Total Biaya</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $data['total_biaya'] ?>"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>