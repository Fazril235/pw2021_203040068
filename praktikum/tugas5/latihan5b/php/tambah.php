<?php
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
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma-rtl.min.css">
</head>
<body>
    <h1>Form Add Data</h1><br>
    <form action="" method="post">
        <ul>
            <li>
            <form class="box">
                <div class="field">
                 <label for="img">Picture :</label><br>
                     <div class="control">
                 <input class="text" name="img" id="img" required>
              </div>
            </div>
            
                <div class="field">
                    <label for="merk">Brand :</label><br>
                    <div class="control">
                    <input class="text" name="merk" id="merk" required>
                </div>
            </div>

                <div class="field">
                    <label for="merk">Type :</label><br>
                    <div class="control">
                    <input class="text" name="tipe" id="tipe" required>
                </div>
            </div>

                <div class="field">
                    <label for="merk">Price :</label><br>
                    <div class="control">
                    <input class="text" name="harga" id="harga" required>
                </div>
            </div>
                <div class="field">
                    <label for="merk">Color :</label><br>
                    <div class="control">
                    <input class="text" name="warna" id="warna" required>
                </div>
            </div>

            <button type="submit" name="tambah">Add Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Back</a>    
            </button>
    </form>
        </ul>
</body>
</html>