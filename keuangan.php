<?php
  Require('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Keuangan</title>
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
                Pengajuan Permohonan Layanan Keuangan <img src="asset/image/uang.png" width="5%" height="5%">
              </div>

              <fieldset>
                <ul>
                  <li><a href="surat_keringan_ukt.php">Surat Permohonan Keringanan Membayar UKT</a></li>
                  <li><a href="surat_keterlambatan_ukt.php">Surat Permohonan Keterlambatan Pembayaran UKT</a></li>
                  <li><a href="surat_pembebasan_ukt.php">Surat Permohonan Pembebasan Pembayaran UKT</a></li>
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