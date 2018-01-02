<?php
class Saldo
{

	public $id;
	public $tanggal;
	public $jumlah;
	public $idUser;
	public $semua;
	public $tabel1;
	public $tabel2;
	public $tabel3;



	function __construct($id,$tanggal,$jumlah,$idUser,$semua,$tabel1,$tabel2,$tabel3,$ED,$jml)
	{

		$this->id=$id;
		$this->tanggal=$tanggal;
		$this->jumlah=$jumlah;
		$this->idUser=$idUser;
		$this->semua=$semua;
		$this->tabel1=$tabel1;
		$this->tabel2=$tabel2;
		$this->tabel3=$tabel3;
	}

	public static function addDataSaldo($idUser,$jumlah){
		$db = DB::getInstance();
    if($jumlah<1000000){
			$jumlah=1000000;
		} 
		$req = $db->query("INSERT INTO saldo (idSaldo,tanggal,jumlah,idUser)
			VALUES (NULL, CURRENT_DATE , '".$jumlah."', '".$idUser."');");

		return $req;

	}

	public static function showAllSaldo(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM Saldo order by idSaldo asc");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Saldo($post['idSaldo'],$post['tanggal'],$post['jumlah'],$post['idUser'],"","","","","",""
				);
		}
		return $list;
	}

	public static function showTabel(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT idUser,nama,alamat FROM user where level=3");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Saldo("","","","","",$post['idUser'],$post['nama'],$post['alamat'],"",""
				);
		}
		return $list;
	}

		public static function showidUser(){
			$list=[];
			$db = DB::getInstance();
			$req = $db->query("SELECT idUser as ID FROM user where level=3");
			foreach ($req->fetchAll() as $post) {
				$list[] = new Saldo("","","","",$post['ID'],"","","","",""
					);
			}
			return $list;
			}

	public static function editSaldo($id){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT idUser as idUSER,jumlah as jml FROM Saldo where idSaldo=$id");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Saldo("","","","","","","","",$post['idUSER'],$post['jml']
				);
		}


		return $list;
	}

	public static function editDataSaldo($nama,$nim,$jurusan,$id){
		$db = DB::getInstance();

		$req = $db->query("UPDATE Saldo set nama='$nama', nim='$nim', jurusan='$jurusan'
			where id='$id'
			");

		return $req;
	}
	public static function deleteSaldo($id){
		$db = DB::getInstance();

		$req = $db->query("DELETE from saldo where idSaldo=$id
			");

		return $req;
	}

}

?>
