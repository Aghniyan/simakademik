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
function tampil_kelas($id = null)
{
  $query = "SELECT kelas.id AS id_kelas ,kelas.* ,guru.*,jurusan.*,tahun_akademik.* FROM kelas JOIN guru ON guru.id=kelas.wali_kelas JOIN jurusan ON jurusan.id = kelas.id_jurusan 
  JOIN tahun_akademik ON tahun_akademik.id=kelas.id_tahun_akademik";
  if ($id) {
    $query .= " WHERE kelas.id='$id' ";
  }
  return tampil($query);
}

function simpan_kelas()
{
  $nama_kelas = $_POST['nama'];
  $jenjang = $_POST['jenjang'];
  $wali_kelas = $_POST['wali_kelas'];
  $jurusan = $_POST['jurusan'];
  $tahun_akademik = $_POST['tahun_akademik'];
  $query = "INSERT INTO kelas (nama_kelas, jenjang, wali_kelas, id_tahun_akademik, id_jurusan) VALUES ('$nama_kelas', '$jenjang', '$wali_kelas', '$tahun_akademik', '$jurusan'); ";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'kelas');
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_kelas()
{
  $id = $_POST['id'];
  $nama_kelas = $_POST['nama'];
  $jenjang = $_POST['jenjang'];
  $wali_kelas = $_POST['wali_kelas'];
  $jurusan = $_POST['jurusan'];
  $tahun_akademik = $_POST['tahun_akademik'];
  $query = "UPDATE kelas SET nama_kelas = '$nama_kelas' , jenjang = '$jenjang' , wali_kelas = '$wali_kelas' , id_tahun_akademik = '$tahun_akademik' , id_jurusan = '$jurusan' WHERE id = '$id'; ";

  $result = mysqli_query(conn(), $query);
  if ($result == true) {
    header("Location:" . base_url() . 'kelas');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_kelas($id)
{
  $query = "DELETE FROM kelas WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'kelas');
  } else {
    echo mysqli_error(conn());
  }
}
function tampil_wali_kelas()
{
  $query = "SELECT * FROM guru";
  return tampil($query);
}

function tampil_jurusan()
{
  $query = "SELECT * FROM jurusan";
  return tampil($query);
}

function tampil_tahun_akademik()
{
  $query = "SELECT * FROM tahun_akademik";
  return tampil($query);
}
