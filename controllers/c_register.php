<?php

Class RegisterController
{

    public function register()
    {
        require_once("views/pages/register.php");
    }

    public function addRegister()
    {
        $posts = Register::addRegister($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
        header("location:tampilanAwal.php");
    }
}
?>
