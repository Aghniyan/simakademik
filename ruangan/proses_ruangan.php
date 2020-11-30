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
function tampil_ruangan($id = null)
{
  $query = "SELECT * FROM ruangan";
  if ($id) {
    $query .= " WHERE id='$id' ";
  }
  return tampil($query);
}

function simpan_ruangan()
{
  $keterangan = $_POST['keterangan'];
  $nama_ruangan = $_POST['nama'];
  $query = "INSERT INTO ruangan (nama_ruangan, keterangan) VALUES ('$nama_ruangan', '$keterangan')";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'ruangan');
  } else {
    echo mysqli_error(conn());
  }
}
function ubah_ruangan()
{
  $id = $_POST['id'];
  $keterangan = $_POST['keterangan'];
  $nama_ruangan = $_POST['nama'];
  $query = "UPDATE ruangan SET nama_ruangan = '$nama_ruangan' , keterangan = '$keterangan' WHERE id = '$id'; ";
  $result = mysqli_query(conn(), $query);
  if ($result) {
    header("Location:" . base_url() . 'ruangan');
  } else {
    echo mysqli_error(conn());
  }
}

function hapus_ruangan($id)
{
  $query = "DELETE FROM ruangan WHERE id = '$id'";
  $result = mysqli_query(conn(), $query);
  if ($result) {
      header("Location:" . base_url() . 'ruangan');
  } else {
    echo mysqli_error(conn());
  }
}
