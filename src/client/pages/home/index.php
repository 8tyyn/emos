<?php
    require_once "../../auth/requireAuth.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                  include "../../components/navbar.php"; 
                ?>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Bienvenu dans EMOS</h6>
                  <h4><em>Créer</em> un meilleur avenir pour la prochaine génération</h4>
                  <div class="main-button">
                    <a href="#first">Parcourir maintenant</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <center id="first"><h4>Qu'avez-vous besoin de savoir</h4></center>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/welcome1.gif" alt="">
                      <h4>Introduction<br><span>Tout ce que vous devez savoir sur les emos<br>.</span></h4>
                      <div class="main-button">
                        <a href="page1.php">En Savoir Plus</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/welcome2.gif" alt="">
                      <h4>Mise en Marche<br><span>Comment l'utiliser et comment le faire fonctionner<br>.</span></h4>
                      <div class="main-button">
                        <a href="page2.php">En Savoir Plus</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/welcome3.gif" alt="">
                      <h4>Programmes Simples<br><span>Quelques-uns des programmes faciles à réaliser<br>.</span></h4>
                      <div class="main-button">
                        <a href="simple.php">En Savoir Plus</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/welcome4.gif" alt="">
                      <h4>Programme avancée<br><span>certains des programmes difficiles à réaliser<br>.</span></h4>
                      <div class="main-button">
                        <a href="hard.php">En Savoir Plus</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="main-button">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Votre bibliothèque</em> d'application</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>EMOS</h4><span>Détails</span></li>
                  <li><h4>Date d'ajout</h4><span>29/01/2024</span></li>
                  <li><h4>Type</h4><span>EXE</span></li>
                  <li><h4>Téléchargement</h4><span>2.5K</span></li>
                  <li><div class="main-border-button"><a href="https://drive.google.com/file/d/1fY7BvHGxAa7bVT8DSzPMLo_6C2IUmqR6/view?usp=sharing">Télécharger</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">Plus De Détails</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">EMOS</a>. Tous droits réservés. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">Tarbya.tn</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../../../assets/js/isotope.min.js"></script>
  <script src="../../../../assets/js/owl-carousel.js"></script>
  <script src="../../../../assets/js/tabs.js"></script>
  <script src="../../../../assets/js/popup.js"></script>
  <script src="../../../../assets/js/custom.js"></script>


  </body>

</html>
