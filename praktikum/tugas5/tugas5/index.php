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
    <head>
        <title>MotoRil</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- MY CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/icon/home_icon.png" />


    </head>
    <body>
        <div class="container">
            <table class="max">
                <thead>
                    <tr class="grey darken-4 white-text">
                        <th>No</th>
                        <th>Picture</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>More</th>
                    </tr>
                </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($otomotif as $oto) : ?>
                    
                    <tr class="black-text">
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <img src="assets/img/<?= $oto["img"]; ?>">
                        </td>
                        <td><?= $oto["merk"]; ?></td>
                        <td><?= $oto["tipe"]; ?></td>
                        <td><?= $oto["harga"]; ?></td>
                        <td><?= $oto["warna"]; ?></td>
                        <td>
                            <a href="php/detail.php?id=<?= $oto['id']?>"<?= $oto["merk"]?>><i class="material-icons">add_to_photos</i></a>
                        </td>
                    </tr>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </div>



        

              <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>

