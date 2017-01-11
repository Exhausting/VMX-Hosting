<?php
session_start();

if (isset($_POST['login'])){

// Start datbase verbinding.
require 'startdb.php';

// Static data uit het form.
$email =    $_POST['email'];
$password = $_POST['password'];

// SQL Query.
$stmt = $conn->prepare('select Email, Wachtwoord, Naam FROM Customer where Email = ?');

// Parameter mee geven uit het form.
$stmt->bind_param("s", $email);

// SQL Query uitvoeren.
$stmt->execute();

// Resultaat ophalen en in variable $result zetten.
$result = $stmt->get_result();

// Opgehaalde rows vanuit de DB leesbaar maken.
$getdbpass = $result->fetch_assoc();

// Vergelijkt of het form wachtwoord gelijk is aan de hash in de database.
$dbCheckPassword = password_verify($password, $getdbpass["Wachtwoord"]);

if($dbCheckPassword === TRUE){

// sessie starten met de naam van de gebruiker/
$_SESSION["login"] = true;
$_SESSION["naam"] = $getdbpass["Naam"];
echo "Login successfully!";
    header( "refresh:2;url=dashboard.php" );

}elseif($dbCheckPassword === FALSE){

echo "Wrong password or Email-address";
header( "refresh:2;url=index.php" );
}

// $getdbpass["Wachtwoord"];
// $getdbpass["Email"];

$stmt->close(); 
$conn->close();
}


?>
