<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_siswa.php');
include('../_templates/head.php');
$id = $_GET['id'];
$data = tampil_siswa($id);
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
            <h1 class="h3 mb-0 text-gray-800">Data Detail siswa </h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Detail siswa</li>
            </ol>
          </div>

            <a href="index.php" class="btn btn-sm btn-outline-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>
          <div class="row mb-3">
            <!-- Message From Customer-->
              <div class="col-xl-4 ">
  
                <div class="card mb-4 ">
                  <div class="card-body">
                    <table class="table align-items-center table-flush">
                      <tbody>
                        <tr>
                          <th>Username</th>
                          <td><?= $data[0]['username'] ?></td>
                        </tr>
                        <tr>
                          <th>Role</th>
                          <td><?= $data[0]['role'] ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <div class="col-xl-8 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-light"><?= $data[0]['nama_siswa'] ?></h3>
                </div>
                <div class="card-body">
                  <table class="table align-items-center table-flush">
                    <tbody>
                      <tr>
                        <th>NIS</th>
                        <td><?= $data[0]['nis'] ?></td>
                      </tr>
                      <tr>
                        <th>NISN</th>
                        <td><?= $data[0]['nisn'] ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td><?= tampil_jenis_kelamin($data[0]['jenis_kelamin']) ?></td>
                      </tr>
                      <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td><?= ttl($data[0]['tempat_lahir'], $data[0]['tanggal_lahir']) ?></td>
                      </tr>
                      <tr>
                        <th>Agama</th>
                        <td><?= $data[0]['agama'] ?></td>
                      </tr>
                      <tr>
                        <th>Nama Orang Tua</th>
                        <td><?= $data[0]['nama_orangtua'] ?></td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td><?= $data[0]['alamat'] ?></td>
                      </tr>
                      <tr>
                        <th>Status Aktif</th>
                        <td><?= ($data[0]['status_aktif']=='1')?'aktif':'non-aktif' ?></td>
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