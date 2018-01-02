<?php
class Nasabah
{

	public $idSaldo;
	public $tanggal;
	public $jumlah;
	public $id;
	public $total;




	function __construct($idSaldo,$tanggal,$jumlah,$id,$total)
	{

		$this->idSaldo=$idSaldo;
		$this->tanggal=$tanggal;
		$this->jumlah=$jumlah;
		$this->id=$id;
		$this->total=$total;


	}

	public static function addNasabah($username,$password,$nama,$alamat){
		$db = DB::getInstance();
		// $req2 = $db->query("INSERT INTO user (idUser, username, password, level)
		// VALUES (NULL,'".$username."','".$password."',2)");
		$req =
		$db->query("INSERT INTO user (idUser, username, password, nama,alamat,level)
		VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."',3)");
		return $req;
	}

	public static function showAllSaldo(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * from Saldo where idUser=".$_SESSION['idUser']."");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Nasabah($post['idSaldo'],$post['tanggal'],$post['jumlah'],$post['idUser'],""
			);
		}
		return $list;
	}

	public static function showAllTotal(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT SUM(jumlah) as total from Saldo where idUser=".$_SESSION['idUser']."");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Nasabah("","","","",$post['total']
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
