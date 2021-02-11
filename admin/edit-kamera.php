<?php 
session_start();
include('header.php');
include('koneksi.php'); 
    $ambil = $koneksi->query("SELECT * FROM kamera WHERE id_kamera='$_GET[id]'"); 
    $data = $ambil->fetch_assoc();
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
        <form class="form-horizontal" method="post" action="edit-kamera.php?id=<?php echo $data['id_kamera'] ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-md-2 control-label">Merk</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Merk" name="merk_kamera" value="<?php echo $data['merk_kamera'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tipe</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tipe" name="tipe_kamera" value="<?php echo $data['tipe_kamera'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Harga</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Harga" name="harga_kamera" value="<?php echo $data['harga_kamera'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Stock</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Stock" name="stock_kamera" value="<?php echo $data['stock_kamera'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Spesifikasi</label>
                <div class="col-md-4">
                   <textarea class="form-control" name="spesifikasi" rows="5"><?php echo $data['deskripsi_singkat_kamera'] ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Gambar Sebelumnya</label>
               <img src="../img/foto_produk/<?php echo $data['gambar'];?>" class="img-rounded" width="250" height="250" style="border: 1px solid #666;">
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Ubah Gambar</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="gambar"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Ubah" name="ubah">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
        <?php 
        if (isset($_POST['ubah'])) {
            $namagambar=$_FILES['gambar']['name'];
            $lokasigambar=$_FILES['gambar']['tmp_name'];
            //jika foto dirubah
                if (!empty($lokasigambar)) 
                {
                    move_uploaded_file($lokasigambar, "../img/foto_produk/$namagambar");
                     
                    $koneksi->query("UPDATE kamera SET merk_kamera='$_POST[merk_kamera]', harga_kamera='$_POST[harga_kamera]', stock_kamera='$_POST[stock_kamera]', deskripsi_singkat_kamera='$_POST[spesifikasi]', tipe_kamera='$_POST[tipe_kamera]', gambar='$namagambar'  WHERE id_kamera='$_GET[id]'");
                }
                else
                {
                $koneksi->query("UPDATE kamera SET merk_kamera='$_POST[merk_kamera]', harga_kamera='$_POST[harga_kamera]', stock_kamera='$_POST[stock_kamera]', deskripsi_singkat_kamera='$_POST[spesifikasi]', tipe_kamera='$_POST[tipe_kamera]'  WHERE id_kamera='$_GET[id]'");  
                }
                echo "<script>alert('Data Berhasil Diubah!')</script>";
                echo "<script>location='data-kamera.php'</script>";
                
            //echo "UPDATE kamera SET merk_kamera='$_POST[merk_kamera]', harga_kamera='$_POST[harga_kamera]',stock_kamera='$_POST[stock_kamera]', deskripsi_singkat_kamera='$_POST[deskripsi_singkat_kamera]' WHEREid_kamera='$_GET[id_kamera]'";
         }  
        ?>
    </div>
</div>
<?php include('footer.php'); ?>