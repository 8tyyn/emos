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
    <link rel="stylesheet" href="../../../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../../../assets/css/animate.css">
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
            <?
                  include "../../../components/navbar.php"; 
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

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-12">
                   <center> <h2 style="color: #0eaedb;">Mise En Marche</h2><br> </center>
                  </div>
                  <style>
                    .col-lg-8 {
                      margin: auto;
                      display: block;
                    }
                  </style>
                  <div class="col-lg-8">                 
                    <div class="thumb">                   
                      <img src="../../../../../assets/images/video.png" alt="" style="border-radius: 23px; ">
                      <a href="https://drive.google.com/file/d/17mzL3Kd6xWfa7EcU1fWRvwwX4RSHRJVI/view?usp=sharing" target="_blank"><i class="fa fa-play"></i></a>
                    </div>                 
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
                <h2 style="color: #0eaedb;">Plus De Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <p><h5 style="color: rgb(125, 125, 125);">EMOS a plusieurs programmes de base intégrés. Une fois le démarrage réussi, les utilisateurs peuvent
                      rapidement démarrer grâce à un simple bouton de contrôle</h5></p> <br>
                      <center>
                    <div class="col-lg-6">
                    
                      <div class="left-info">
                        <style>
                          .center {
                            text-align: center;
                          }
                        </style>
                        <div class="center">
                        
                          <h4 style="color: #0eaedb;">Démarrage</h4>
                          
                        </div>
                      
                      </div>
                    </div>
                    <div class="col-lg-6">
                    </center>
                    </div>
                    <center>
                    <div class="col-lg-4">
                      <img src="../../../../assets/images/assets/images/emos3.png" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                  </center>
                    <div class="col-lg-12">
                      <p>Tout d'abord, vous devez allumer l'EMOS. Après avoir mis l'interrupteur sur position "ON", lorsque les
                        voyants RGB passent du blanc au vert, cela signifie que le démarrage est réussi.</p>
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

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em> Autres robots </em> associés</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../../../../assets/images/assets/images/voiture1.gif" alt="" class="templatemo-item" style="width: 200px;">
                  <h4>CarBot</h4><span>Transforme</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.7</li>
                    <li><i class="fa fa-download"></i> 5.9k</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../../../../assets/images/assets/images/emoss.gif" alt="" class="templatemo-item">
                  <h4>EMO</h4><span>Robot</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 5</li>
                    <li><i class="fa fa-download"></i> 980k</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../../../../assets/images/assets/images/vector-vector-robot.gif" alt="" class="templatemo-item">
                  <h4>Vector</h4><span>Robot</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="../../../../assets/images/assets/images/mecanum_robot_car.gif" alt="" class="templatemo-item">
                  <h4>Mecanum</h4><span>Voiture</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 3.6</li>
                    <li><i class="fa fa-download"></i> 1.8k</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

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
  <script src="../../../../assets/images/vendor/jquery/jquery.min.js"></script>
  <script src="../../../../assets/images/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../../../assets/images/assets/js/isotope.min.js"></script>
  <script src="../../../../assets/images/assets/js/owl-carousel.js"></script>
  <script src="../../../../assets/images/assets/js/tabs.js"></script>
  <script src="../../../../assets/images/assets/js/popup.js"></script>
  <script src="../../../../assets/images/assets/js/custom.js"></script>


  </body>

</html>
