<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_profil.php');
include('../_templates/head.php');
$data = tampil_profil();
?>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('../_templates/sidebar.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('../_templates/navbar.php'); ?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
          </div>

          <div class="row mb-3">
            <div class="col-xl-12 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light"><?=$data[0]['nama_guru']?></h6>
                  <div class="text-right">
                    <a href="ubah.php?id=" class="btn btn-warning mb-1 btn-sm " ><i class="fa fa-edit"></i> Ubah Profil</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table align-items-center table-flush">
                    <tbody>
                      <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td><?=$data[0]['tempat_lahir'].', '.$data[0]['tanggal_lahir']?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?=$data[0]['jenis_kelamin']?></td>
                      </tr>
                      <tr>
                        <th>Agama</th>
                        <td><?=$data[0]['agama']?></td>
                      </tr>
                      <tr>
                        <th>NIK</th>
                        <td><?=$data[0]['nik']?></td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td><?=$data[0]['alamat']?></td>
                      </tr>
                      <tr>
                        <th>No HP / Telp</th>
                        <td><?=$data[0]['no_telp']?></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?=$data[0]['email']?></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="text-center">
                    <a class="font-weight-bold " href="javascript:void(0);" data-toggle="modal" data-target="#passwordModal">
                      Ganti Password
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include('../_templates/footer.php'); ?>
      <!-- Footer -->
    </div>
  </div>
  <?php if (isset($_POST['ubah_password'])) {
    // ubah_password();
    var_dump($_POST);
  } ?>
  <!-- Modal Ubah Password -->
  <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelPassword" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="POST" action="">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelPassword">Ubah Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Password Lama</label>
              <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Password Lama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Password Baru">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
              <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password Baru">
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" class="form-control" id="id" name="id" placeholder="id" value="<?= $_SESSION['id'] ?>">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="ubah_password" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Scroll to top -->
  <?php include('../_templates/js.php'); ?>
  <script>
    $('#ubah_foto').hide();
    $('#btn_ubah_foto').change(function() {
      $('#ubah_foto').show();
      $('#btn_ubah_foto').hide();
    });
  </script>
</body>

</html>