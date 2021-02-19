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
// Date 
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// mmebuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,2,1,2002));

// strtotime
echo date("l", strtotime("1 feb 2002"));

 
?>