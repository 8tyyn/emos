<?php
session_start(); 


if (!isset($_SESSION['email'])) {
    header('location: login.html');
    exit(); 
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $email = $_SESSION['email'];

    
    $stmt = $conn->prepare("DELETE FROM account WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    
    session_destroy();
    header('Location: login.html');
    exit();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null; 
?>
