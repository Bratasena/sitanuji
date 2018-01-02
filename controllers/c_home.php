<?php

Class HomeController
{
    //
    // public function home(){
    // 	$posts=Mahasiswa::showAllMahasiswa();
    // 	require_once("views/pages/home.php");
    // }
    public function home()
    {
        if (!isset($_SESSION['username'])) {
            header("location:index.php?controller=login&action=login");
            exit;
        }
        $posts = Admin::showAllPegawai();
        require_once("views/pages/homeAdmin.php");
    }

    public function awal()
    {
        require_once("tampilanAwal.php");
    }

    public function homePegawai()
    {
        if (!isset($_SESSION['username'])) {
            header("location:index.php?controller=login&action=login");
            exit;
        }
        $posts = Pegawai::showAllNasabah();
        require_once("views/pages/homePegawai.php");
    }

    public function post()
    {
        $posts = Post::posting();
        $posts2 = Post::jumlah();
        // $posts2 = Komen::komen($_POST["id"]);
        require_once("views/pages/postingan.php");
    }

    public function komentar(){
      $posts2 = Komen::komen($_GET["id"]);
      $posts = Komen::postingan($_GET["id"]);
      require_once("views/pages/komentar.php");
    }

    public function postAdmin()
    {
        $posts = PostAdmin::postingA();
        // $posts2 = Post::komen();
        require_once("views/pages/postinganAdmin.php");
    }


    public function about()
    {
        require_once("views/pages/about.php");
    }

    public function homeNasabah()
    {
        if (!isset($_SESSION['username'])) {
            header("location:index.php?controller=login&action=login");
            exit;
        }
        $posts = Nasabah::showAllSaldo();
        $posts2 = Nasabah::showAllTotal();
        require_once("views/pages/homeNasabah.php");
    }

    public function error()
    {
        require_once("views/pages/error.php");
    }


    // public function homeCabang(){
    // 	$posts=Produk::showProdukCabang($_SESSION['login_user']);
    // 	require_once("views/pages/tambah_produk.php");
    // }
}

?>
