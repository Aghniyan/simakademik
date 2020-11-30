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
function tampil_mata_pelajaran($id = null)
{
  $query = "SELECT * FROM mata_pelajaran";
  if ($id) {
    $query .= " WHERE id='$id' ";
  }
  return tampil($query);
}

function simpan_mata_pelajaran()
{
  $nama_mata_pelajaran = $_POST['nama'];
  $query = "INSERT INTO mata_pelajaran (nama_mapel) VALUES ('$nama_mata_pelajaran')";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'mata_pelajaran');
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_mata_pelajaran()
{
  $id = $_POST['id'];
  $nama_mata_pelajaran = $_POST['nama'];
  $query = "UPDATE mata_pelajaran SET nama_mapel = '$nama_mata_pelajaran' WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'mata_pelajaran');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_mata_pelajaran($id)
{
  $query = "DELETE FROM mata_pelajaran WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
      header("Location:" . base_url() . 'mata_pelajaran');
  } else {
    echo mysqli_error(conn());
  }
}