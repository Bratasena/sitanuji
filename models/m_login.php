<?php
// include "connection.php";
	/**
	*
	*/
	class Login
	{
		public $username;
		public $password;
		function __construct($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
		}

		public static function authentication($username, $password){
			strpos($username, ';')?die('username tidak boleh mengandung ";"'):'';
			$db = DB::getInstance();
			$req   =$db->query("SELECT * from user where username='$username' and password='$password'");
			return $req;
		}
	}
	?>
