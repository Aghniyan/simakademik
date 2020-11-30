<?php
require_once('../connection.php');

function tampil_profil_sekolah()
{
  $query = "SELECT * FROM profil_sekolah";
  $result = mysqli_query(conn(), $query);
  $data = array();
  if (mysqli_num_rows($result) <= 0) {
    return 0;
  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    return $data;
  }
}

function ubah_profil_sekolah()
{

  $nama_sekolah = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $provinsi = $_POST['provinsi'];
  $kota = $_POST['kota'];
  $kecamatan = $_POST['kecamatan'];
  $no_telp = $_POST['no_telp'];
  $kode_pos = $_POST['kode_pos'];
  $status_akreditasi = $_POST['status'];
  $logo = $_FILES['logo'];
  $query = "";
  if (empty($logo['name'])) {
    $query = "UPDATE profil_sekolah SET nama_sekolah='$nama_sekolah', alamat = '$alamat', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', no_telp='$no_telp', kode_pos='$kode_pos', status_akreditasi='$status_akreditasi'";
  } else {
      $logo_name = $_FILES['logo']['name'];
      $namaSementara = $_FILES['logo']['tmp_name'];
      // tentukan lokasi file akan dipindahkan
      $dirUpload = "../assets/img/logo/";
      // pindahkan file
      $terupload = move_uploaded_file($namaSementara, $dirUpload . $logo_name);
      $query = "UPDATE profil_sekolah SET nama_sekolah='$nama_sekolah', alamat = '$alamat', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', no_telp='$no_telp', kode_pos='$kode_pos', status_akreditasi='$status_akreditasi', logo='$logo_name'";
  }
  $result = mysqli_query(conn(), $query);
  // var_dump($query);die();
  if ($result == true) {
    header("Location:" . base_url() . 'profil_sekolah');
  } else {
    var_dump(mysqli_error(conn()));die();
  }
}
