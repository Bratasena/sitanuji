<?php require_once('views/layoutpegawai.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>crud Nasabah</title>

</head>
<body>
<h1 align="center">CRUD addNasabah</h1>
<br><br>
	<div class="container">
		<div class="col-md-6">
			<form class="form-horizontal" method="GET">
			<input type="hidden" name="controller" value="pegawai">
			<input type="hidden" name="action" value="addNasabah">
				<div class="form-group">
					<label class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" placeholder="Masukan Username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" placeholder="Masukan Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Simpan</button>
						<a href="index.php?controller=home&action=homePegawai"><button type="button" class="btn btn-success">Back </button>
					</div>
				</div>
					</div>
				</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
