<?php
  $user = mysqli_query($config, "SELECT nama_mhs FROM mhs");
  $proses = mysqli_num_rows($user);
  $namauser = mysqli_fetch_assoc($user);
?>
<div class="container">
  <img src="asset/image/user.png" width="20%" height="20%"> <a href="biodata.php"><?php echo $namauser['nama_mhs'] ?></a>
    <hr>
    <a href="index.php"><button type="button" class="btn btn-primary">Beranda</button></a>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Layanan
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="akademik.php">Akademik</a></li>
        <li><a href="kemahasiswaan.php">Kemahasiswaan</a></li>
        <li><a href="keuangan.php">Keuangan</a></li>
      </ul>
    </div>
    <a href="ks.php"><button type="button" class="btn btn-primary">Krtik dan Saran</button></a>
    <a href="gp.php"><button type="button" class="btn btn-primary">Ganti Password</button></a>
    <a href="#"><button type="button" class="btn btn-primary">Logout</button></a>
</div>