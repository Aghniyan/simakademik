<?php
require_once('../connection.php');
function tampil($query)
{
  $result = mysqli_query(conn(), $query);
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
  return $data;
}
function tampil_profil()
{
  $id_user = $_SESSION['id'];
  $level = $_SESSION['role'];
  $query="";
  switch ($level) {
    case 'Kepala TU' or 'Kepala Sekolah' or 'Guru' or 'Wali Kelas':
      $query = "SELECT * FROM guru WHERE id_user='$id_user'";
      break;
    case 'Siswa':
      $query = "SELECT * FROM siswa WHERE id_user='$id_user'";
      break;
    default:
      # code...
      break;
  }
  return tampil($query);
}
function ganti_password()
{
  $plama = $_POST['password_lama'];
  $pbaru = $_POST['password_baru'];
  $pkonfirmasi = $_POST['konfirmasi_password'];

  if ($pbaru == $pkonfirmasi) {
  }
}

function ubah_profil()
{
}

function ubah_foto()
{
}
