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
    "Liverpool"=>"Mohammad Salah",
    "Juventus"=>"Cristiano Ronaldo",
    "Barcelona"=>"Lionel Messi",
    "Ac Milan"=>"Zlatan Ibrahimovic",
    "Paris Saint Germain"=>"Neymar Jr",
    "Real Madrid"=>"Luca Modric",
    "Liverpool"=>"Sadio Mane"
];
asort($pemainBola);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PemainBolaTerkenal</title>
</head>
<style>
    *{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }
    table tr td b{
        padding-right: 24px;
    }
    table tr td{
        padding-bottom: 5px;
    }
</style>
<body>
    <h2>Daftar pemain bola terkenal dan clubnya</h2>
    <table>
            <?php foreach ($pemainBola as $club => $pemain) : ?>
                <tr>
                    <td><b><?= $pemain; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>