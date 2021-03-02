<?php
/*
Muhammad Fazril
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 1 - 26 Februari 2021
Struktur Kontrol
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
           <!-- Tambahkan baris kode php untuk menampilkan bagian body table -->
       <tr>
        <th>Kolom 1</th>
        <th>Kolom 2</th>
        <th>Kolom 3</th>
        <th>Kolom 4</th>
        <th>Kolom 5</th>
        
        <?php
        for ($i=1; $i <= 5; $i++){ 
        echo "<tr>";
                for ($j=1; $j <=5; $j++){
                    echo "<td>Baris $i, Kolom $j <?=$j; ?></td>";
                }
        echo "</tr>";
            }
        ?>        
    </table>
</body>
</html>