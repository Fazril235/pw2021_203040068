<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 6
Jumat 10.00 - 11.00
*/
?>
<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
      
    <div class="login">
       <div class="profile">
           <img src="../assets/img/motoril.PNG">
    </div>
    <h3>Register Here</h3>
    <link rel="stylesheet" href="../css/style3.css" class="href">
 
    <form>
        <P><label for="username">Username</label></P>
        <input type="text" name="username">

        <P><label for="password">Password</label></P>
        <input type="password" name="password">
         
        <input type="submit" name="register" value="Register "class="btn"></input>
    </form> 
</div>
    </form>
</body>
</html>