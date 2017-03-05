<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Administrator</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">
<!-- Morris Charts CSS -->
<link href="css/plugins/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--></head>
<style type="text/css">
		}
		th{
			text-align: center;
		}
		.isi-tabel{
			text-align: center;
		}
		.navbar-nav>li>a{
			padding-bottom: 20px !important;
		}
</style>
<body>
<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="dashboard.php">Administrator</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="logout.php" action="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li style="margin: 20px 20px 20px 80px">
				<i class="fa fa-user fa-5x"></i>
			</li>
			<li style="border-top: 1px solid #DCDCDC; border-bottom: 1px solid #DCDCDC;">
				<a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li style="border-bottom: 1px solid #DCDCDC;">
            	<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-camera"></i> Kamera <i class="fa fa-fw fa-caret-down"></i></a>
            		<ul id="demo" class="collapse">
                        <li style="border-top: 1px solid #DCDCDC">
                            <a href="data-kamera.php ?>"><i class="fa fa-fw fa-archive"></i> Data Kamera</a>
                        </li>
                        <li style="border-top: 1px solid #DCDCDC; border-bottom: 1px solid #DCDCDC" >
                            <a href="tambah-kamera.php"><i class="fa fa-fw fa-plus-square-o"></i> Tambah Kamera</a>
                        </li>
                    </ul>
            </li>
            <li style="border-bottom: 1px solid #DCDCDC;">
            	<a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-suitcase"></i> Aksesoris <i class="fa fa-fw fa-caret-down"></i></a>
            		<ul id="demo1" class="collapse">
            			<li style="border-bottom: 1px solid #DCDCDC;">
            				<a href="data-aksesoris.php"><i class="fa fa-fw fa-archive"></i> Data Aksesoris </a>
            			</li>
            			<li style="border-bottom: 1px solid #DCDCDC">
            				<a href="tambah-aksesoris.php"><i class="fa fa-fw fa-plus-square-o"></i> Tambah Aksesoris </a>
            			</li>
            		</ul>
            </li>
			<li style="border-bottom: 1px solid #DCDCDC;">
				<a href="data-peminjaman.php"><i class="fa fa-fw fa-database"></i> Data Peminjaman</a>
			</li>
			<li style="border-bottom: 1px solid #DCDCDC;">
				<a href="admin.php"><i class="fa fa-fw fa-user-o"></i> Data Admin</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
	</nav>
	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
<script src="js/jquery.min.js"></script>
