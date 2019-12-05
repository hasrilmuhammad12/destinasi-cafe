<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Hasril Muhammad Iqbal</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="makanan.php">Makanan</a></li>
        <li><a href="minuman.php">Minuman</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Destinasi Cafe Di Payakumbuh</h1>
        <div class="row center">
          <h5 class="header col s12 light">Merupakan tempat nongkrong untuk refresing</h5>
        </div>
        <div class="row center">
          
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


      <div class="container">
      <div class="row">
       <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Gambar Makanan</h4>

              <?php 
            $makanan = query("SELECT * FROM makanan");
            ?>
            <?php
            $count = 0;
            $end = 5;
            foreach ($makanan as $row):
              $count ++;
              if ($count==$end) break;
            ?>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-image">
                    <img src="admin/img/<?=$row["gambar_makanan"]; ?>">
                    <span class="card-title"></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                  <p><h4><?=$row["nama_makanan"]; ?></h4></p>
                  <p><?=$row["deskripsi_makanan"]; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
      </div>
    </div>  


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Kafe (Cafe) adalah tempat untuk bersantai dan berbincang-bincang dimana pengunjung dapat memesan minuman dan makanan. Kafe termasuk tipe restoran namun lebih mengutamakan suasana rileks, hiburan dan kenyamanan pengunjung sehingga menyediakan tempat duduk yang nyaman dan alunan musik.Coffee shop pada mulanya hanya menyediakan tempat untuk minum kopi dan teh dengan cepat. Akan tetapi, karena perkembangan dan kebutuhan pelanggan yang semakin lama semakin kompleks dan tidak ada habisnya, berkembanglah coffee shop seperti yang sekarang ini.</p>
        </div>
      </div>

    </div>
  </div>

    <div class="container">
      <div class="row">
       <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Gambar Minuman</h4>

            <?php 
            $produk = query("SELECT * FROM produk");
            ?>
            <?php
            $count = 0;
            $end = 5;
            foreach ($produk as $row):
              $count ++;
              if ($count==$end) break;
            ?>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-image">
                    <img src="admin/img/<?=$row["gambar_produk"]; ?>">
                    <span class="card-title"></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                   <p><h4><?=$row["nama_produk"]; ?></h4></p>
                  <p><?=$row["deskripsi_produk"]; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
          </div>
      </div>
    </div>  



  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
    <p class="flow-text">whatsapp: 0896-5716-0390 </p>
      <div class="row">
      <a class="btn-floating pulse"><i class="material-icons">menu</i></a>
      <a class="btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
      <a class="btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <center> Hasril Muhammad Iqbal Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a></center>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
