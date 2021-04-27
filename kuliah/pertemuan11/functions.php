<?php
/*
Muhammad Fazril
203040068
https://github.csom/Fazril235/pw2021_203040068
Pertemuan 10
*/
?>
<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);



  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "UPDATE mahasiswa SET
              Nama = '$nama',
              Nrp = '$nrp',
              Email = '$jurusan',
              Gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
              Nama LIKE '%$keyword%' OR 
              Nrp LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
