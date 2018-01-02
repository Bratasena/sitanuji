<?php

Class PegawaiController
{


  public function postPegawai()
  {
      require_once("views/pages/postinganPegawai.php");
  }

    public function tampilAddNasabah()
    {
        require_once("views/pages/addNasabah.php");
    }

    public function addNasabah()
    {
        $posts = Pegawai::addNasabah($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
        header("location:index.php?controller=home&action=homePegawai");
    }

    public function showAllNasabah()
    {
        $posts = Pegawai::showAllNasabah();
        require_once("views/pages/homePegawai.php");
    }

    public function editNasabah()
    {
        $posts = Pegawai::editNasabah($_GET["id"]);
        require_once("views/pages/editPegawai.php");
    }

    public function editDataNasabah()
    {
        $posts = Pegawai::editDataNasabah($_GET["id"], $_GET["password"], $_GET["username"], $_GET["nama"], $_GET["alamat"]);
        header("location:index.php?controller=home&action=homePegawai");
    }

    public function deletNasabah()
    {
        $posts = Pegawai::deletNasabah($_GET["id"]);
        header("location:index.php?controller=home&action=homePegawai");
    }


}

?>
