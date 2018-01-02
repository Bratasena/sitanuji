<?php

Class AdminController
{

    public function tampilAddPegawai()
    {
        require_once("views/pages/addPegawai.php");
    }

    public function addPegawai()
    {
        $posts = Admin::addPegawai($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
        header("location:index.php?controller=home&action=home");
    }

    public function showAllPegawai()
    {
        $posts = Admin::showAllPegawai();
        require_once("views/pages/homeAdmin.php");
    }

    public function editPegawai()
    {
        $posts = Admin::editPegawai($_GET["id"]);
        require_once("views/pages/editPegawai.php");
    }

    public function editDataPegawai()
    {
        $posts = Admin::editDataPegawai($_GET["id"], $_GET["password"], $_GET["username"], $_GET["nama"], $_GET["alamat"]);
        header("location:index.php?controller=home&action=home");
    }

    public function deletPegawai()
    {
        $posts = Admin::deletPegawai($_GET["id"]);
        header("location:index.php?controller=home&action=home");
    }


}

?>
