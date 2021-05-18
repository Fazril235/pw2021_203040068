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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="../tubes/css/style7.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="../tubes/assets/img/logo1.png" />
    
    <title>TuBes</title>
  </head>
  <body id="home" class="scrollspy">

<!-- navbar -->
<div class="navbar-fixed">
<nav class="transparent z-depth-0">  
  <div class="nav-wrapper">
    <a href="#home" class="brand-logo scrollspy">
      <img src="../tubes/assets/img/logo1.png" alt="brand-logo scrollspy">
    </a>
   
    <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <div class="text">
      <li><a href="#about">About</a></li>
      <li><a href="#owner">Owner</a></li>
      <li><a href="#product">Product</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="../tubes/php/login.php">Login</a></li>
      </div>
    </ul>
  
  </div>
  </nav>
</nav>
</div>

<!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
<li><a href="">About Us</a></li>
      <li><a href="">Owner</a></li>
      <li><a href="">Product</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="../tubes/php/login.php">Login</a></li>
</ul>

<!-- slider -->

<div class="slider">
  <ul class="slides">
    <li>
      <img src="../tubes/assets/img/bg.1.jpg">
      <div class="caption center">
        <h3>WELCOME</h3>
        <h6>---------------</h6>
        <h5 class="light grey-text text-lighten-4">MotoRil was founded in 2021 in the Industrial city, Cilegon and hopes to grow over time. An automotive company that sells rare and expensive motorbikes. We only choose products that have good condition, which makes you feel satisfied when you have them. Then, we also receive free service for you for one year. Your satisfaction is our responsibility.
        </h5>
      </div>
    </li>
  </ul>
 </div>

 <!-- About Us -->
 <section id="about" class="about scrollspy blue-grey lighten-4">
   <div class="container">
     <div class="center">
       <h3 class="center light black-text text-darken-3">About Us</h3>
        <div class="col m10 light black-text">
          <p>MotoRil was founded in 2021 in the Industrial city, Cilegon and hopes to grow over time. An automotive company that sells rare and expensive motorbikes. We only choose products that have good condition, which makes you feel satisfied when you have them. Then, we also receive free service for you for one year. Your satisfaction is our responsibility.</p>
        </div>
        
        </div>
      </div>
   </div>
 </section>

 <!-- Owner -->

 <div id="owner" class="parallax-container scrollspy">
  <div class="parallax"><img src="../tubes/assets/img/slider5.jpg"></div>   
    <h3 class="center light white-text">Owner</h3> 
    <br>
      <div class="photo">
      <div class="container"> 
    <img src="../tubes/assets/img/owner.jpg" alt="">
    </div>
    <a href="https://www.instagram.com/fazrilfh/"><input type="submit" name="submit" value="Muhammad Fazril Fuady Hermawan"class="btn"></input></a>
    </div>

  </div>
          
    
</div>

<!-- product -->
<div class="kotak">
<section id="product" class="product scrollspy blue-grey lighten-4">
<h3 class="center light black-text">Product</h3> 
<div class="container">
 
<form action="" method="post">
<input type="text" name="keyword" autofocus
placeholder="find your bike.." autocomplete="off">
<button type="submit" name="cari">search</button>
<br><br><br><br>
</form>

<?php foreach( $otomotif as $oto) : ?>

<div class="row">
    <div class="col m3 s6">
      <div class="card">
      <div class="card-image">
          <img src="../tubes/assets/img/<?= $oto["img"]; ?>">
        </div>
        <div class="card-content">
          <p><?= $oto["merk"]; ?></p>
        </div>
        <div class="card-action">
          <a href="php/detail.php?id=<?= $oto['id']?>"<?= $oto["merk"]?>>more detail</a>
        </div>
      </div>
    </div>   

    <?php endforeach; ?>
    </div>
    </div>
    </div>
    
</section>


<!-- contact us -->

<section id="contact" class="contact grey lighten-4 scrollspy teal lighten-1">
  <div class="container">
    <h3 class="light black-text text-darken-3 center">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel grey darken-2 center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>~~~MotoRil~~~</p>
        </div>
        <div class="card-panel">
        <ul class=""collection with-header">
          <li class="collection-header"><h4>Our Office</h4></li>
          <li class="collection-item">Metro Cilegon Blok M 18</li>
          <li class="collection-item">Cilegon,Banten</li>
          <li class="collection-item">Indonesia</li>
          <li class="collection-item">------</li>
        </ul>
      </div>
    </div>

     <div class="col m7 s12">
       <form>
         <div class="card-panel">
           <h5>Please fill out this form</h5>
           <div class="input-field">
             <input type="text" name="name" id="name" required class="validate">
             <label for="name">Name</label>
           </div>
           <div class="input-field">
            <input type="email" name="email" id="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field">
            <input type="text" name="phone" id="phone">
            <label for="phone">Phone Number</label>
          </div>
          <div class="input-field">
            <textarea name="message" id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
          </div>
          <button type="submit" class="btn grey darken-2">send</button>
         </div>
       </form>
     </div>
    </div>
  </div>
</section>    

<!-- Footer -->
<footer class="grey lighten-2 black-text center">
      <div class="container">
            <a href="../index.php"><h5 class="light black-text text-darken-3 center" href="#!">Muhammad Fazril © 2021 Copyright</h5></a>

      </div>
</footer>




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
      