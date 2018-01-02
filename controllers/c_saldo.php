<?php

Class SaldoController
{

    public function tampilAddSaldo()
    {
        $posts = Saldo::showidUser();
        $posts2 = Saldo::showTabel();
        require_once("views/pages/addSaldo.php");
    }

    public function addDataSaldo()
    {
        $posts = Saldo::addDataSaldo($_GET["idUser"], $_GET["jumlah"]);
        header("location:index.php?controller=saldo&action=showAllSaldo");

    }

    public function showAllSaldo()
    {
        $posts = Saldo::showAllSaldo();
        require_once("views/pages/saldo.php");
    }

    public function editSaldo()
    {
        $posts = Saldo::editSaldo($_GET["id"]);
        require_once("views/pages/editSaldo.php");
    }

    public function editDataSaldo()
    {
        $posts = Saldo::editDataSaldo($_GET["nama"], $_GET["nim"], $_GET["jurusan"], $_GET["id"]);
        header("location:index.php?controller=home&action=home");
    }

    public function deleteSaldo()
    {
        $posts = Saldo::deleteSaldo($_GET["id"]);
        header("location:index.php?controller=saldo&action=showAllSaldo");
    }


}

?>
