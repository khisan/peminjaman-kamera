<?php include('header.php');
      include ('koneksi.php');
session_start();
    $ambil = $koneksi->query("SELECT * FROM admin"); 
    $data = $ambil->fetch_assoc();
if (!isset($_SESSION['admin'])) 
{
    echo "<script>location='index.php';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admin <small>Administrator</small></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit fa-md"></i> Edit Admin
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Data Admin</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="edit-admin.php?id=<?php echo $data ['id_admin']?>">
            <div class="form-group">
                <label class="col-md-2 control-label">Username</label>
                <div class="col-md-3">
                    <input type="text" class="form-control"  placeholder="Username" name="user" value="<?php echo $data['username'] ?>"></div>
            </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Password</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Password Lama" name="pass" value="<?php echo $data['password'] ?>"></div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data['nama'] ?>"></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-success" value="Ubah" name="ubah">
                <input type="submit" class="btn btn-danger" value="Batal"></div>
        </form>
        <?php 
            if (isset($_POST['ubah'])) 
            {
                $koneksi->query("UPDATE admin SET username='$_POST[user]', password='$_POST[pass]', nama='$_POST[nama]' WHERE id_admin='$_GET[id]'");
                 echo "<script>alert('Data Berhasil Diubah!')</script>";
                 echo "<script>location='admin.php'</script>";
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>