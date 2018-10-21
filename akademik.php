<?php
  Require('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Akademik</title>
  </head>
  <body>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div id="menu">
            <center>
              <?php
              Require('menu.php');
              ?>
            </center>
          </div>
        </div>

        <div class="col-md-6">
          <div id="content">
            <div class="container">
              <div class="alert alert-success" role="alert">
                Pengajuan Permohonan Layanan Akademik <img src="asset/image/akademik.png" width="5%" height="5%">
              </div>

              <fieldset>
                <legend>
                  Fakultas
                </legend>
                <ul>
                  <li><a href="form_ts_f.php">Form Bukti Pennyerahan TA/Skripsi</a></li>
                  <li><a href="form_skl_f.php">Form Surat Keterangan Lulus</a></li>
                  <li><a href="form_pw_f.php">Form Pendaftaran Wiisuda</a></li>
                </ul>
              </fieldset>

              <fieldset>
                <legend>
                  Jurusan
                </legend>
                <ul>
                  <li><a href="form_ts_j.php">Form Bukti Pennyerahan TA/Skripsi</a></li>
                  <li><a href="form_skl_j.php">Form Surat Keterangan Lulus</a></li>
                  <li><a href="form_pw_j.php">Form Pendaftaran Wiisuda</a></li>
                </ul>
              </fieldset> 
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div id="info">
            <div class="container">
              <?php Require('info.php'); ?>
              <hr>
              <?php Require('kalender.php'); ?>
            </div>
          </div>
        </div>
    </div>
        <div class="row">
        <div class="container-fluid footer">
          <hr>
          <div class="container">
            <?php
            Require('footer.php');
            ?>
          </div>
        </div>
    </div>
    </div>
  </body>
</html>