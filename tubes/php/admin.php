<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
*/
?>
<?php 
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

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
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="../css/style6.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="../assets/img/admin.png" />
    
    <title>TuBes</title>
  </head>
<body>

<!-- navbar -->
<div class="navbar-fixed">
<nav class="transparent z-depth-2">  
  <div class="nav-wrapper">
    <a href="#home" class="brand-logo scrollspy">
      <img src="../assets/img/logo1.png" alt="brand-logo scrollspy">
    </a>
    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="logout.php"><input type="submit" name="submit" value="Logout"class=""></input></a></li>
      <li><a href="tambah.php"><input type="submit" name="submit" value="Add Data"class=""></input></a></li>
    </ul>
  </div>
  </nav>
</nav>
</div>

<!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
<li><a href="logout.php"><input type="submit" name="submit" value="Logout"class=""></input></a></li>
      <li><a href="tambah.php"><input type="submit" name="submit" value="Add Data"class=""></input></a></li>
</ul>

<!-- slider -->

<div class="slider">
  <ul class="slides">
    <li>
      <img src="../assets/img/bg.1.jpg">
      <div class="caption center">
        <h3>WELCOME</h3>
        <h6>---------------</h6>
        <h5 class="light text-lighten-4">Admin
        </h5>
      </div>
    </li>
  </ul>
 </div>

<div class="kolom">
  

    <form action="" method="post">

        <input type="text" name="keyword" autofocus
        placeholder="find your bike.." autocomplete="off">
        <button type="submit" name="cari">search</button>
    </form>
    
<br>
    <table>
        <thead>
          <tr>
          <th>No.</th>  
            <th>Option</th>  
            <th>Picture</th>  
            <th>Brand</th>  
            <th>Type</th>  
            <th>Price</th>  
            <th>Color</th>  
          </tr>
        </thead>

        <tbody>
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
        </tbody>
      </table>
         
</div>


    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 400,
        transition: 800,
        interval: 6000
      });

      


      </script>
</body>
</html>


