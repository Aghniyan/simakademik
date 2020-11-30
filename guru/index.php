<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_guru.php');
include('../_templates/head.php');
$data = tampil_guru();
// var_dump($data);die();
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
            <h1 class="h3 mb-0 text-gray-800">Guru</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Guru</li>
            </ol>
          </div>

          <div class="row mb-3">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header"><a href="tambah_guru.php" class="btn btn-sm btn-primary">Tambah</a></div>

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th>NAMA GURU</th>
                        <th>JENIS KELAMIN</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($data as $g) { ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><a href="<?=base_url().'guru/detail.php?id='.$g['id']?>"><?= $g['nik'] ?></a></td>
                          <td><a href="<?=base_url().'guru/detail.php?id='.$g['id']?>"><?= $g['nama_guru'] ?></a></td>
                          <td><?= $g['jenis_kelamin'] ?></td>
                          <td><?= $g['tempat_lahir'].', '.date('d-m-Y',strtotime($g['tanggal_lahir'])) ?></td>
                          <td>
                            <a href="<?=base_url().'guru/ubah_guru.php?id='.$g['id']?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="<?=base_url().'guru/hapus_guru.php?id='.$g['id']?>" class="btn btn-danger btn-sm">Hapus</a>
                          </td>
                        </tr>
                      <?php $no++;
                      } ?>
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
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>