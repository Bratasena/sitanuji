<?php
class Pegawai
{

	public $id;
	public $username;
	public $password;
	public $nama;
	public $alamat;




	function __construct($id,$username,$password,$nama,$alamat)
	{

		$this->id=$id;
		$this->username=$username;
		$this->password=$password;
		$this->nama=$nama;
		$this->alamat=$alamat;


	}

	public static function addNasabah($username,$password,$nama,$alamat){
		$db = DB::getInstance();
		$req =
		$db->query("INSERT INTO user (idUser, username, password, nama,alamat,level)
		VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."',3)");
		return $req;
	}

	public static function showAllNasabah(){
		$list=[];
		$db = DB::getInstance();
		$req = $db->query("SELECT idUser,username,password,nama,alamat FROM user where level=3");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Pegawai($post['idUser'],$post['username'],$post['password'],$post['nama'],$post['alamat']
			);
		}
		return $list;
	}
	public static function editNasabah($id){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where idUser=$id");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Pegawai($post['idUser'],$post['username'],$post['password'],$post['nama'],$post['alamat']
				);
		}

		return $list;
	}

	public static function editDataNasabah($id,$username,$password,$nama,$alamat){
		$db = DB::getInstance();
		$req = $db->query("UPDATE user set username='$username', password='$password', nama='$nama', alamat='$alamat'
			where idUser='$id'
			");
		return $req;
	}
	public static function deletNasabah($id){
		$db = DB::getInstance();

		$req = $db->query("DELETE from user where idUser=$id");

		return $req;
	}

}

?>
