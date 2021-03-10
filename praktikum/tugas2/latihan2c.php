<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 2 - 5 Maret 2021
Function
Jumat 10.00 - 11.00
*/
?>
<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bola\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
    .bola{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        text-align: center;
        line-height: 50px;
        margin: 5px 5px 0 0;
        background-color: salmon;
        border: 1px solid black;
        display: inline-block;
    }
    </style>
</head>
<body>
    <?php tumpukanBola(5); ?>
</body>
</html>