<?php
/**
 *
 */
class Post
{
  public $id;
  public $gambar;
  public $idUser;
  public $status;
  public $deskripsi;
  public $nama;
  public $username;
  public $level;
  public $jumlah;


  function __construct($id,$gambar,$idUser,$status,$deskripsi,$nama,$username,$level,$jumlah)
  {
    $this->id = $id;
    $this->gambar=$gambar;
    $this->idUser=$idUser;
    $this->status=$status;
    $this->deskripsi=$deskripsi;
    $this->nama=$nama;
    $this->username=$username;
    $this->level=$level;
    $this->jumlah=$jumlah;
    // $this->komen=$komen;

  }

  public static function addData( $gambar, $idUser, $status, $deskripsi){
    $db = DB::getInstance();

    $req = $db->query("INSERT INTO anjing (id_anjing, nama_anjing, usia_anjing, deskripsi_anjing, foto_anjing)
    VALUES('".NULL."', '".$gambar."', '".$idUser."', '".$status."','".$deskripsi."')");
    return $req;
  }

  public static function posting(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT p.idPosting,p.gambar,p.idUser,p.status,p.deskripsi,u.nama,u.username,l.jabatan FROM posting p join user u on p.idUser=u.idUser
    join level l on l.level=u.level where p.status='boleh' order by idPosting asc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Post($post['idPosting'],$post['gambar'],$post['idUser'],$post['status'],$post['deskripsi'],$post['nama'],$post['username'],$post['jabatan'],"");
    }
		return $list;
	}

  public static function jumlah(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT count(komen) as jumlah FROM komen group by idPosting asc");
    foreach ($req->fetchAll() as $post) {
      $list[] = new Post("","","","","","","","",$post['jumlah']);
    }
    return $list;
  }


//   public static function komen(){
//     $list=[];
//     $db = DB::getInstance();
//     $req = $db->query("SELECT u.username,l.jabatan,k.komen FROM komen k join user u on k.idUser=u.idUser join level l on l.level=u.level where k.idPosting=");
//     foreach ($req->fetchAll() as $post) {
//     $list[] = new Post($post['username'],$post['jabatan'],$post['komen']);
//   }
//     return $list;
// }


  public static function tampil($idPosting){
    $list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM anjing where id_anjing='$idPosting'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['id_anjing'],$post['nama_anjing'],$post['usia_anjing'],$post['deskripsi_anjing'],$post['foto_anjing']);
    }
		return $list;
	}
    public static function editanjing($idPosting,$gambar,$idUser,$status){
		$db = DB::getInstance();
		$req = $db->query("UPDATE anjing set nama_anjing='$gambar', usia_anjing='$idUser', deskripsi_anjing='$status'
    where id_anjing='$idPosting'");
		return $req;
	}
  }



 ?>
