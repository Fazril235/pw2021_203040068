<?php
/*
Muhammad Fazril
203040068
https://github.csom/Fazril235/pw2021_203040068
Pertemuan 11
*/
?>
<?php
require 'functions.php';

// ambil dari URL
$id = $_GET['id'];
// query mahasiswa berdasakan id 
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['Gambar']; ?>"></li>
    <li>Nrp : <?= $m['Nrp']; ?></li>
    <li>Nama : <?= $m['Nama']; ?></li>
    <li>Email : <?= $m['Email']; ?></li>
    <li>Jurusan : <?= $m['Jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>