<?php
session_start();
include('../connection.php');
if (!isset($_SESSION['role'])) {
  header('Location:' . base_url());
} else {
  switch ($_SESSION['role']) {
    case 'Kepala TU':
      include('index_kepala_tu.php');
      break;
    case 'Kepala Sekolah':
      include('index_kepala_sekolah.php');
      break;
    case 'Guru':
      include('index_guru.php');
      break;
    case 'Wali Kelas':
      include('index_wali_kelas.php');
      break;
    case 'Siswa':
      include('index_siswa.php');
      break;

    default:
      header('Location:' . base_url());
      break;
  }
}
