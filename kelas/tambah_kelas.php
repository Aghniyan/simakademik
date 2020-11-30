<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_kelas.php');
include('../_templates/head.php');
$wali_kelas = tampil_wali_kelas();
$jurusan = tampil_jurusan();
$tahun_akademik = tampil_tahun_akademik();
if (isset($_POST['submit'])) {
  simpan_kelas();
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
            <h1 class="h3 mb-0 text-gray-800">Data kelas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data kelas</li>
            </ol>
          </div>
          <a href="index.php" class="btn btn-sm btn-outline-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

          <div class="row mb-3">
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data kelas</h6>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Kelas</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Kelas">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenjang" class="col-sm-3 col-form-label">Jenjang</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="jenjang" required id="select2Single">
                        <option value="">Pilih Jenjang</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="wali_kelas" class="col-sm-3 col-form-label">Wali Kelas</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="wali_kelas" required id="select2Single">
                        <option value="">Pilih wali_kelas</option>
                        <?php foreach ($wali_kelas as $wk) { ?>
                          <option value="<?=$wk['id']?>"><?=$wk['nama_guru']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jurusan" class="col-sm-3 col-form-label">jurusan</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="jurusan" required id="select2Single">
                        <option value="">Pilih jurusan</option>
                        <?php foreach ($jurusan as $j) { ?>
                          <option value="<?=$j['id']?>"><?=$j['nama_jurusan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_akademik" class="col-sm-3 col-form-label">Tahun Akademik</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="tahun_akademik" required id="select2Single">
                        <option value="">Pilih Tahun Akademik</option>
                        <?php foreach ($tahun_akademik as $ta) { ?>
                          <option value="<?=$ta['id']?>"><?=$ta['tahun_mulai'].'/'.$ta['tahun_selesai']?></option>
                        <?php } ?>
                      </select>
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