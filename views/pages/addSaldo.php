<?php require_once('views/layoutpegawai.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>crud SALDO</title>

</head>
<body>
<h1 align="center">CRUD SALDO</h1>
<br><br>
	<div class="container">
		<div class="col-md-6">
			<form class="form-horizontal" method="GET">
			<input type="hidden" name="controller" value="saldo">
			<input type="hidden" name="action" value="addDataSaldo">
				<div class="form-group">
					<label class="col-sm-2 control-label">Jumlah (Rp.)</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah Uang Yang Masuk">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">ID USER</label>
					<div class="col-sm-10">
							<div class="form-group">
								<div class="col-sm-10">
									<select type="text" class="form-control" name="idUser">
									<option>ID USER</option>
									  <?php foreach ($posts as $postnew) {?>
										<option><?php echo $postnew->semua;?></option>
									<?php } ?>
									</select>
								</div>
								</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Simpan</button>
						<a href="index.php?controller=saldo&action=showAllSaldo"><button type="button" class="btn btn-success">Back</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="container">
			<div class="container">
				<table class="table table-hover">
					<th>No</th>
					<th>ID USER</th>
					<th>NAMA</th>
					<th>ALAMAT</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<?php $i=1; ?>
					<?php foreach ($posts2 as $post) { /*Mengambil seluruh data dari variabel
						posts yang ditampung ke variabel post*/ ?>
					<tr>
						<td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_mahasiswa -->
						<td><?php echo $post->tabel1; ?></td>
						<td><?php echo $post->tabel2;  ?></td>
						<td><?php echo $post->tabel3;  ?></td>
						</tr> <?php $i++; } ?>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>
