<?php
include('./models/m_login.php');

class LoginController
{

    public function login()
    {
        $error = '';
        require_once('views/pages/login.php');
    }

    public function error()
    {
        require_once('views/pages/login.php');
    }

    public function authentication()
    {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            // include('./views/pages/login.php');
        } else {

            if (Login::authentication($_POST['username'], $_POST['password']) == null) {
                $error = "username atau password  tidak valid";
                require_once('views/pages/login.php');
            } else {
                // $_SESSION['login_user']=$_POST['username'];
                $result = Login::authentication($_POST['username'], $_POST['password']);
                $result = $result->fetchAll();
                if (count($result) > 0) {
                    $_SESSION['idUser'] = $result[0]['idUser'];
                    $_SESSION['username'] = $result[0]['username'];
                    $_SESSION['level'] = $result[0]['level'];
                    if (isset($_SESSION['level'])) {
                        if ($_SESSION['level'] == 1) {
                            header("location:index.php?controller=home&action=home");
                        } else if ($_SESSION['level'] == 2) {
                            header("location:index.php?controller=home&action=homePegawai");
                        } else if ($_SESSION['level'] == 3) {
                            header("location:index.php?controller=home&action=homeNasabah");
                        }
                    } else {
                        // require_once('views/pages/error.php');
                        $_SESSION['msg'] = 'username atau password anda salah';
                    }
                } else {
                    header("location:index.php?controller=home&action=error");
                }


            }
        }
    }
}

?>
