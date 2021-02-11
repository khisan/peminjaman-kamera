<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title></title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body style="background-color: #fff">
<?php 
include ('koneksi.php');
session_start();
// if ($_SESSION) {
//     if ($_SESSION['level']=="admin") {
//         header("Location: dashboard.php");
//     }
//     if ($_SESSION['level']=="operator") {
//         header("Location:dashboard.php");
//     }
// }
$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin");
$data = $ambil->fetch_assoc();
?>
<div class="container col-md-4 col-md-offset-4" style="margin-top: 10%">
            <br />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <center><i class="fa fa-user-o fa-5x"></i></center>
                </div>
                <div class="panel-body" style="background-color: whitesmoke;">
                	<form method="post">
	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon">
	                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
	                            </span>
	                            <input type="text" class="form-control" name="username"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="input-group">
	                            <span class="input-group-addon">
	                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
	                            </span>
	                            <input type="password" class="form-control" name="password"/>
	                        </div>
                        <br>
                        <div class="form-group">
                                <select name="level" class="form-control">
                                    <option value="">Pilih Level Akses</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Operator</option>
                                </select>
                        </div>
	                    <center><button name="login" class="btn btn-success" style="width: 20%">
	                        Login<i class="glyphicon glyphicon-log-in"></i>
	                    </button>
                	</form>
                <?php 
                	if (isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $level = $_POST['level'];

                		$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
                		$cek = $ambil->num_rows;
                		if ($cek === 0) 
                		{
                			echo "<div class='alert alert-danger'>Login Gagal!</div>";
                			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                		}
                        else
                        {
                             $row = $ambil->fetch_assoc();
                             $_SESSION['username']=$row['username'];
                             $_SESSION['level']=$row['level'];
                			if ($row['level'] == "admin" && $level == "1") 
                            {
                                $_SESSION['username']=$row['username'];
                                $_SESSION['level']=$row['level'];
                                echo "<div class='alert alert-info'>Login Sukses!</div>";
                                echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
                            }
                            else
                            {
                                $_SESSION['username']=$row['username'];
                                $_SESSION['level']=$row['level'];
                                echo "<div class='alert alert-info'>Login Sukses!</div>";
                                echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
                            }
                		}
                	}
                ?>
                </div>
            </div>
        </div>
<?php
include ('footer.php');
?>