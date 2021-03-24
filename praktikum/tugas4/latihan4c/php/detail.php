<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $otomotif = query ("SELECT * FROM otomotif WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ril-Otomotif</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="../assets/img/<?= $otomotif["img"]; ?>" alt="">
        </div>
    <div class="keterangan">
        <p><?= $otomotif["merk"]; ?></p>
        <p><?= $otomotif["tipe"]; ?></p>
        <p><?= $otomotif["transmisi"]; ?></p>
        <p><?= $otomotif["warna"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>