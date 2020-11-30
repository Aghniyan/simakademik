<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_profil_sekolah.php');
include('../_templates/head.php');
$data = tampil_profil_sekolah();
if (isset($_POST['submit'])) {
  ubah_profil_sekolah();
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
          <a href="index.php" class="btn btn-sm btn-outline-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

          <div class="row mb-3">
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Profil Sekolah</h6>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Name" value="<?= $data[0]['nama_sekolah'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat" value="<?= $data[0]['alamat'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="kecamatan" name="kecamatan" placeholder="kecamatan" value="<?= $data[0]['kecamatan'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kota" class="col-sm-3 col-form-label">Kota</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="kota" name="kota" placeholder="kota" value="<?= $data[0]['kota'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="provinsi" name="provinsi" placeholder="provinsi" value="<?= $data[0]['provinsi'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_pos" class="col-sm-3 col-form-label">Kode POS</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="kode_pos" name="kode_pos" placeholder="kode_pos" value="<?= $data[0]['kode_pos'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_telp" class="col-sm-3 col-form-label">No Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="no_telp" name="no_telp" placeholder="no_telp" value="<?= $data[0]['no_telp'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="logo" class="col-sm-3 col-form-label">Logo Sekolah</label>
                    <div class="col-sm-9">
                        <input type="file" name="logo" class="form-control" id="">
                        <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status Akreditasi</label>
                    <div class="col-sm-9 ">
                      <select class="select2-single-placeholder form-control form-control-sm" name="status" required id="select2SinglePlaceholder">
                        <option value="">Pilih Status Akreditasi</option>
                        <option <?=($data[0]['status_akreditasi']=="belum terakreditasi")?'selected':''?> value="belum terakreditasi">Belum Terakreditasi</option>
                        <option <?=($data[0]['status_akreditasi']=="A")?'selected':''?> value="A">A</option>
                        <option <?=($data[0]['status_akreditasi']=="B")?'selected':''?> value="B">B</option>
                        <option <?=($data[0]['status_akreditasi']=="C")?'selected':''?> value="C">C</option>
                        <option <?=($data[0]['status_akreditasi']=="D")?'selected':''?> value="D">D</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
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