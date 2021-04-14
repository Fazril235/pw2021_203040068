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

require 'functions.php';
$otomotif = query("SELECT * FROM otomotif");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $otomotif = cari($_POST["keyword"]);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Halaman Admin</title>
         <!--Import Google Icon Font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <h3>MotoRil</h3>

    <h5>
        <div class="add">
            <a href="tambah.php"<i class="material-icons">add_to_photos</i></a>
           <br><br>
    </h5>

    <form action="" method="post">

        <input type="text" name="keyword" autofocus
        placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">search</button>

    </form>
    
<br>
    <table border="1" cellpadding="8" cellspacing="0"> 
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
                    <a href="ubah.php?id=<?= $oto['id']; ?>"><i class="material-icons">update</i></a>
                    <a href="hapus.php?id=<?= $oto["id"]; ?>" onclick="return confirm('Delete Data??');"><i class="material-icons">delete</i></a>
            </td>
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
     
        <!--JavaScript at end of body for optimized loading-->
         <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>


