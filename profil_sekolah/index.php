<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_profil_sekolah.php');
include('../_templates/head.php');
$data = tampil_profil_sekolah();
if (isset($_POST['submit'])) {
  // ubah_foto();
  var_dump($_FILES);die();
}
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
            <h1 class="h3 mb-0 text-gray-800">Profil Sekolah</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil Sekolah</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Message From Customer-->
            <div class="col-xl-4 ">
              <div class="card">
                <div class="card-body">
                  <h5>Logo Sekolah</h5>
                  <img src="<?= base_url() ?>assets/img/logo/<?= $data[0]['logo'] ?>" width="100%" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-8 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-light"><?= $data[0]['nama_sekolah'] ?></h3>
                  <div class="text-right">
                    <a href="ubah.php" class="btn btn-warning mb-1 btn-sm "><i class="fa fa-edit"></i> Ubah Profil Sekolah</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table align-items-center table-flush">
                    <tbody>
                      <tr>
                        <th>Alamat</th>
                        <td><?= $data[0]['alamat'] ?></td>
                      </tr>
                      <tr>
                        <th>Kecamatan</th>
                        <td><?= $data[0]['kecamatan'] ?></td>
                      </tr>
                      <tr>
                        <th>Kabupaten / Kota</th>
                        <td><?= $data[0]['kota'] ?></td>
                      </tr>
                      <tr>
                        <th>Provinsi</th>
                        <td><?= $data[0]['provinsi'] ?></td>
                      </tr>
                      <tr>
                        <th>No Telp</th>
                        <td><?= $data[0]['no_telp'] ?></td>
                      </tr>
                      <tr>
                        <th>Kode POS</th>
                        <td><?= $data[0]['kode_pos'] ?></td>
                      </tr>
                      <tr>
                        <th>Status Akreditasi</th>
                        <td><?= $data[0]['status_akreditasi'] ?></td>
                      </tr>
                    </tbody>
                  </table>
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
  <!-- Scroll to top -->
  <?php include('../_templates/js.php'); ?>
</body>

</html>