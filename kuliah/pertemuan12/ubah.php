<?php
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>";
  } else {
    echo "data gagal diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required value="<?= $m['Nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="Nrp" required value="<?= $m['Nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="Email" required value="<?= $m['Email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="Jurusan" required value="<?= $m['Jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="Gambar" required value="<?= $m['Gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>