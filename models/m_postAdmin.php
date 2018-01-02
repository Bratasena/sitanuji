<?php
/**
 *
 */
class PostAdmin
{
  public $id;
  public $gambar;
  public $idUser;
  public $status;
  public $deskripsi;
  public $nama;
  public $username;
  // public $level;


  function __construct($id,$gambar,$idUser,$status,$deskripsi,$nama,$username,$level)
  {

    $this->id = $id;
    $this->gambar=$gambar;
    $this->idUser=$idUser;
    $this->status=$status;
    $this->deskripsi=$deskripsi;
    $this->nama=$nama;
    $this->username=$username;
    $this->level=$level;
    // $this->komen=$komen;

  }
  public static function setujuPost($id){
    $db = DB::getInstance();
    $req = $db->query("UPDATE posting SET status='boleh'
      where idPosting='$id'
      ");
    return $req;
  }

  public static function tolakPost($id){
    $db = DB::getInstance();
    $req = $db->query("UPDATE posting SET status='tidak'
      where idPosting='$id'
      ");
    return $req;
  }

  public static function hapusPost($id){
    $db = DB::getInstance();

    $req = $db->query("DELETE from posting where idPosting=$id");


    return $req;
  }


  public static function postingA(){
    $list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT p.idPosting,p.gambar,p.idUser,p.status,p.deskripsi,u.nama,u.username,l.jabatan FROM posting p join user u on p.idUser=u.idUser
    join level l on l.level=u.level order by idPosting asc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new PostAdmin($post['idPosting'],$post['gambar'],$post['idUser'],$post['status'],$post['deskripsi'],$post['nama'],$post['username'],$post['jabatan']);
    }
		return $list;
  }


  }



 ?>
