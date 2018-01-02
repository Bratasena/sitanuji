<?php
/**
 *
 */
class PostPegawai
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


  public static function addData($states,$foto){
    $db = DB::getInstance();

    $req = $db->query("INSERT INTO posting (idPosting, gambar, idUser, status, deskripsi)
    VALUES('".NULL."', '".$foto."', '".$_SESSION['idUser']."', 'tidak','".$states."')");
    return $req;

  }

  public static function posting(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT p.idPosting,p.gambar,p.idUser,p.status,p.deskripsi,u.nama,u.username,l.jabatan FROM posting p join user u on p.idUser=u.idUser
    join level l on l.level=u.level where p.status='boleh' order by idPosting asc");
    foreach ($req->fetchAll() as $post) {
      $list[] = new PostPegawai($post['idPosting'],$post['gambar'],$post['idUser'],$post['status'],$post['deskripsi'],$post['nama'],$post['username'],$post['jabatan'],"");
    }
    return $list;
  }

  public static function jumlah(){
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT count(komen) as jumlah FROM komen group by idPosting");
    foreach ($req->fetchAll() as $post) {
      $list[] = new PostPegawai("","","","","","","","",$post['jumlah']);
    }
    return $list;
  }



  }



 ?>
