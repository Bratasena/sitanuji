<?php
/**
 *
 */
class PostNasabahController
{

  public function order() {
    require_once('views/pages/order.php');
  }

  public function postNasabah()
  {
      $posts = PostNasabah::posting();
      $posts2 = PostNasabah::jumlah();
      // $posts2 = Komen::komen($_POST["id"]);
      require_once("views/pages/postinganNasabah.php");
  }

public function addPost(){
  require_once('views/pages/addPostNasabah.php');
}

public function addDataPost(){
    $folder = 'views/upload/';
    $name_p = $_FILES['gambar']['name'];
    $rename = date('Hs').$name_p;
    $sumber_p = $_FILES['gambar']['tmp_name'];
  if(move_uploaded_file($sumber_p,$folder.$rename)){;
  $post = PostNasabah::addData($_POST["deskripsi"],$rename);
  header("location:index.php?controller=postNasabah&action=postNasabah");
  }
}

  public function editPost(){
    $posts = PostNasabah::tampil($_GET["id"]);
    require_once ('views/pages/admin_editanjing.php');
  }
  public function editDataPost(){
    $edit = Order::editanjing($_POST["idAnjing"],$_POST["namaAnjing"],$_POST["usiaAnjing"],$_POST["deskripsiAnjing"]);
    header("location:index.php?controller=order&action=Tanjing");
  }
}



?>
