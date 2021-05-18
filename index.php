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
require '../pw2021_203040068/tubes/php/functions.php';

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
    <link type="text/css" rel="stylesheet" href="../pw2021_203040068/tubes/css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="../pw2021_203040068/tubes/css/style8.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="/tubes/assets/img/logo1.png" />
    
    <title>Muhammad Fazril</title>
  </head>
  <body id="home" class="scrollspy">

<!-- navbar -->
<div class="navbar-fixed">
<nav class="transparent z-depth-0">  
  <div class="nav-wrapper">
    <a href="#home" class="brand-logo scrollspy">
      <img src="../pw2021_203040068/tubes/assets/img/arill.png" alt="">
    </a>
    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#about">About</a></li>
      <li><a href="#project">Project</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="../pw2021_203040068/tubes/index.php">Tubes</a></li>
    </ul>
  </div>
  </nav>
</nav>
</div>

<!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
<li><a href="">About Us</a></li>
      <li><a href="">Project</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="../pw2021_203040068/tubes/index.php">Tubes</a></li>
</ul>

<!-- slider -->

<div class="slider">
  <ul class="slides">
    <li>
      <img src="../pw2021_203040068/tubes/assets/img/bg5.jpg">
      <div class="caption center-align">
        <h3>WELCOME TO MY BIG ASSIGNMENT</h3>
        <h6>---------------</h6>
        <h5 class="light grey-text text-lighten-4">MotoRil was founded in 2021 in the Industrial city, Cilegon and hopes to grow over time. An automotive company that sells rare and expensive motorbikes. We only choose products that have good condition, which makes you feel satisfied when you have them. Then, we also receive free service for you for one year. Your satisfaction is our responsibility.
        </h5>
      </div>
    </li>
    <li>
      <img src="../pw2021_203040068/tubes/assets/img/bg6.jpg">
      <div class="caption right-align">
        <h3>WELCOME TO MY BIG ASSIGNMENT</h3>
        <h6>---------------</h6>
        <h5 class="light grey-text text-lighten-4">MotoRil was founded in 2021 in the Industrial city, Cilegon and hopes to grow over time. An automotive company that sells rare and expensive motorbikes. We only choose products that have good condition, which makes you feel satisfied when you have them. Then, we also receive free service for you for one year. Your satisfaction is our responsibility.
        </h5>
      </div>
    </li>

    <li>
      <img src="../pw2021_203040068/tubes/assets/img/bg7.jpg">
      <div class="caption left-align">
        <h3>WELCOME TO MY BIG ASSIGNMENT</h3>
        <h6>---------------</h6>
        <h5 class="light grey-text text-lighten-4">MotoRil was founded in 2021 in the Industrial city, Cilegon and hopes to grow over time. An automotive company that sells rare and expensive motorbikes. We only choose products that have good condition, which makes you feel satisfied when you have them. Then, we also receive free service for you for one year. Your satisfaction is our responsibility.
        </h5>
      </div>
    </li>
  </ul>
 </div>

 <!-- About Us -->
 <section id="about" class="about scrollspy grey lighten-3">
   <div class="container">
     <div class="center">
       <h3 class="center light black-text text-darken-3">About Us</h3>
        <div class="col m10 light black-text">
          <p>My name is Muhammad Fazril Fuady Hermawan, often called Aril. I am 19 years old. I have hobbies such as sports, hiking, motorbikes, and traveling. I was born in Sumedang to be exact on February 1, 2002. I really like sports with my friends, why do I like it so much, maybe because I grew up in an environment that likes soccer too. I grew up in the city of Cilegon even though I was born in Sumedang, because my father worked here, I grew up in this city.
</p>
        </div>
        
        </div>
      </div>
   </div>
 </section>

<!-- project -->
<div id="project" class="parallax-container scrollspy">
<div class="parallax"><img src="../pw2021_203040068/tubes/assets/img/bg8.jpg"></div>  
<h3 class="center light black-text">Project</h3> 
<div class="row">
  <div class="container">
<div class="col m4 center">
<h4 class="center light black-text">Class</h4>
<hr>
  <p>
    <a href="../pw2021_203040068/kuliah/pertemuan9/"><input type="submit" name="submit" value="Pertemuan 9"class="btn"></input></a>

  </p>
  <p>
    <a href="../pw2021_203040068/kuliah/pertemuan10/">Pertemuan10</a>
  </p>
  <p>
  <a href="../pw2021_203040068/kuliah/pertemuan11/"><input type="submit" name="submit" value="Pertemuan 11"class="btn"></input></a>
  </p>
  <p>
    <a href="../pw2021_203040068/kuliah/pertemuan12/index.php">Pertemuan12</a>
  </p>
  <p>
  <a href="../pw2021_203040068/kuliah/pertemuan13/"><input type="submit" name="submit" value="Pertemuan 13"class="btn"></input></a>
  </p>
</div> 

<div class="col m4 center">
<h4 class="center light black-text">Tubes</h4>
  <hr>
<p>
<a href="../pw2021_203040068/tubes/index.php"><input type="submit" name="submit" value="TUBES"class="btn"></input></a>
  </p>
</div>

<div class="col m4 center">
  <h4 class="center light black-text">Praktikum</h4>
  <hr>
  <p>
    <a href="../pw2021_203040068/praktikum/tugas1/tugas1.php"><input type="submit" name="submit" value="Pertemuan 1"class="btn"></input></a>
  </p>
  <p>
    <a href="../pw2021_203040068/praktikum/tugas2/latihan2d.php">Tugas2</a>
  </p>
  <p>
  <a href="../pw2021_203040068/praktikum/tugas3/latihan3d.php"><input type="submit" name="submit" value="Pertemuan 3"class="btn"></input></a>
  </p>
  <p>
    <a href="../pw2021_203040068/praktikum/tugas4/latihan4c/index.php">Tugas4</a>
  </p>
  <p>
  <a href="../pw2021_203040068/praktikum/tugas5/tugas5/index.php"><input type="submit" name="submit" value="Pertemuan 5"class="btn"></input></a>
  </p>
  <p>
    <a href="../pw2021_203040068/praktikum/tugas6/tugas6/index.php">Tugas6</a>
  </p>
</div>
</div>
</div>
</div>

</section>


<!-- contact us -->

<section id="contact" class="contact grey lighten-3 scrollspy">
  <div class="container">
     <h3 class="light black-text text-darken center">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel grey darken center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>~~~MuhammadFazril~~~</p>
        </div>
        <div class="card-panel">
        <ul class=""collection with-header">
          <li class="collection-header"><h4>Our Location</h4></li>
          <li class="collection-item">Metro Cilegon</li>
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
          <button type="submit" class="btn grey darken">send</button>
         </div>
       </form>
     </div>
    </div>
  </div>
</section>    

<!-- Footer -->
<footer class="grey lighten white-text center">
      <div class="container">
            <h5 class="light white-text text-darken-3 center" href="#!">Muhammad Fazril © 2021 Copyright</h5>

      </div>
</footer>




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../pw2021_203040068/tubes/js/materialize.min.js"></script>
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
      