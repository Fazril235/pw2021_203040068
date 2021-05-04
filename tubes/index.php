<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Tugas Besar
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
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="../tubes/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="../tubes/assets/img/motoril.PNG" />
    
    <title>TuBes</title>
  </head>
  <body id="home" class="scrollspy">

    <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="grey darken-3">  
      <div class="nav-wrapper">
        <a href="#home" class="brand-logo">
          <img src="../tubes/assets/img/logo.png" alt="brand-logo">
        </a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#about">About</a></li>
          <li><a href="#owner">Owner</a></li>
          <li><a href="#product">Product</a></li>
          <li><a href="#detail">Detail</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="../tubes/php/login.php" class="waves-effect waves-light btn">login</a></li>
        </ul>
      </div>
      </nav>
    </nav>
  </div>

  <!-- sidenav -->

  <ul class="sidenav" id="mobile-nav">
          <li><a href="">About Us</a></li>
          <li><a href="">Team</a></li>
          <li><a href="">Product</a></li>
          <li><a href="">Detail</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="../tubes/php/login.php" class="waves-effect waves-light btn">login</a></li>
  </ul>

  <!-- slider -->

  <div class="slider">
      <ul class="slides">
        <li>
          <img src="../tubes/assets/img/bg.1.jpg">
          <div class="caption left-align">
            <h3>WELCOME</h3>
            <h6>---------------</h6>
            <h5 class="light grey-text text-lighten-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda non sed voluptatibus alias necessitatibus saepe dolorum sit, consectetur dolorem adipisci delectus eos ex iure culpa! Beatae nesciunt modi veniam earum?
            </h5>
          </div>
        </li>
        <li>
          <img src="../tubes/assets/img/bg2.jpg">
          <div class="caption center-align">
            <h3>WELCOME</h3>
            <h6>-----------</h6>
            <h5 class="light grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quae hic perferendis deserunt, magnam eaque! Error alias explicabo, nulla, ab, suscipit modi tenetur labore illo dolores voluptate inventore autem quod.
            </h5>
          </div>
        </li>
        <li>
          <img src="../tubes/assets/img/bg3.jpg">
          <div class="caption right-align">
            <h3>WELCOME</h3>
            <h6>---------------</h6>
            <h5 class="light grey-text text-lighten-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam repudiandae delectus doloribus dolor vitae, at cumque iste cupiditate odio voluptates fugiat officia obcaecati voluptate earum tempore id voluptas. Impedit, fugit.     
            </h5>
          </div>
        </li>
      </ul>
     </div>

     
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 700,
        transition: 800,
        interval: 6000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);


      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 0
      });


    </script>
  </body>
</html>
      