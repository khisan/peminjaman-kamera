<?php include('header.php'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Produk <small>Administrator</small></h1>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Data Produk</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Id Produk</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" readonly="readonly" placeholder="Auto Number Tidak Perlu Di isi!"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Produk</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Nama Produk"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Jenis</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jenis"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Harga</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Harga"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Keterangan</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Keterangan"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Stock</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Stock"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Gambar Produk</label>
                <div class="col-md-3">
                    <input type="file" class="form-control"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Simpan">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>