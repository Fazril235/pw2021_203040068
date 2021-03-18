<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 3
Array
Jumat 10.00 - 11.00
*/
?>
<?php 
$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DaftarPemainBola</title>
</head>
<body>
    <h2>Daftar pemain bola terkenal</h2>
    <ol>
        <?php foreach($pemainBola as $pemain) : ?>
            <li><?= $pemain ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
   
    array_push($pemainBola,"Luca Modric","Sadio Mane");
    
    sort($pemainBola);
    ?>

    <h2>Daftar pemain bola terkenal baru</h2>
    <ol>
        <?php foreach($pemainBola as $pemainBaru) : ?>
            <li><?= $pemainBaru ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>