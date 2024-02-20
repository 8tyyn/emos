<?php
require_once "requireAuth.php";

// Database connection
$servername = "localhost";
$serveruser = "root";
$password = "";
try {
    $BDD = new PDO("mysql:host=$servername;dbname=emos", $serveruser, $password);
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];

      // Prepare UPDATE query
      $query = "UPDATE account SET name = :name, lastname = :lastname, tel = :tel, password = :password WHERE email = :email";
    
      try {
          // Prepare and execute the statement
          $stmnt = $BDD->prepare($query);
          $stmnt->bindParam(':name', $name);
          $stmnt->bindParam(':lastname', $lastname);
          $stmnt->bindParam(':tel', $tel);
          $stmnt->bindParam(':password', $password);
          $stmnt->bindParam(':email', $_SESSION['email']); // Using session email to identify the user
          $stmnt->execute();
          
          // Redirect to profile page after successful update
          header('Location: profile.php');
          exit(); // Terminate script to prevent further execution
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
  }

  ?>