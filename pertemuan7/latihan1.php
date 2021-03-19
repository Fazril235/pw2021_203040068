<?php
/*
Muhammad Fazril
203040068
https://github.csom/Fazril235/pw2021_203040068
Pertemuan 7 - 19 Maret 2021
Mempelajari GET & POST
*/
?>
<?php
$motor = [
    [
      "merk" => "Piagio",
      "tipe" => "vespa 946",
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
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Motor</h1>
    <ul>
    <?php foreach( $motor as $mtr ) : ?>
           
    <li>
		<a href="latihan2.php?merk=<?= $mtr["merk"]; ?>&tipe=<?= $mtr["tipe"]; ?>&transmisi=<?= $mtr["transmisi"]; ?>&warna=<?= $mtr["warna"]; ?>&gambar=<?= $mtr["gambar"]; ?>"><?= $mtr["merk"]; ?></a>
	</li>
        
    <?php endforeach; ?>
    </ul>
</body>
</html>
