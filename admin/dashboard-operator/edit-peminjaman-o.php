<?php
include('header.php');
include ('koneksi.php');
session_start();
    $ambil = $koneksi->query("SELECT * FROM data_peminjaman  WHERE id_peminjam='$_GET[id]'");
    $data = $ambil->fetch_assoc();
if (!isset($_SESSION['level'])) 
{
    echo "<script>location='index.php';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Peminjaman <small>Administrator</small></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit fa-md"></i> Edit Peminjaman
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Data Peminjaman</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="edit-peminjaman.php?id=<?php echo $data['id_peminjam'] ?>">
             <div class="form-group">
                <label class="col-md-2 control-label">No.Identitas</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="No.Identitas" name="no_identitas" value="<?php echo $data['no_identitas'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Pemminjam</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Nama Peminjam" name="nama" value="<?php echo $data['nama'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Kontak</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Kontak" name="kontak" value="<?php echo $data['kontak'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Pinjam</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tanggal Pinjam" name="tgl_pinjam" value="<?php echo $data['tgl_peminjaman'] ?>"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Kembali</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tanggal Kembali" name="tgl_selesai" value="<?php echo $data['tgl_selesai'] ?>"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Total Biaya</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Total Biaya" name="harga_kamera" value="<?php echo $data['total_biaya'] ?>"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Ubah" name="ubah">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
        <?php 
            if (isset($_POST['ubah'])) 
            {
                $tgl_mulai = $_POST['tgl_peminjaman'];
                $tgl_selesai = $_POST['tgl_selesai'];
   
                $selisih = ((abs(strtotime ($tgl_mulai) - strtotime ($tgl_selesai)))/(60*60*24));
                $koneksi->query("UPDATE data_peminjaman SET id_peminjam='$_POST[id]', nama='$_POST[nama]', kontak='$_POST[kontak]', no_identitas='$_POST[no_identitas]', tgl_peminjaman='$_POST[tgl_pinjam]', tgl_selesai='$_POST[tgl_selesai]', total_biaya='$_POST[total_biaya]' WHERE id_peminjam='$_GET[id]'");
                 echo "<script>alert('Data Berhasil Diubah!')</script>";
                 echo "<script>location='data-peminjaman.php'</script>";
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>