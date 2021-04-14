<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 5
Jumat 10.00 - 11.00
*/
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dengan memanggil function
$otomotif = query("SELECT * FROM otomotif");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css" class="href">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
  
</head>
<body>
    <h1>MotoRil</h1>
    <h3>
        <div class="add">
            <a href="tambah.php"<button>Add Data</button></a>
    </h3>
    <table border="1" cellpadding="13" cellspacing="0"> 
    <tr>
            <th>No.</th>  
            <th>Option</th>  
            <th>Picture</th>  
            <th>Brand</th>  
            <th>Type</th>  
            <th>Price</th>  
            <th>Color</th>  
    </tr>
        <?php $i = 1; ?>
        <?php foreach ($otomotif as $oto) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Change</button></a>
                    <a href=""><button>Delete</button></a>
                </td>
                <td><img src="../assets/img/<?= $oto['img']; ?>" alt=""></td>
                <td><?= $oto["merk"]; ?></td>
                <td><?= $oto["tipe"]; ?></td>
                <td><?= $oto["harga"]; ?></td>
                <td><?= $oto["warna"]; ?></td>
            </tr>  
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>


