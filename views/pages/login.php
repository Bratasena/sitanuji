<?php require_once('views/awal.php'); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SITANUJI</title>
<body>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="resources/w1.jpg" alt="quote">
      <div class="carousel-caption">
        <h3>Silahkan Login</h3>
        <p>Belum punya Akun? daftar Sekarang Juga</p>
      </div>
    </div>

    <div class="item">
      <img src="resources/mutiara.jpg" alt="quote2">
      <div class="carousel-caption">
        <h3>Posting Seputar Hal-hal Islami</h3>
        <p>Stay Positive</p>
      </div>
    </div>

    <div class="item">
      <img src="resources/w2.jpg" alt="quote3">
      <div class="carousel-caption">
        <h3>Gunakan Fitur Kami</h3>
        <p>Menabung untuk Haji di Kemudian Hari</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<center>
  <div class="wrapper">
  <!-- <div class="transparan2"> -->
  <div class="container">
  &copy; Bratasena Anggabayu 2017 </b>
  <h1>SITANUJI</h1>
  <h2>--------------------------------------------------------------
    <br>Sistem Informasi TAbuNgan Umroh dan haJI<br>
    --------------------------------------------------------------</h2>


    <form class="form" action="?controller=login&action=authentication" method="post">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="password">


      <button type="submit" id="login-button">Login
      </button>
      <!-- </a> -->



    </form>
  <!-- </div> -->
  </div>

  <ul class="bg-bubbles">
    <li></
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>

</center>



  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

    <!-- <script  src="js/index.js"></script> -->
</body>
<!-- <link rel="stylesheet" href="resources/css/sangar.css"> -->
<!-- <link rel="stylesheet" href="resources/js/calm.js"> -->
<link rel="stylesheet" href="resources/css/hehe.css">
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.min.js"></script>

</html>
