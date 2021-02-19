<?php
/*
Muhammad Fazril
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 3 - 19 Februari 2021
Mempelajari mengenai struktur kendali php
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 0 ) : ?>
        <tr class="warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?><?/td>
            <?php endfor ?>
        </tr>
    <?php endfor; ?>  
</table>
</body>
</html>