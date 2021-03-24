  
<?php 
// Muhammad Fazril Fuady. H
// 203040068
// Jumat 10.00 - 11.00
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query dengan memanggil function
$otomotif = query("SELECT * FROM otomotif");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Ril-Otomotif</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="container mt-3 mb-3">
       <?php foreach ($otomotif as $oto) : ?>
        <p class="merk">
            <a href="php/detail.php?id=<?= $oto['id'] ?>"> 
                <?= $oto["merk"] ?>
            </a>
        </p> 
        <?php endforeach; ?>
</body>
</html>