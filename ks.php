<?php
  Require('header.php');
    $biodata = mysqli_query($config, "SELECT mhs.nama_mhs,prodi.nama_ps,prodi.jurusan FROM mhs INNER JOIN prodi ON mhs.kode_ps = prodi.kode_ps");
  $proses = mysqli_num_rows($biodata);
  $data = mysqli_fetch_assoc($biodata);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kritik dan Saran</title>
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
                Kritik & Saran
              </div>
                <form class="from-horizontal" action="#" method="post">
                <div class="form-group">
                  <label class="control-label col-sm" for="jurusan">Jurusan</label>
                  <div class="col-sm">
                    <input type="text" class="form-control" readonly value="<?php echo $data['jurusan']; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="prodi">Prodi</label>
                      <div class="col-sm">
                        <input type="text" class="form-control" readonly value="<?php echo $data['nama_ps']; ?> ">
                      </div>
                </div>

                  <label class="control-label col-sm" for="ks">Kritik / Saran</label>
                    <div class="col-sm">
                      <textarea class="form-control" id="ks" rows="3"></textarea>
                    </div>

                  <div class="col-sm">
                  <button type="button" class="btn btn-primary">Submit</button>
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