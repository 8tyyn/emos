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
    header("location: login.html");
    exit();
}
$email = $_SESSION["email"];
$password = $_SESSION["password"];
$sql = "SELECT * FROM account WHERE email=:email AND password=:password";
$stmnt = $BDD->prepare($sql);
$stmnt->bindParam(":email", $email);
$stmnt->bindParam(":password", $password);
$stmnt->execute();
$rowCount = $stmnt->rowCount();
if ($rowCount == 0) {
    header("location: login.html");
} else {
?>
<?php
}
?>