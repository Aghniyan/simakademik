<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('proses_guru.php');
include('../_templates/head.php');
$id = $_GET['id'];
$guru = tampil_guru($id);
var_dump($guru);
if (isset($_POST['submit'])) {
  ubah_guru();
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
            <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
            </ol>
          </div>
          <a href="index.php" class="btn btn-sm btn-outline-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

          <div class="row mb-3">
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Guru</h6>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                    <div class="col-sm-9">
                      <input type="hidden" class="form-control form-control-sm" id="id" name="id" placeholder="id" value="<?=$id?>" >
                      <input type="text" class="form-control form-control-sm" id="nik" name="nik" placeholder="nik" value="<?=$guru[0]['nik']?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" value="<?=$guru[0]['nama_guru']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nuptk" class="col-sm-3 col-form-label">NUPTK</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nuptk" name="nuptk" placeholder="NUPTK" value="<?=$guru[0]['nuptk']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="jk" required id="select2Single" >
                        <option value="">Pilih Jenis Kelamin</option>
                        <option <?=($guru[0]['jenis_kelamin']=="P")?'selected':''?>  value="P">Perempuan</option>
                        <option <?=($guru[0]['jenis_kelamin']=="L")?'selected':''?>  value="L">Laki-Laki</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-9 row">
                      <div class="form-group col-4" id="simple-date1">
                        <input type="text" class="form-control form-control-sm" id="t_lahir" name="t_lahir" placeholder="Tempat Lahir" value="<?=$guru[0]['tempat_lahir']?>">
                      </div>
                      <div class="form-group col-8" id="simple-date1">
                        <div class="input-group date">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                          </div>
                          <input type="text" class="form-control form-control-sm" name="tgl_lahir" id="simpleDataInput" placeholder="dd/mm/yyyy" value="<?=date('d/m/Y',strtotime($guru[0]['tanggal_lahir']))?>">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nip" name="nip" placeholder="nip" value="<?=$guru[0]['nip']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status_kepegawaian" class="col-sm-3 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-9">
                      <select class=" form-control form-control-sm" name="status_kepegawaian" required>
                        <option value="">Pilih Status Kepegawaian</option>
                        <option <?=($guru[0]['status_kepegawaian']=="GTY/PTY")?'selected':''?> value="GTY/PTY">GTY/PTY</option>
                        <option <?=($guru[0]['status_kepegawaian']=="Guru Honor Sekolah")?'selected':''?> value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                        <option <?=($guru[0]['status_kepegawaian']=="Honor Daerah TK.II Kab/Kota")?'selected':''?> value="Honor Daerah TK.II Kab/Kota">Honor Daerah TK.II Kab/Kota</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_ptk" class="col-sm-3 col-form-label">Jenis PTK</label>
                    <div class="col-sm-9">
                      <select class=" form-control form-control-sm" name="jenis_ptk" required>
                        <option value="">Pilih Jenis PTK</option>
                        <option <?=($guru[0]['jenis_ptk']=="Guru Mapel")?'selected':''?> value="Guru Mapel">Guru Mapel</option>
                        <option <?=($guru[0]['jenis_ptk']=="Guru BK")?'selected':''?> value="Guru BK">Guru BK</option>
                        <option <?=($guru[0]['jenis_ptk']=="Kepala Sekolah")?'selected':''?> value="Kepala Sekolah">Kepala Sekolah</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                      <select class="select2-single form-control form-control-sm" name="agama" required id="select2Single">
                        <option value="">Pilih Agama</option>
                        <option <?=($guru[0]['agama']=="Islam")?'selected':''?> value="Islam">Islam</option>
                        <option <?=($guru[0]['agama']=="Kristen")?'selected':''?> value="Kristen">Kristen</option>
                        <option <?=($guru[0]['agama']=="Budha")?'selected':''?> value="Budha">Budha</option>
                        <option <?=($guru[0]['agama']=="Hindu")?'selected':''?> value="Hindu">Hindu</option>
                        <option <?=($guru[0]['agama']=="Konghucu")?'selected':''?> value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat" value="<?=$guru[0]['alamat']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_telp" class="col-sm-3 col-form-label">No Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="no_telp" name="no_telp" placeholder="no_telp" value="<?=$guru[0]['no_telp']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="email" value="<?=$guru[0]['email']?>">
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