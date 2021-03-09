<?php
/*
Muhammad Fazril
203040068
https://github.csom/Fazril235/pw2021_203040068
Pertemuan 6 - 09 Maret 2021
Mempelajari array
*/
?>
<?php 
// $mahasiswa = [
//     ["Muhammad Fazril", "203040068", "arielff54@gmail.com", "Teknik Informatika"],
//     ["Alia Azzahra", "203030023", "aliaazzahra@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Muhammad Fazril",
    "nrp" => "203040068",
    "email" => "arielff54@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "pic1.jpg"
  ],
  [
    "nama" => "Alia Azzahra",
    "nrp" => "20304050",
    "email" => "aliaazzahra@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "pic2.jpg"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach( $mahasiswa as $mhs ) : ?>
    
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>">
        </li>

        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

    </ul>
    <?php endforeach; ?>

</body>
</html>