<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SITANUJI-<?php echo $_SESSION['username'] ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php?controller=home&action=homePegawai">Tambah Nasabah</a></li>
      <li><a href="index.php?controller=saldo&action=showAllSaldo">Tambah Saldo</a></li>
        <li><a href="index.php?controller=postPegawai&action=postPegawai">Postingan</a></li>
      <!-- <li><a href="?controller=pegawai&action=tampilAddPegawai">Tambah Data</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
    <div id="running">
      <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop;" onmousestart="this.start;" direction="left" bgcolor="#1abc9c">
      SITANUJI (SISTEM INFORMASI TABUNGAN UMROH DAN HAJI) Menyediakan Informasi Seputar Haji dan Umroh juga membuka jasa penyimpanan uang sehingga anda tidak perlu repot menyimpan uang yang berlebih. Apabila sudah mencapai angka tertentu, maka anda akan mendapat pilihan apakah ingin menunaikan ibadah umroh/haji dan langsung kami daftarkan sesuai permintaan anda. Bukan Hanya itu, anda bisa Memposting Kiriman Seputar Islami dan yang pastinya bermanfaat untuk kita Semua :))
      </marquee>
    </div>
</div>
