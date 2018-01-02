<?php require_once('views/layoutnasabah.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container-fluid text-center">
      <div class="row content">
        <!-- <div class="col-sm-2 sidenav" id="linkx">
        <p><a href="?controller=order&action=Tanjing" class="btn btn-primary"> Anjing </a> </p>
            </left>
          <p><a href="#">Link</a></p>
          <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <p><a href="?controller=order&action=anjing" class="btn btn-primary"> Tambah Data Anjing </a> </p> -->

        <?php foreach ($posts as $post) {  ?>
          <div class="col-sm-4">
            <p><?php echo $post->deskripsi; ?> </p><br>
          =====================================================================
            <?php foreach ($posts2 as $postnew) {  ?>
            <div class="col-sm-4 bg-danger">
              username :
            <!-- <p class="visible-lg bg-success"> -->
            <p class="bg-danger"><?php echo $postnew->username;  ?></p>
            </div>
            <div class="col-sm-8 bg-success">
            <p class="bg-success"><?php echo $postnew->komen;  ?></p>
            </div>
            <p class="bg-success"><?php echo $postnew->jabatan ; ?></p>
          =====================================================================
            <!-- </p> -->
            <?php
            }
            ?>
            <form class="form-horizontal" method="GET">
      			<input type="hidden" name="controller" value="komentarNasabah">
      			<input type="hidden" name="action" value="tampilAddKomen">
            <input type="hidden" name="id" value="<?php echo $post->id; ?>">
      				<div class="form-group">
      					<label class="col-sm-2 control-label">komen</label>
      					<div class="col-sm-10">
      						<input type="text" class="form-control" name="komen" placeholder="Masukan komen">
      					</div>
      				</div>
              <button type="submit" class="btn btn-info">Tambah Komentar</button></a>
            </form>
          </div>
          <div class="col-sm-8">
          <div class="well">

        <p><img class="thumbnail img-responsive" src="views/upload/<?php echo $post->gambar; ?>" </p>
        <p class="bg-danger"><?php echo $post->id;  ?></p>
        <a href="index.php?controller=postNasabah&action=postNasabah"> <button type="button" class="btn btn-success">Back</button></a>
          </div>
        </div>
        <?php }     ?>



        </div>
      </div>
    </div>

  </body>
</html>
