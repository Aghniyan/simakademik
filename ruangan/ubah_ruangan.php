<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_ruangan.php');
include('../_templates/head.php');
$id = $_GET['id'];
$ruangan = tampil_ruangan($id);
// var_dump($ruangan);
if (isset($_POST['submit'])) {
  ubah_ruangan();
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
            <h1 class="h3 mb-0 text-gray-800">Data Ruangan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Ruangan</li>
            </ol>
          </div>

          <div class="row mb-3">
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Ruangan</h6>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Ruangan</label>
                    <div class="col-sm-9">
                      <input type="hidden" class="form-control form-control-sm" id="id" name="id" placeholder="id" value="<?=$ruangan[0]['id']?>">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Ruangan" value="<?=$ruangan[0]['nama_ruangan']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="keterangan" name="keterangan" placeholder="keterangan" value="<?=$ruangan[0]['keterangan']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                  </div>
              </div>
            </div>
            </form>
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