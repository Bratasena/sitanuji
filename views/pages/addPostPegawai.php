<?php require_once('views/layoutpegawai.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>POSTING SESUATU</title>

</head>
<body>
<h1 align="center">POSTING SESUATU</h1>
<div class="container">
  <div class="col-md-6">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="controller" value="postPegawai">
    <input type="hidden" name="action" value="addDataPost">
      <div class="form-group">
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Status">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Gambar</label>
        <div class="col-sm-10">
        <input type="file" name="gambar" value="" placeholder="masukan Gambar"><br><br>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
            </form>
          <a href="index.php?controller=postPegawai&action=postPegawai"><button type="button" class="btn btn-success">Back</button>
        </div>
      </div>
        </div>
      </div>
      </div>

  </body>
  </html>
