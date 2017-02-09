<?php include('header.php'); ?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Transaksi <small>Administrator</small></h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dollar fa-md"></i> Data Transaksi
			</li>
		</ol>
	</div>
</div>
<div class="col-md-4">
	<form>
		<input type="text" placeholder="Cari nama User" class="form-control" style="margin-bottom: 4px;"></input>
	</form>
	<form>
		<input type="submit" value="Cari Data" class="btn btn-primary"></input>
		<input type="submit" value="Refresh" class="btn btn-success"></input>
	</form>
</div>
<div class="col-lg-12" style="margin-top: 10px;">
	<div class="panel panel-success">
		<!-- Default panel contents -->
		<div class="panel-heading">Data Transaksi</div>
		<!-- Table -->
		<table class="table table-bordered table-justified">
		<tr>
			<th>No</th>
			<th>No Transaksi</th>
			<th>Customer</th>
			<th>Produk</th>
			<th>Tanggal</th>
			<th>Merk</th>
			<th>Aksesoris</th>
			<th>Harga</th>
			<th>Tool</th>
		</tr>
		<tr>
			<td>1</td>
			<td>0001</td>
			<td>1</td>
			<td>2016-02-05</td>
			<td>Canon</td>
			<td></td>
			<td>300.000</td>
			<td>
				<center><a href="" class="btn btn-primary fa fa-edit"></a><a href="" class="btn btn-danger fa fa-trash-o"></a>
			</td>
		</tr>
		</table>
	</div>
</div>
</div>
<?php include('footer.php'); ?>