<?php
  Require('header.php');
  $biodata = mysqli_query($config, "SELECT mhs.nama_mhs,prodi.nama_ps,prodi.jurusan FROM mhs INNER JOIN prodi ON mhs.kode_ps = prodi.kode_ps");
  $proses = mysqli_num_rows($biodata);
  $data = mysqli_fetch_assoc($biodata);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Biodata</title>
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
                Biodata Mahasiswa
              </div>

              <form class="from-horizontal" action="#" method="post">
                <div class="form-group">
                  <label class="control-label col-sm" for="email">Nama</label>
                  <div class="col-sm">
                    <input type="text" readonly name="nama" class="form-control" value="<?php echo $data['nama_mhs']; ?> ">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="control-label col-sm" for="tmpt_lahir">Tempat lahir</label>
                  <div class="col-sm">
                    <input type="text" name="tempat_lahir" placeholder="tempat_lahir" class="form-control">
                    <!-- Dropbox/text -->
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="tgl_lahir">Tanggal lahir</label>
                  <div class="col-sm">
                    <input type="date" name="tanggal_lahir" value="tanggal_lahir" class="form-control">
                    <!-- Pop up Date -->
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="control-label col-sm" for="gender">Gender</label>
                  <div class="col-sm">
                    <label class="radio-inline"><input type="radio" name="gender" value="Laki-laki" >Laki-laki</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="Perempuan" >Perempuan</label>
                    <!-- Radio -->
                  </div>
                </div>

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

                <div class="form-group">
                  <label class="control-label col-sm" for="alamat">Alamat Tempat Tinggal</label>
                  <div class="col-sm">
                    <input type="text" name="alamat" placeholder="Alamat Tempat Tinggal" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="nama_orangtua">Nama Orang Tua / Wali</label>
                  <div class="col-sm">
                    <input type="text" name="nama_orangtua" placeholder="Nama Orang Tua/Wali" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="alamat_orangtua">Alamat Orang Tua / Wali</label>
                  <div class="col-sm">
                    <input type="text" name="alamat_orangtua" class="form-control" placeholder="Alamat Orang Tua / Wali" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="pekerjaan_orangtua">Pekerjaan Orang Tua / Wali</label>
                  <div class="col-sm">
                    <input type="text" name="pekerjaan_orangtua" placeholder="Pekerjaan Orang Tua / Wali" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="semester">Semester</label>
                  <div class="col-sm">
                    <select id="prodi" class="form-control">
                          <option selected>--Semseter--</option>
                          <option name="semester" value="1">1</option>
                          <option name="semester" value="2">2</option>
                          <option name="semester" value="3">3</option>
                          <option name="semester" value="4">4</option>
                          <option name="semester" value="5">5</option>
                          <option name="semester" value="6">6</option>
                          <option name="semester" value="7">7</option>
                          <option name="semester" value="8">8</option>
                          <option name="semester" value="9">9</option>
                          <option name="semester" value="10">10</option>
                          <option name="semester" value="11">11</option>
                          <option name="semester" value="12">12</option>
                          <option name="semester" value="13">13</option>
                          <option name="semester" value="14">14</option>
                          <option name="semester" value="15">15</option>
                          <option name="semester" value="16">16</option>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="ipk">IPK</label>
                  <div class="col-sm">
                    <input type="text" name="ipk" placeholder="IPK" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm" for="foto">Foto</label>
                  <div class="col-sm">
                    <input type="file" name="foto" class="form-control">
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