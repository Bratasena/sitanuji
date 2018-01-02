<?php
Class KomentarNasabahController{


  public function komentarNasabah(){
    $posts2 = KomenNasabah::komen($_GET["id"]);
    $posts = KomenNasabah::postingan($_GET["id"]);
    require_once("views/pages/komentarNasabah.php");
  }


  public function tampilAddKomen()
  {
    $posts = KomenNasabah::addKomenPegawai($_GET["id"],$_GET["komen"]);
    header("location:index.php?controller=postNasabah&action=postNasabah");
  }
}
  // public function komentarNasabah(){
  //   $posts2 = KomenAll::komen($_GET["id"]);
  //   $posts = KomenAll::postingan($_GET["id"]);
  //   require_once("views/pages/komentarNasabah.php");
  // }










 ?>
