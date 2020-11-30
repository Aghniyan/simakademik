<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_siswa.php');
include('../_templates/head.php');
if (isset($_POST['submit'])) {
  simpan_siswa();
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
            <h1 class="h3 mb-0 text-gray-800">Data siswa</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data siswa</li>
            </ol>
          </div>
          <a href="index.php" class="btn btn-sm btn-outline-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

          <div class="row mb-3">
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data siswa</h6>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nis" name="nis" placeholder="nis">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nisn" name="nisn" placeholder="nisn">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="jk" required id="select2Single">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-Laki</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-9 row">
                      <div class="form-group col-4" id="simple-date1">
                        <input type="text" class="form-control form-control-sm" id="t_lahir" name="t_lahir" placeholder="Tempat Lahir">
                      </div>
                      <div class="form-group col-8" id="simple-date1">
                        <div class="input-group date">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" name="tgl_lahir" id="simpleDataInput" placeholder="dd/mm/yyyy">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="agama" required id="select2Single">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_orangtua" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama_orangtua" name="nama_orangtua" placeholder="nama_orangtua">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="status" required id="select2Single">
                        <option value="">Pilih status</option>
                        <option value="1">Aktif</option>
                        <option value="0">Non Aktif</option>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="password" name="password" placeholder="password">
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