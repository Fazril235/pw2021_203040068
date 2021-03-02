<?php
/*
Muhammad Fazril
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 1 - 3 Maret 2021
Struktur Kontrol
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
        h3{
            margin: 0px 5px 10px 0px;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 100%;
            background-color: salmon;
            display: inline-block;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <?php for ($i=1; $i<=3; $i++) : ?>
        <?php for ($x=1; $x<=$i; $x++) : ?>
            <h3><?= $i ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>