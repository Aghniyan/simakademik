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
function tampil_jurusan($id = null)
{
  $query = "SELECT * FROM jurusan";
  if ($id) {
    $query .= " WHERE id='$id' ";
  }
  return tampil($query);
}

function simpan_jurusan()
{
  $nama_jurusan = $_POST['nama'];
  $query = "INSERT INTO jurusan (nama_jurusan) VALUES ('$nama_jurusan')";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'jurusan');
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_jurusan()
{
  $id = $_POST['id'];
  $nama_jurusan = $_POST['nama'];
  $query = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan' WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'jurusan');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_jurusan($id)
{
  $query = "DELETE FROM jurusan WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
      header("Location:" . base_url() . 'jurusan');
  } else {
    echo mysqli_error(conn());
  }
}