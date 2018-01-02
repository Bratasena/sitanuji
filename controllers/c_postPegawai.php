<?php
/**
 *
 */
class PostPegawaiController
{

  public function order() {
    require_once('views/pages/order.php');
  }

  public function postPegawai()
  {
      $posts = PostPegawai::posting();
      $posts2 = PostPegawai::jumlah();
      // $posts2 = Komen::komen($_POST["id"]);
      require_once("views/pages/postinganPegawai.php");
  }

public function addPost(){
  require_once('views/pages/addPostPegawai.php');
}

  public function addDataPost(){
      $folder = 'views/upload/';
      $name_p = $_FILES['gambar']['name'];
      $rename = date('Hs').$name_p;
      $sumber_p = $_FILES['gambar']['tmp_name'];
    if(move_uploaded_file($sumber_p,$folder.$rename)){;
    $post = PostPegawai::addData($_POST["deskripsi"],$rename);
    header("location:index.php?controller=postPegawai&action=postPegawai");
    }
  }
  public function editPost(){
    $posts = PostPegawai::tampil($_GET["id"]);
    require_once ('views/pages/admin_editanjing.php');
  }
  public function editDataPost(){
    $edit = Order::editanjing($_POST["idAnjing"],$_POST["namaAnjing"],$_POST["usiaAnjing"],$_POST["deskripsiAnjing"]);
    header("location:index.php?controller=order&action=Tanjing");
  }
}



?>
