<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('../connection.php');
include('../_templates/head.php'); ?>

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
            <div class="card mb-4 col-lg-12">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-9 ">
                      <div class="row">
                        
                      <div class="col-sm-3 align-middle" >
                        <select class="select2-single-placeholder form-control form-control-sm" name="state" id="select2SinglePlaceholder">
                          <option value="">Select</option>
                          <option value="Aceh">Aceh</option>
                          <option value="Sumatra Utara">Sumatra Utara</option>
                          <option value="Sumatra Barat">Sumatra Barat</option>
                          <option value="Riau">Riau</option>
                          <option value="Kepulauan Riau">Kepulauan Riau</option>
                          <option value="Jambi">Jambi</option>
                          <option value="Bengkulu">Bengkulu</option>
                          <option value="Sumatra Selatan">Sumatra Selatan</option>
                          <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                          <option value="Lampung">Lampung</option>
                          <option value="Banten">Banten</option>
                          <option value="Jawa Barat">Jawa Barat</option>
                          <option value="Jakarta">Jakarta</option>
                          <option value="Jawa Tengah">Jawa Tengah</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Jawa TImur">Jawa Timur</option>
                          <option value="Bali">Bali</option>
                          <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                          <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                          <option value="Kalimantan Barat">Kalimantan Barat</option>
                          <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                          <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                          <option value="Kalimantan Timur">Kalimantan Timur</option>
                          <option value="Kalimantan Utara">Kalimantan Utara</option>
                          <option value="Gorontalo">Gorontalo</option>
                          <option value="Sulawaesi Barat">Sulawesi Barat</option>
                          <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                          <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                          <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                          <option value="Sulawesi Utara">Sulawesi Utara</option>
                          <option value="Maluku">Maluku</option>
                          <option value="Maluku Utara">Maluku Utara</option>
                          <option value="Papua Barat">Papua Barat</option>
                          <option value="Papua">Papua</option>
                        </select>
                      </div>
                      <div class="col-sm-9">
                        <input type="date" class="form-control form-control-sm" id="ttl" name="ttl" placeholder="Tanggal Lahir">
                      </div>
                      
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="jk" name="jk" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                      <div class="col-sm-9">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">First Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Second Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="radioDisabled" id="customRadioDisabled1" class="custom-control-input" disabled="">
                          <label class="custom-control-label" for="customRadioDisabled1">Third Radio Disabled</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <div class="form-group row">
                    <div class="col-sm-3">Checkbox</div>
                    <div class="col-sm-9">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Sign in</button>
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