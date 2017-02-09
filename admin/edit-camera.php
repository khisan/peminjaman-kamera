<?php include('header.php'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Produk <small>Administrator</small></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit fa-md"></i> Edit Data Kamera
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Data Produk</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <div class="form-group">
            <?php include('koneksi.php') ?>
            <?php $ambil=$koneksi->query("SELECT * FROM ta"); ?>
            <?php while($pecah=$ambil->fetch_assoc()) { ?>
                <label class="col-md-2 control-label">ID Kamera</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" readonly="readonly" placeholder="Auto Number Tidak Perlu Di isi!" name="id_kamera"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Merk</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Merk" name="merk_kamera"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Harga</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Harga" name="harga_kamera"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Stock</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Stock" name="stock_kamera"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Spesifikasi</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Spesifikasi" name="deskripsi_singkat_kamera"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Gambar</label>
                <div class="col-md-3">
                    <input type="file" class="form-control"></div>
            </div>
            <?php } ?>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Simpan">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>