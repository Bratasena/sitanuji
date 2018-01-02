<?php require_once('views/layoutnasabah.php'); ?>
<div class="wrapper">
<div class="container">
<h1 align="center">CRUD Nasabah</h1>
<br><br>
<h1>
  <div class="container">
<!-- button diarahkan ke link dengan param controller=pegawai dan action=tampilAddpegawai -->
<!-- <a href="?controller=pegawai&action=tampilAddNasabah"><button type="button" class="btn btn-info">Tambah Data</button></a> -->
  <?php foreach ($posts2 as $post) { echo "TOTAL SALDO ANDA : Rp.".$post->total.",00"; }?>
<!-- <a href="?controller=pegawai&action=tampilAddPegawai"><button type="button" class="btn btn-info">Kelola Postingan</button></a> -->
<!-- <a href="logout.php"><button type="button" class="btn btn-info">Logout</button></a> -->
<br><br>
  </div>
</h1>
<div class="container">
  <table class="table table-hover">
    <th>No</th>
    <th>idSaldo</th>
    <th>Tanggal</th>
    <th>Jumlah (Rp)</th>
    <?php $i=1; ?>
    <?php foreach ($posts as $post) { ?>

    <tr>

      <td><?php echo $i; ?></td>
      <td><?php echo $post->idSaldo;  ?></td>
      <td><?php echo $post->tanggal;  ?></td>
      <td><?php echo $post->jumlah;  ?></td>
      <!-- <td>
        <a href="?controller=pegawai&action=editNasabah&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="?controller=pegawai&action=deletNasabah&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
      </td> -->
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
