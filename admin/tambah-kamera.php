<?php 
session_start();
include('header.php'); 
include 'koneksi.php'; 
if (!isset($_SESSION['level'])) 
{
    echo "<script>location='index.php';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Produk <small>Administrator</small></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-cart-plus fa-md"></i> Tambah Data Kamera
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Input Data Produk</h3>
    </div>
    <div class="panel-body">
        <form action="tambah-kamera.php" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-md-2 control-label">Merk</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Merk" name="merk"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tipe</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tipe" name="tipe"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Harga</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Harga" name="harga"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Stock</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Stock" name="stock"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Spesifikasi</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="spesifikasi" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Gambar</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="gambar"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" value="Simpan" class="btn btn-success" name="simpan">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
        <?php 
        if (isset($_POST['simpan'])) 
            {
            $namagambar = $_FILES['gambar']['name'];
            $lokasigambar = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($lokasigambar, "../img/foto_produk/".$namagambar);
            $koneksi->query("INSERT INTO kamera(id_kamera, merk_kamera, harga_kamera, stock_kamera, deskripsi_singkat_kamera, tipe_kamera ,gambar) VALUES(null, '$_POST[merk]', '$_POST[harga]', '$_POST[stock]', '$_POST[spesifikasi]', '$_POST[tipe]', '$namagambar')");
             echo "<div class='alert alert-info'>Data Tersimpan!</div>";
             echo "<meta http-equiv='refresh' content='1;url=data-kamera.php'>";
        }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>
