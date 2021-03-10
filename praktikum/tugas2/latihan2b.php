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
    $jawabanIsset = "Isset adalah = Function yang digunakan untuk menentukan apakah suatu variabel telah di set dan tidak NULL<br><br>";
    $jawabanEmpty = "Empty adalah = Function yang digunakan untuk menentukan apakah suatu variabel kosong atau tidak";
    //Sumber : https://www.virendrachandak.com/techtalk/php-isset-vs-empty-vs-is_null/

    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Latihan2b</title>
    <style>
    .style{
        border: 1px solid black;
        padding: 8px;
        font-size: 22px;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
    
</body>
</html>