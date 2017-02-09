<?php include('header.php'); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Peminjaman <small>Administrator</small></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-plus-square-o fa-md"></i> Tambah Peminjaman
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Input Data Peminjaman</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-md-2 control-label">Id Peminjaman</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" readonly="readonly" placeholder="Auto Number Tidak Perlu Di isi!" name="id_peminjaman"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">No.Identitas</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="No.Identitas" class="no"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Peminjam</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Nama Peminjam" name="nama_peminjam"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Kontak</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Kontak" name="kontak"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Pinjam</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Tanggal Pinjam" name="tanggal_pinjam"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Kembali</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Tanggal Kembali" name="tanggal_kembali"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Total Biaya</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Total Biaya" name="total_biaya"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
        <?php 
            if(isset($_POST['simpan'])) {
                include('koneksi.php');
                $koneksi->query("INSERT INTO ta(id_peminjaman, nama, kontak, no_identitas, tgl_peminjaman, tgl_selesai, total_biaya)values('$_POST[id_peminjaman]', '$_POST[nama_peminjam]', '$_POST[kontak]', '$_POST[no_identitas]', '$_POST[tanggal_pinjam]', '$_POST[tanggal_kembali]', '$_POST[total_biaya]')");
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>