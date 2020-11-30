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
function tampil_guru($id = null)
{
  $query = "SELECT * FROM guru";
  if ($id) {
    $query .= " JOIN users ON guru.id_user = users.id WHERE guru.id='$id' ";
  }
  return tampil($query);
}

function simpan_guru()
{
  $nik = $_POST['nik'];
  $nama_guru = $_POST['nama'];
  $nuptk = $_POST['nuptk'];
  $jenis_kelamin = $_POST['jk'];
  $tempat_lahir = $_POST['t_lahir'];
  $tanggal_lahir = date('Y-m-d', strtotime($_POST['tgl_lahir']));
  $nip = $_POST['nip'];
  $status_kepegawaian = $_POST['status_kepegawaian'];
  $jenis_ptk = $_POST['jenis_ptk'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = 'Guru';
  $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$level');";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    $id_user = user_terakhir()[0]['id'];
    $query = "INSERT INTO guru (nik, nama_guru, nuptk, jenis_kelamin, tempat_lahir, tanggal_lahir, nip, status_kepegawaian, jenis_ptk, agama, alamat, no_telp, email, id_user) 
              VALUES ('$nik', '$nama_guru', '$nuptk', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$nip', '$status_kepegawaian', '$jenis_ptk', '$agama', '$alamat', '$no_telp', '$email', '$id_user')";
    $result = mysqli_query(conn(), $query);
    // var_dump($query);die();
    if ($result == true) {
      header("Location:" . base_url() . 'guru');
    } else {
      echo mysqli_error(conn());
    }
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_guru()
{
  $id = $_POST['id'];
  $nik = $_POST['nik'];
  $nama_guru = $_POST['nama'];
  $nuptk = $_POST['nuptk'];
  $jenis_kelamin = $_POST['jk'];
  $tempat_lahir = $_POST['t_lahir'];
  $tanggal_lahir = date('y-m-d', strtotime($_POST['tgl_lahir']));
  $nip = $_POST['nip'];
  $status_kepegawaian = $_POST['status_kepegawaian'];
  $jenis_ptk = $_POST['jenis_ptk'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $query = "UPDATE guru SET nik = '$nik' , nama_guru = '$nama_guru' , nuptk = '$nuptk' , jenis_kelamin = '$jenis_kelamin' , tempat_lahir = '$tempat_lahir' , tanggal_lahir = '$tanggal_lahir' , 
            nip = '$nip' , status_kepegawaian = '$status_kepegawaian' , jenis_ptk = '$jenis_ptk' , agama = '$agama' , alamat = '$alamat' , no_telp = '$no_telp' , email = '$email' WHERE id = '$id' ";
  // var_dump($query);die();
  $result = mysqli_query(conn(), $query);
  if ($result == true) {
    header("Location:" . base_url() . 'guru');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_guru($id)
{
  $id_user = tampil_guru($id)[0]['id_user'];
  $query = "DELETE FROM guru WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    $query = "DELETE FROM users WHERE id = '$id_user'";
    $result = mysqli_query(conn(), $query);
    if ($result == true) {
      header("Location:" . base_url() . 'guru');
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
