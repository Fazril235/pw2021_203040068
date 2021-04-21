<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No. </th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nrp</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a>
          <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["Gambar"]; ?>" width="70"></td>
        <td><?= $row["Nrp"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>
</body>

</html>