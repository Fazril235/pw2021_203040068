<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// koneksi ke DBMS 
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040068");
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
 if (isset($_POST["tambah"])) {
     if (tambah($_POST) > 0) {
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
    
    <title>Add Data</title>
  </head>
<body>
    <div class="container">
<div class="container">
    <h3>Form Add Data</h3><br>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
         
            <form class="box">
                <div class="field">
                 <label for="img">Picture :</label><br>
                     <div class="control">
                 <input type="file" name="img" class="img" id="img" onchange="previewImage()">
              </div>
            </div>
            
                <div class="field">
                    <label for="merk">Brand :</label><br>
                    <div class="control">
                    <input class="text" name="merk" id="merk" required>
                </div>
            </div>

                <div class="field">
                    <label for="tipe">Type :</label><br>
                    <div class="control">
                    <input class="text" name="tipe" id="tipe" required>
                </div>
            </div>

                <div class="field">
                    <label for="harga">Price :</label><br>
                    <div class="control">
                    <input class="text" name="harga" id="harga" required>
                </div>
            </div>
            
                <div class="field">
                    <label for="warna">Color :</label><br>
                    <div class="control">
                    <input class="text" name="warna" id="warna" required>
                </div>
            </div>
         

            <button type="submit" name="tambah">Add Data!</button>
            <button><a href="admin.php">Back</a></button>
    </form>
        </ul>
        </div>
        </div>

        <script src="../js/script.js"></script> 
</body>
</html>