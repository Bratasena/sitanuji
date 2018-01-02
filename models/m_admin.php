<?php
class Admin
{

	public $id;
	public $username;
	public $password;
	public $nama;
	public $alamat;

	// public $idPosting;
	// public $idUser;
	// public $status;
	// public $deskripsi;
	// public $namaa;
	// public $usernamee;
	// public $level;


	function __construct($id,$username,$password,$nama,$alamat)
	{

		$this->id=$id;
		$this->username=$username;
		$this->password=$password;
		$this->nama=$nama;
		$this->alamat=$alamat;

		// $this->gambar=$gambar;

		// $this->idPosting = $idPosting;
		// $this->gambar=$gambar;
		// $this->idUser=$idUser;
		// $this->status=$status;
		// $this->deskripsi=$deskripsi;
		// $this->nama=$namaa;
		// $this->username=$usernamee;
		// $this->level=$level;


	}

	public static function addPegawai($username,$password,$nama,$alamat){
		$db = DB::getInstance();
		// $req2 = $db->query("INSERT INTO user (idUser, username, password, level)
		// VALUES (NULL,'".$username."','".$password."',2)");
		$req =
		$db->query("INSERT INTO user (idUser, username, password, nama,alamat,level)
		VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."',2)");
		return $req;
	}

	public static function showAllPegawai(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT idUser,username,password,nama,alamat FROM user where level=2");


		foreach ($req->fetchAll() as $post) {
			$list[] = new Admin($post['idUser'],$post['username'],$post['password'],$post['nama'],$post['alamat']
			);
		}
		return $list;
	}
	public static function editPegawai($id){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where idUser=$id");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Admin($post['idUser'],$post['username'],$post['password'],$post['nama'],$post['alamat']
				);
		}

		return $list;
	}

	public static function editDataPegawai($id,$username,$password,$nama,$alamat){
		$db = DB::getInstance();
		$req = $db->query("UPDATE user set username='$username', password='$password', nama='$nama', alamat='$alamat'
			where idUser='$id'
			");
		return $req;
	}
	public static function deletPegawai($id){
		$db = DB::getInstance();

		$req = $db->query("DELETE from user where idUser=$id");

		return $req;
	}

	// public static function adminPost(){
	// 	$list = [];
	// 	$db = DB::getInstance();
	// 	$req = $db->query("SELECT p.idPosting,p.gambar,p.idUser,p.status,p.deskripsi,u.nama,u.username,l.jabatan FROM posting p join user u on p.idUser=u.idUser
  //   join level l on l.level=u.level ");
	// 	foreach ($req->fetchAll() as $post) {
	// 		$list[] = new Admin($post['idPosting'],$post['gambar'],$post['idUser'],$post['status'],$post['deskripsi'],$post['nama'],$post['username'],$post['jabatan']);
  //   }
	// 	return $list;
	// }

}

?>
