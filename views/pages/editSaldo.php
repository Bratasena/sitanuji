
<!DOCTYPE HTML>
<html>
<head>
	<title>crud mahasiswa</title>

</head>
<body>
<h1 align="center">CRUD MAHASISWA</h1>
<br><br>
	<div class="container">
		<div class="col-md-6">
			<form class="form-horizontal" method="GET">
			<?php foreach ($posts as $post){

				 ?>


			<input type="hidden" name="controller" value="mahasiswa">
			<input type="hidden" name="action" value="editDataMahasiswa">
			<input type="hidden" name="id" value="<?php echo $post->id; ?>">
			<div class="col-md-6">
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
				<?php } ?>
		</div>
</body>
</html>
