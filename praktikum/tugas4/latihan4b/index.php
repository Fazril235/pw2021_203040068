<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 4
Jumat 10.00 - 11.00
*/
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ril-Otomotif</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="otomotif" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                <th>No</th>
                    <th>Gambar</th>
                    <th>Merk</th>
                    <th>Tipe Kendaraan</th>
                    <th>Price</th>
                    <th>Warna</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($otomotif as $oto) : ?>
                    <tr>
                        <td><?= $oto["id"]; ?></td>
                        <td><img src="assets/img/<?= $oto["img"]; ?>"></td>
                        <td><?= $oto["merk"]; ?></td>
                        <td><?= $oto["tipe"]; ?></td>
                        <td><?= $oto["harga"]; ?></td>
                        <td><?= $oto["warna"]; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#otomotif').DataTable();
        } );
    </script>
</body>
</html>