<?php
  Require('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Ganti Password</title>
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
                Edit Password
              </div>

              <form class="from-horizontal" action="#" method="post">
                <div class="form-group">
                  <label class="control-label col-sm" for="email">Password Baru</label>
                  <div class="col-sm">
                    <input type="Password" name="Password" placeholder="Password" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="email">Konfirmasi Password Baru</label>
                  <div class="col-sm">
                    <input type="Password" name="Password2" placeholder="Konfirmasi Password Baru" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form>
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