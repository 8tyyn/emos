<?php
$servername = "localhost";
$serveruser = "root";
$password = "";

try {
    $BDD = new PDO("mysql:host=$servername;dbname=emos", $serveruser, $password);
} catch (PDOException $e) {
    echo "" . $e->getMessage() . "";
}
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["password"])) {
    header("location: src/client/pages/login.html");
    exit();
}
$email = $_SESSION["email"];
$password = $_SESSION["password"];
$sql = "SELECT * FROM vc_users_client WHERE utilisateur_email=:email AND password=:password";
$stmnt = $BDD->prepare($sql);
$stmnt->bindParam(":email", $email);
$stmnt->bindParam(":password", $password);
$stmnt->execute();
$rowCount = $stmnt->rowCount();
$row = $stmnt->fetch(PDO::FETCH_ASSOC); 
if ($rowCount == 0) {
    header("location: src/client/pages/login.html");
} else {
?>
<?php
}
?>