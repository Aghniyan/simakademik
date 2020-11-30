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
function tampil_siswa($id = null)
{
  $query = "SELECT * FROM siswa";
  if ($id) {
    $query .= " JOIN users ON siswa.id_user = users.id WHERE siswa.id='$id' ";
  }
  return tampil($query);
}

function simpan_siswa()
{
  $nis = $_POST['nis'];
  $nama_siswa = $_POST['nama'];
  $nisn = $_POST['nisn'];
  $jenis_kelamin = $_POST['jk'];
  $tempat_lahir = $_POST['t_lahir'];
  $tanggal_lahir = date('Y-d-m', strtotime($_POST['tgl_lahir']));
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $nama_orangtua = $_POST['nama_orangtua'];
  $status_aktif = $_POST['status'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = 'siswa';
  $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$level');";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    $id_user = user_terakhir()[0]['id'];
    $query = "INSERT INTO siswa (nis, nisn, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, nama_orangtua, alamat, status_aktif, id_user) 
              VALUES ('$nis', '$nisn', '$nama_siswa', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$nama_orangtua', '$alamat', '$status_aktif', '$id_user')";
    $result = mysqli_query(conn(), $query);
    // var_dump($query);die();
    if ($result == true) {
      header("Location:" . base_url() . 'siswa');
    } else {
      echo mysqli_error(conn());
    }
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_siswa()
{
  $id = $_POST['id'];
  $nis = $_POST['nis'];
  $nama_siswa = $_POST['nama'];
  $nisn = $_POST['nisn'];
  $jenis_kelamin = $_POST['jk'];
  $tempat_lahir = $_POST['t_lahir'];
  $tanggal_lahir = date('Y-d-m', strtotime($_POST['tgl_lahir']));
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $nama_orangtua = $_POST['nama_orangtua'];
  $status_aktif = $_POST['status'];
  $query = "UPDATE siswa SET nis = '$nis' , nisn = '$nisn' , nama_siswa = '$nama_siswa' , jenis_kelamin = '$jenis_kelamin' , tempat_lahir = '$tempat_lahir' , 
  tanggal_lahir = '$tanggal_lahir' , agama = '$agama' , nama_orangtua = '$nama_orangtua' , alamat = '$alamat' , status_aktif = '$status_aktif' WHERE id = '$id'";
  var_dump($query);die();
  $result = mysqli_query(conn(), $query);
  if ($result == true) {
    header("Location:" . base_url() . 'siswa');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_siswa($id)
{
  $id_user = tampil_siswa($id)[0]['id_user'];
  $query = "DELETE FROM siswa WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    $query = "DELETE FROM users WHERE id = '$id_user'";
    $result = mysqli_query(conn(), $query);
    if ($result == true) {
      header("Location:" . base_url() . 'siswa');
    } else {
      echo mysqli_error(conn());
    }
  } else {
    echo mysqli_error(conn());
  }
}
function tampil_jenis_kelamin($jk)
{
  if ($jk == "P") {
    return "Perempuan";
  } else if ($jk == "L") {
    return "Laki-Laki";
  } else {
    return "Lainnya";
  }
}

function ttl($tempat, $tgl)
{
  return $tempat . ', ' . date('d-m-Y', strtotime($tgl));
}

function tampil_akun($user_id)
{
  $query = "SELECT * FROM users WHERE id = '$user_id'";
  return tampil($query);
}

function user_terakhir()
{
  $query = "SELECT * FROM users ORDER BY id DESC limit 1";
  return tampil($query);
}
