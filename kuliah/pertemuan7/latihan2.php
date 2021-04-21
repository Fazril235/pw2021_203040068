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
// cek apakah tidak ada data di $_GET
if( !isset($_GET["merk"]) || 
    !isset($_GET["tipe"]) || 
    !isset($_GET["transmisi"]) || 
    !isset($_GET["warna"]) || 
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Detail Motor</title>
</head>
<body>
    
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["merk"]; ?></li>
        <li><?= $_GET["tipe"]; ?></li>
        <li><?= $_GET["transmisi"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke daftar motor</a>
</body>
</html>