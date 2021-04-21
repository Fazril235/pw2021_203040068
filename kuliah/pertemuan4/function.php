<?php
/*
Muhammad Fazril
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 4 - 19 Februari 2021
Memppelajari penerapan function pada bahasa pemrograman php
*/
?>
<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
   <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Fazril"); ?></h1>
</body>
</html>