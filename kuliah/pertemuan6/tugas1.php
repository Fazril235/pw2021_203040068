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
$motor = [
  [
    "merk" => "Vespa",
    "tipe" => "946",
    "transmisi" => "matic",
    "warna" => "putih",
    "gambar" => "vespa946.jpg"
  ],
  [
    "merk" => "Kawasaki",
    "tipe" => "H2R",
    "transmisi" => "kopling",
    "warna" => "hitam",
    "gambar" => "motor1.1.jpg"
  ],
  [
    "merk" => "Ducati",
    "tipe" => "Panigale",
    "transmisi" => "kopling",
    "warna" => "merah",
    "gambar" => "motor2.1.jpg"
  ],
  [
    "merk" => "BMW",
    "tipe" => "HP4 Race",
    "transmisi" => "kopling",
    "warna" => "hitam",
    "gambar" => "motor3.1.jpg"
  ],
  [
    "merk" => "Harley-Davidson",
    "tipe" => "CVO Limited",
    "transmisi" => "kopling",
    "warna" => "hitam",
    "gambar" => "motor4.jpg"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Motor</title>
</head>
<body>
    <h1>Motor</h1>
    
    <?php foreach( $motor as $mtr ) : ?>
    
    <ul>
        <li>
            <img src="img/<?= $mtr["gambar"];?>">
        </li>

        <li>Merk : <?= $mtr["merk"]; ?></li>
        <li>Tipe : <?= $mtr["tipe"]; ?></li>
        <li>Transmisi : <?= $mtr["transmisi"]; ?></li>
        <li>Warna : <?= $mtr["warna"]; ?></li>

    </ul>
    <?php endforeach; ?>

</body>
</html>