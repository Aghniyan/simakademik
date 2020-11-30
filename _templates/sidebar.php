
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
    <a class="nav-link" href="<?=base_url().'profil'?>" role="button" aria-haspopup="true" >
      <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/boy.png" style="max-width: 60px">
      <span class="ml-2 d-none d-lg-inline  small"><?= $_SESSION['role'] ?></span>
    </a>
  </li>
  <!-- <hr class="sidebar-divider"> -->
  <li class="nav-item active">
    <a class="nav-link" href="<?=base_url()?>">
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