<?php
session_start();
require_once('connection.php');

if (isset($_POST['controller']) && isset($_POST['action']) ) {
	$controller = $_POST['controller'];
	$action 	= $_POST['action'];

}

elseif (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller=$_GET['controller'];
	$action=$_GET['action'];
}
else{
	$controller = 'login';
	$action 	= 'awal';
}

require_once('views/layout.php');
/*isi dari file index.php adalah layout.php dan layout.php bodynya ambil dari routes.php
routes.php berisi pendefinisian object dan mengarahkan sesuai param controller apa dan actionnya apa*/
?>
