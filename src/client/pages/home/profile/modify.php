<?php
require_once "requireAuth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Cyborg - Awesome HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../../../../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../../../../assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="../../../../assets/css/owl.css">
  <link rel="stylesheet" href="../../../../assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>
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
          include "./../../../components/navbar.php";
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
          <div class="row">
            <div class="col-lg-12">
              <center>
                <div class="main-profile ">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="../../../../assets/images/profile2.jpg" alt="" style="border-radius: 23px;">
                    </div>
                    <div class="col-lg-4 align-self-center">
                      <div class="main-info header-text">
                        <span>Enseignant</span> <br>
                        <style>
                          td {
                            color: #fff;
                          }

                          input {
                            background-color: #666;
                            color: white;
                          }
                        </style>
                        <table>
                          <tr>
                            <td>Nom</td>
                            <td><input type="text" name="name" value="<?php echo "" . $row['name'] . ""; ?>"></td> <br>
                          </tr>
                          <tr>
                            <td>Prénom</td>
                            <td><input type="text" name="lastname" value="<?php echo "" . $row['lastname'] . ""; ?>">
                            </td>
                          </tr>
                          <tr>
                            <td>Tel</td>
                            <td><input type="text" name="tel" value="<?php echo "" . $row['tel'] . ""; ?>"></td>
                          </tr>
                          <tr>
                            <td>Mot De Passe &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="password" name="password"
                                value="<?php echo "" . $row['password'] . ""; ?>"></td>
                          </tr>
                        </table>
                        <form action="modifyPhp.php" method="POST">
                          <div class="main-border-button">
                            <div class="">
                              <a href="profile.php">Modifier</a>
                            </div>
                          </div>
                        </form>
                        <div class="main-border-button">
                          <div class="supprimer">
                            <a href="profile.php">Annuler</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">EMOS</a>. Tous droits réservés.

            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">Tarbya.tn</a>
          </p>
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