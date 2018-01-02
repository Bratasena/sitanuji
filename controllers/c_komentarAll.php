<?php
Class KomentarAllController{


  public function komentarAll(){
    $posts2 = KomenAll::komen($_GET["id"]);
    $posts = KomenAll::postingan($_GET["id"]);
    require_once("views/pages/komentarAll.php");
  }


  public function tampilAddKomen()
  {
    $posts = KomenAll::addKomenPegawai($_GET["id"],$_GET["komen"]);
    header("location:index.php?controller=postPegawai&action=postPegawai");
  }

  // public function addKomenPegawai()
  // {
  //     $posts = KomenAll::addKomenPegawai($_GET["id"],$_GET["komen"]);
  //     header("location:index.php?controller=postPegawai&action=postPegawai");
  // }

}
  // public function komentarNasabah(){
  //   $posts2 = KomenAll::komen($_GET["id"]);
  //   $posts = KomenAll::postingan($_GET["id"]);
  //   require_once("views/pages/komentarNasabah.php");
  // }










 ?>
