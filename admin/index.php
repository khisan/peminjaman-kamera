<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body style="background-color: #ececec">
<?php 
session_start();
include ('koneksi.php');
?>
<div class="container col-md-4 col-md-offset-4" style="margin-top: 10%">
            <br />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <center><i class="fa fa-user-o fa-5x"></i></center>
                </div>
                <div class="panel-body">
                	<form method="post">
	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon">
	                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
	                            </span>
	                            <input type="text" class="form-control" name="user"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon">
	                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
	                            </span>
	                            <input type="password" class="form-control" name="pass"/>
	                        </div>
	                    </div>
	                    <center><button name="login" class="btn btn-success" style="width: 20%">
	                        Login<i class="glyphicon glyphicon-log-in"></i>
	                    </button>
                	</form>
                <?php 
                	if (isset($_POST['login'])) {
                		$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");
                		$cek = $ambil->num_rows;
                		if ($cek > 0) 
                		{
                			$_SESSION['admin']=$ambil->fetch_assoc();
                			echo "<div class='alert alert-info'>Login Sukses</div>";
                			echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
                		}
                		else
                		{
                			echo "<div class='alert alert-danger'>Login Gagal</div>";
                			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                		}
                	}
                ?>
                </div>
            </div>
        </div>
<?php
include ('footer.php');
?>