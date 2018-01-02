<?php
$host = "localhost"; //umumnya menggunakan localhost
$username = "root"; //isikan dengan username mysql
$pass = "";
$db = "tanuji";
// $con = mysqli_connect($host, $username, $pass, $db);
	class DB{
		private static $instance = NULL;

		private function __construct(){
			
		}

		private function __clone() {}

		public static function getInstance(){

			if (!isset(self::$instance)) {
				//session_start();
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$instance = new PDO('mysql:host=localhost;dbname=sitanuji','root','',$pdo_options);
			}
			return self::$instance;
		}
	}
 ?>
