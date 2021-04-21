<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 5
Jumat 10.00 - 11.00
*/
?>
<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("location : ../index.php");
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
    <title>MotoRil</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/detail.css" class="href">
</head>
<body>

<body>
<h3><img src="../assets/img/motoril.PNG" alt=""></h3>
<div class="img">
            <img src="../assets/img/<?= $otomotif["img"]; ?>" alt="">
        </div>
<div class="detail">
    <form>
    <div class="keterangan">
        <p><?= $otomotif["merk"]; ?></p>
        <p><?= $otomotif["tipe"]; ?></p>
        <p><?= $otomotif["harga"]; ?></p>
        <p><?= $otomotif["warna"]; ?></p>
    </div>
    <h4><a href="../index.php">Back</a></h4>
    </div>
</div>
</form>    
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
</body>
</html>
