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
    function hitungDeterminan($bilanganA, $bilanganB, $bilanganC, $bilanganD){
    $hasil = ($bilanganA * $bilanganD) - ($bilanganB * $bilanganC);

        echo "<table style='border-left:2px solid black; border-right: 2px solid black; font-size:23px;' cellspacing='5' cellpadding='6'>
                <tr>
                    <td>$bilanganA</td>
                    <td>$bilanganB</td>
                </tr>
                <tr>
                    <td>$bilanganC</td>
                    <td>$bilanganD</td>
                </tr>
              </table><br>";
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan2d</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4); ?>
</body>
</html>