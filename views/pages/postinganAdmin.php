<?php require_once('views/layoutadmin.php'); ?>
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
            <p>username :</p>
            <h1 class="visible-lg bg-success"><?php echo $post->username; ?></h1>
            <p class="bg-danger"><?php echo $post->level  ?></p>
            <p><?php echo $post->deskripsi; ?> </p><br>
            <p>status :</p>
            <h1 class="visible-lg bg-success"><?php echo $post->status; ?></h1>
            <h1>
            <a href="?controller=postAdmin&action=setujuPost&id=<?=$post->id?>"> <button type="button" class="btn btn-success">Konfirmasi</button></a>
            <a href="?controller=postAdmin&action=tolakPost&id=<?=$post->id?>"> <button type="button" class="btn btn-success">Batal Konfirmasi</button></a>
            <a href="?controller=postAdmin&action=hapusPost&id=<?=$post->id?>"> <button type="button" class="btn btn-success">Hapus</button></a>
          </h1>
          </div>
          <div class="col-sm-8">
          <div class="well">

        <p><img class="thumbnail img-responsive" src="views/upload/<?php echo $post->gambar; ?>" </p> <br>


          </div>
        </div>
        <?php }     ?>



        </div>
      </div>
    </div>

  </body>
</html>
