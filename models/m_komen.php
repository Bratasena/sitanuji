<?php
/**
 *
 */
class Komen
{
  // public $idPosting;
  // public $gambar;
  // public $idUser;
  // public $deskripsi;
  // public $deskripsi;
  // public $nama;
  // public $username;
  // public $level;


  public $id;
  public $username;
  public $komen;
  public $jabatan;
  public $deskripsi;
  public $gambar;

  function __construct($id,$username,$komen,$jabatan,$deskripsi,$gambar)
  {
    // $this->idPosting = $idPosting;
    // $this->gambar=$gambar;
    // $this->idUser=$idUser;
    // $this->deskripsi=$deskripsi;
    // $this->deskripsi=$deskripsi;
    // $this->nama=$nama;
    // $this->username=$username;
    // $this->level=$level;
    $this->id=$id;
    $this->username=$username;
    $this->komen=$komen;
    $this->jabatan=$jabatan;
    $this->deskripsi=$deskripsi;
    $this->gambar=$gambar;

  }


  // public static function komen(){
	// 	$list = [];
	// 	$db = DB::getInstance();
	// 	$req = $db->query("SELECT p.idPosting,p.gambar,p.idUser,p.deskripsi,p.deskripsi,u.nama,u.username,l.jabatan FROM posting p join user u on p.idUser=u.idUser
  //   join level l on l.level=u.level where p.deskripsi='boleh' ");
	// 	foreach ($req->fetchAll() as $post) {
	// 		$list[] = new Post($post['idPosting'],$post['gambar'],$post['idUser'],$post['deskripsi'],$post['deskripsi'],$post['nama'],$post['username'],$post['jabatan']);
  //   }
	// 	return $list;
	// }

  public static function postingan($id){
    $list=[];
    $db = DB::getInstance();
    $req = $db->query("SELECT idPosting,deskripsi,gambar FROM posting where idPosting=$id");
    foreach ($req->fetchAll() as $post) {
    $list[] = new Komen($post['idPosting'],"","","",$post['deskripsi'],$post['gambar']);
  }
    return $list;
  }



  public static function komen($id){
    $list=[];
    $db = DB::getInstance();
    $req = $db->query("SELECT u.username,k.komen,l.jabatan FROM komen k join user u on k.idUser=u.idUser join level l on l.level=u.level where k.idPosting=$id");
    foreach ($req->fetchAll() as $post) {
    $list[] = new Komen("",$post['username'],$post['komen'],$post['jabatan'],"","");
  }
    return $list;
}




  }



 ?>
