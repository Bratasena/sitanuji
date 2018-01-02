<?php require_once('views/layoutnasabah.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
  <a href="?controller=postNasabah&action=addPost"><button type="button" class="btn btn-info">Tambah Postingan</button></a>
  <br><br>
    </div>
    <div class="container-fluid text-center">
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

          <?php $i = 0;
          foreach ($posts as $post) {  ?>
            <div class="col-sm-4">
              <p>username :</p>
              <h1 class="visible-lg bg-success">
              <p class="visible-lg bg-success"><?php echo $post->username; ?>
              </h1>
              <p class="bg-danger"><?php echo $post->level  ?></p>
              <p><?php echo $post->deskripsi; ?> </p><br>
            </div>
            <div class="col-sm-8">
            <div class="well">

          <p><img class="thumbnail img-responsive" src="views/upload/<?php echo $post->gambar; ?>" </p>
          <p class="bg-danger"><?php echo $post->id  ?></p>
          <a href="?controller=komentarNasabah&action=komentarNasabah&id=<?=$post->id?>"> <button type="button" class="btn btn-success">
            <?php

          echo  (isset($posts2[$i]))?$posts2[$i]->jumlah." ":"0 ";


  ?>Komentar</button></a>
            </div>
          </p>
          </div>
          <?php $i++;}     ?>



          </div>
        </div>



        </div>
      <!-- </div>
    </div> -->

  </body>
</html>
