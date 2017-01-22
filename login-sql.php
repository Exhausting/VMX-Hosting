<?php
session_start();

if (isset($_POST['login'])){

// Start datbase verbinding.
require 'ref/startdb.php';

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
		?>
	<!DOCTYPE html>
	<html>

	<head>
	  <title>Login Successfull</title>
	  <?php include('ref/head.php') ?>
	</head>
	<body>
	<?php include('ref/nav-bar.php') ?>

	<div class="container-float">
	  <div class="row">
	    <div class="col-sm-3 col-xs-2"></div>
	    <div class="col-sm-6 col-xs-8">
	      <div id="homeHeader">
	        <h1>Login Successfull</h1>
	        <h3>Redirecting you shortly...</h3>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include("ref/footer.php") ?>
	</body>
	</html>

	<?php
  header( "refresh:2;url=dashboard.php" );

} elseif ($dbCheckPassword === FALSE) {
	?>
	<!DOCTYPE html>
	<html>

	<head>
	  <title>Login FAILED</title>
	  <?php include('ref/head.php') ?>
	</head>
	<body>
	<?php include('ref/nav-bar.php') ?>

	<div class="container-float">
	  <div class="row">
	    <div class="col-sm-3 col-xs-2"></div>
	    <div class="col-sm-6 col-xs-8">
	      <div id="homeHeader">
	        <h1>Login Failed</h1>
	        <h3>You entered a wrong username/password, please try again...</h3>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include("ref/footer.php") ?>
	</body>
	</html>

	<?php
	header( "refresh:2;url=index.php" );
}

// $getdbpass["Wachtwoord"];
// $getdbpass["Email"];

$stmt->close();
$conn->close();
}


?>
