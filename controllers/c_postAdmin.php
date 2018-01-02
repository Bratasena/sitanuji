<?php
/**
 *
 */
class PostAdminController
{

  public function setujuPost()
  {
      $posts = PostAdmin::setujuPost($_GET["id"]);
      header("location:index.php?controller=home&action=postAdmin");
  }

  public function tolakPost()
  {
      $posts = PostAdmin::tolakPost($_GET["id"]);
      header("location:index.php?controller=home&action=postAdmin");
  }

  public function hapusPost()
  {
      $posts = PostAdmin::hapusPost($_GET["id"]);
      header("location:index.php?controller=home&action=postAdmin");
  }

}



?>
