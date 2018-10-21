<?php
  Require('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Beranda</title>
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
                Beranda
              </div>
              <center>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/image/unila.png" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="asset/image/user.png"  >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="asset/image/kegiatan.jpg">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </center>
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