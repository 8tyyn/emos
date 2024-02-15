<?php
session_start(); // Start the session

$servername = "localhost";
$serveruser = "root";
$password = "";

try {
    $BDD = new PDO("mysql:host=$servername;dbname=emos", $serveruser, $password);
    echo "connexion reussi";
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}

if (isset($_POST['ok'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $BDD -> exec ("insert into account(name,lastname,tel,adress,email,password)values('$name','$lastname','$tel','$adress','$email','$password')");

    header("Location: http://127.0.0.1/WEBSITE/EMOS/index.php");
exit();
}
?>