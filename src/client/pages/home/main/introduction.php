<?php
    require_once "requireAuth.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

  <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$serveruser = "root";
$password = "";
try {
    $BDD = new PDO("mysql:host=$servername;dbname=emos", $serveruser, $password);
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}

try {
    $email = $_SESSION['email'];
    if (!isset($_SESSION['email'])) {
        header('location: login.html');
    }
    $query = "SELECT * FROM account WHERE email=:email";
    $stmnt = $BDD->prepare($query);
    $stmnt->bindParam(':email', $email);
    $stmnt->execute();
    $row = $stmnt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "" . $e->getMessage();
}
?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
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
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/images/logoo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="page1.php" class="active">Introduction</a></li>
                        <li><a href="#">Télécharger</a></li>
                        <li><a href="profile.php"><?php
                      echo " " . $row['lastname'] . "";
                      ?>
                       <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/emos1.png" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-8">
                    
                      <h4>EMOS est une voiture intelligente qui utilise l'ESP32 comme contrôleur principal et comprend des
                        modules électroniques tels que l'évitement d'obstacles infrarouge, l'inspection de ligne, les lumières RGB et les
                        microphones etc. Grâce à la programmation, il peut non seulement réaliser des programmes intéressants tels
                        que le suivi intelligent et la lecture de musique, mais également transporter des stylos et dessiner des
                        graphiques, ce qui convient très bien aux débutants pour apprendre les premières connaissances en
                        programmation.</h4>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2 style="color: #0eaedb;">Plus de détails</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>EMOS</h4>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li style="color: blue;">bleu</li>
                          <li style="color: green;">vert</li>
                          <li style="color: orange;">orange</li>
                          <li style="color: purple;">violet</li>
                        </ul>
                      </div>
                    </div>
                    <
                    <div class="col-lg-4">
                      <img src="assets/images/emos2.png" alt="" style="border-radius: 23px; margin-bottom: 30px; width: 1100px;">
                    </div>
                    <
                    <div class="col-lg-12">
                      <p><b><h4 style="color: #0eaedb;">Information du produit</h4></b><br>
                       <p style="color: rgb(166, 165, 165);"> 
                       <b style="color: #0eaedb;"> Étape 1 </b> Comprendre la structure d’EMOS, préparez-vous à démarrer et expérimentez EMOS. Les utilisateurs peuvent en savoir plus sur la structure EMOS, sur le chargement de la batterie et sur les
                        différentes fonctionnalités des boutons, puis démarrer EMOS <br>
                       <b style="color: #0eaedb;"> Étape 2 </b> Installation des outils de programmation et apprentissage du téléchargement du programme.
                        Les utilisateurs peuvent apprendre à installer des outils et à télécharger des programmes <br>
                       <b style="color: #0eaedb;"> Étape 3 </b> Apprenez et expérimentez des cours avancés <br>
                        Les utilisateurs peuvent s’expérimenter à travers des divers cours dans le dossier

                       </p>
                      
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="https://drive.google.com/file/d/1fY7BvHGxAa7bVT8DSzPMLo_6C2IUmqR6/view?usp=sharing">Télécharger L'application EMOS!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
