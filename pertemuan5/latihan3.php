<?php
/*
Muhammad Fazril
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 5 - 19 Februari 2021
Mempelajari array
*/
?>
<?php
$mahasiswa = [
    ["Muhammad Fazril", "203040068", "Teknik Informatika", 
    "arielff54@gmail.com"],
    ["Alia Azzahra", "203040068", "Bisnis Manajemen", 
    "alia.azzahra12@gmail.com"],
    ["Shakeera", "203040068", "Bisnis Manajemen", 
    "Shakeeradn@gmail.com"]
    

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
       <li>Nama : <?= $mhs[0]; ?></li>
       <li>NRP : <?= $mhs[1]; ?></li>
       <li>Jurusan : <?= $mhs[2]; ?></li>
       <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>