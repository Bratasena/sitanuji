<div class="row">
    <div class="col-lg-6">

<form class="form" method="post" enctype="multipart/form-data" >
 <?php foreach ($posts as $post) { ?>
      <input class="hidden" name="controller" value="order"></input>
      <input class="hidden" name="action" value="editanjing2"></input>
      <input class="hidden" name="idAnjing" value="<?php  echo $post->idAnjing; ?>">

  <input type="text" name="namaAnjing" value="<?php echo $post->namaAnjing ;?> " placeholder="masukan nama kucing"><br><br>
  <input type="text" name="usiaAnjing" value="<?php echo $post->usiaAnjing ;?> " placeholder="masukan usia kucing"><br><br>
  <input type="text" name="deskripsiAnjing" value="<?php echo $post->deskripsiAnjing ;?>" placeholder="Deskripsi Singkat"><br><br>
  <input type="file" name="fotoAnjing" value="<?php echo $post->fotoAnjing ;?>" placeholder="masukan foto kucing"><br><br>
  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
  <?php } ?>
</form>
