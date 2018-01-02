<?php require_once('views/layoutpegawai.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>crud mahasiswa</title>

</head>
<body>

	<h1 align="center">CRUD MAHASISWA</h1>
	<br><br>
	<!-- button diarahkan ke link dengan param controller=mahasiswa dan action=tampilAddMahasiswa -->

	<br><br>
	<div class="container">
		<a href="?controller=saldo&action=tampilAddSaldo"><button type="button" class="btn btn-info">Tambah Data</button></a>
		<br><br>
		<table class="table table-hover">
			<th>No</th>
			<th>ID SALDO</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>ID USER</th>
			<th>action</th>
			<?php $i=1; ?>
			<?php foreach ($posts as $post) { /*Mengambil seluruh data dari variabel
				posts yang ditampung ke variabel post*/ ?>

			<tr>

				<td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_mahasiswa -->
				<td><?php echo $post->id; ?></td>
				<td><?php echo $post->tanggal; ?></td>
				<td><?php echo $post->jumlah;  ?></td>
				<td><?php echo $post->idUser;  ?></td>
				<td>
					<a href="?controller=saldo&action=deleteSaldo&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				</tr> <?php $i++; } ?>
		</table>
	</div>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
