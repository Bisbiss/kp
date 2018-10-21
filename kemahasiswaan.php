<?php
  Require('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kemahasiswaan</title>
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
                Pengajuan Permohonan Layanan Kemahasiswaan <img src="asset/image/form.png" width="5%" height="5%">
              </div>

              <fieldset>
                <ul>
                  <li><a href="form_beasiswa_f.php">Form Beasiswa Lengkap</a>
                  </li>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Beasiswa</th>
                        <th scope="col">Validasi Dosen PA</th>
                        <th scope="col">Validasi WD3</th>
                        <th scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Catatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="7"></td>
                      </tr>
                        <!-- Pakai Database
                        <?php
                        while($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['no']."</td>";
                        echo "<td>".$user_data['jenis_beasiswa']."</td>";
                        echo "<td>".$user_data['validasi_dosen']."</td>";
                        echo "<td>".$user_data['validasi_wd3']."</td>";
                        echo "<td>".$user_data['status']."</td>";
                        echo "<td>".$user_data['ket']."</td>";
                        echo "<td>".$user_data['catatan']."</td>";
                        echo "</tr>";
                        }
                        ?>
                        -->
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="7"><a href="permohonan beasiswa.php"><img src="asset/image/tambah.png" width="7%" height="7%" class="tombol"></a></td>
                      </tr>
                    </tfoot>

                  </table>
                  <li><a href="form_kml_f.php">Form Keterangan Masih Kuliah</a></li>
                  <li><a href="surat_tugas_f.php">Surat Tugas Mahasiswa</a></li>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Kegiatan</th>
                        <th scope="col"></th>
                        <th scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Lomba
                        </td>
                        <td>
                          <table>
                            <tr>
                              <td>
                                <button class="tbtn btn-primary" href="edit_surat_kegiatan.php">Edit</button>|<button class="tbtn btn-primary" href="ajukan_surat_kegiatan.php">Ajukan</button>
                              </td>
                            </tr>
                            <tr>
                              <td><center>
                                <button class="tbtn btn-primary" href="hapus_surat_kegiatan.php">Hapus</button>
                                </center>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td>
                          <p>DIsetujui</p>
                        </td>
                        <td>
                          <p>Mantab!!!!</p>
                        </td>
                        <td>
                          <button class="tbtn btn-primary" href="download_surat_kegiatan.php">Download</button>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="6"><a href="pengajuan surat tugas.php"><img src="asset/image/tambah.png" width="7%" height="7%" class="tombol"></a></td>
                      </tr>
                    </tfoot>

                  </table>
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