
<!-- SIDE BAR -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="<?= base_url() ?>assets/img/logo/yatindo2.png">
    </div>
    <div class="sidebar-brand-text mx-3">SIM Akademik</div>
  </a>
  
  <hr class="sidebar-divider my-0">
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/boy.png" style="max-width: 60px">
      <span class="ml-2 d-none d-lg-inline  small"><?= $_SESSION['role'] ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="<?= base_url() . 'profil' ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>
  <!-- <hr class="sidebar-divider"> -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <?php
  switch ($_SESSION['role']) {
    case 'Kepala TU':
      include "sidebar_tu.php";
    break;
    case 'Kepala Sekolah':
      include "sidebar_kepsek.php";
    break;
    case 'Guru':
      include "sidebar_guru.php";
    break;
    case 'Wali Kelas':
      include "sidebar_walikelas.php";
    break;
    case 'Siswa':
      include "sidebar_siswa.php";
      break;

    default:
      # code...
      break;
  }
  ?>


  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>