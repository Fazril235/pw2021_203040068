<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke DBMS 
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040068");
require 'functions.php';

$id = $_GET['id'];
$oto = query("SELECT * FROM otomotif WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
 if (isset($_POST["ubah"])) {
     if (ubah($_POST) > 0) {
         echo "<script>
                 alert('Data Successfully added!');
                 document.location.href = 'admin.php' ;
               </script>";
     } else {
         echo "<script>
                  alert('Data Failed to be added!');
                  document.location.href = 'admin.php' ;
               </script>";
     }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

        <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="../css/style5.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="../tubes/assets/img/logo1.png" />
    
    <title>Update Data</title>
</head>
<body>
    <div class="container">    
        <div class="container">
    <h1>Form Update Data</h1><br>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $oto["id"]; ?>">
        <ul>
            <li>
            <form class="box">
                <div class="field">
                 <label for="img">Picture :</label><br>
                     <div class="control">
                 <input class="white-text" name="img" id="img" required value="<?= $oto["img"]; ?>"><br>
              </div>
            </div>
            
                <div class="field">
                    <label for="harga">Brand :</label><br>
                    <div class="control">
                    <input class="white-text" name="merk" id="merk" required value="<?= $oto["merk"]; ?>"><br>
                </div>
            </div>

                <div class="field">
                    <label for="harga">Type :</label><br>
                    <div class="control">
                    <input class="white-text" name="tipe" id="tipe" required value="<?= $oto["tipe"]; ?>"><br>
                </div>
            </div>

                <div class="field">
                    <label for="harga">Price :</label><br>
                    <div class="control">
                    <input class="white-text" name="harga" id="harga" required value="<?= $oto["harga"]; ?>"><br>
                </div>
            </div>
                <div class="field">
                    <label for="warna">Color :</label><br>
                    <div class="control">
                    <input class="white-text" name="warna" id="warna" required value="<?= $oto["warna"]; ?>"><br>
                </div>
            </div>

            <button type="submit" name="ubah">Update Data!</button>
            <button><a href="admin.php">Back</a></button>
    </form>
        </ul>
</div>
</div>

         <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

</body>
</html>