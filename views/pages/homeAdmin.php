<?php require_once('views/layoutadmin.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>crud pegawai</title>
</head>
<body>
	<!-- <link rel="stylesheet" href="resources/css/sangar.css"> -->
	<!-- <link rel="stylesheet" href="resources/css/sangar2.css"> -->

  <div class="wrapper">
	<div class="container">
	<h1 align="center">CRUD pegawai</h1>
	<br><br>
		<div class="container">
	<!-- button diarahkan ke link dengan param controller=pegawai dan action=tampilAddpegawai -->
	<a href="?controller=admin&action=tampilAddPegawai"><button type="button" class="btn btn-info">Tambah Data</button></a>
	<!-- <a href="?controller=pegawai&action=tampilAddPegawai"><button type="button" class="btn btn-info">Kelola Postingan</button></a> -->
	<!-- <a href="logout.php"><button type="button" class="btn btn-info">Logout</button></a> -->
	<br><br>
		</div>
	<div class="container">
		<table class="table table-hover">
			<th>No</th>
			<th>idUser</th>
			<th>username</th>
			<th>password</th>
			<th>nama</th>
			<th>alamat</th>
			<th>action</th>
			<?php $i=1; ?>
			<?php foreach ($posts as $post) { /*Mengambil seluruh data dari variabel
				posts yang ditampung ke variabel post*/ ?>

			<tr>

				<td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_pegawai -->
				<td><?php echo $post->id;  ?></td>
				<td><?php echo $post->username; ?></td>
				<td><?php echo $post->password; ?></td>
				<td><?php echo $post->nama;  ?></td>
				<td><?php echo $post->alamat;  ?></td>
				<td>
					<a href="?controller=admin&action=editPegawai&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="?controller=admin&action=deletPegawai&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				</tr> <?php $i++; } ?>
		</table>
	</div>
</div>
</div>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
