<?php
include "connection.php";
session_start();

if(isset($_POST['username'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * from user where username='$username' and password='$password'";
	$select = mysqli_query($con, $sql) or die(mysqli_error());

	if (mysqli_num_rows($select) == 1) {
		$data = mysqli_fetch_array($select);
			$_SESSION ['idUser'] = $data ['idUser'];
			$_SESSION ['username'] = $data ['username'];
			$_SESSION ['password'] = $data ['password'];
			$_SESSION ['level'] = $data ['level'];
			$_SESSION['loggedin'] = 1;
			if ($_SESSION ['level'] == 1) {
				header("location: index.php");
			}
			else if ($_SESSION ['level'] == 2) {
				header('location: tampilanAwal.php');
			}
	}
	else {
		 //kalau username ataupun password gak terdaftar
		header('location: ../views/pages/login.php');
	}

} else {
	header("location: ../views/pages/login.php");
}
?>
