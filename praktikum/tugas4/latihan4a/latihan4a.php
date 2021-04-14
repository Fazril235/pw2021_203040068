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
// Membuat koneksi ke database
$connect = mysqli_connect("localhost", "root", "");
// Memilih database
mysqli_select_db($connect, "pw_tubes_203040068");
//Melakukan query dari database
$result = mysqli_query($connect, "SELECT * FROM otomotif");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ril-Otomotif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="" class="table is-bordered is-fullwidth is-hoverable">
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

                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row["id"]; ?></td>
                        <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                        <td><?= $row["merk"]; ?></td>
                        <td><?= $row["tipe"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["warna"]; ?></td>
                
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
