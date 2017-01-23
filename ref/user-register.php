<?php
session_start();
require"startdb.php";

if(isset($_POST['submit'])){
  $naam = $_POST['form_naam'];
  $achternaam = $_POST['form_achternaam'];
  //  $tussenvoegsel = $_POST['form_tussenvoegsel'];
  $email = $_POST['form_email'];
  //  $telefoon = $_POST['form_telefoon'];
  $bedrijf = $_POST['form_bedrijf'];
  //  $adres = $_POST['form_adres'];
  //  $huisnummer = $_POST['form_huisnummer'];
  //  $toevoeging = $_POST['form_toevoeging'];
  $password = $_POST["form_wachtwoord"];
  // hashed password aanmaken.
  $hash = password_hash($password, PASSWORD_DEFAULT);

  // SQL Query.
  $stmt = $conn->prepare("INSERT INTO Customer (Naam, Achternaam, Email, Bedrijf, Wachtwoord) VALUES (?,?,?,?,?)");

  // Parameter mee geven uit het form.
  $stmt->bind_param("sssss", $naam, $achternaam, $email, $bedrijf, $hash);

  // SQL Query uitvoeren.
  $result = $stmt->execute();
  if ($result === TRUE) {
    $_SESSION["login"] = true;
    $_SESSION["email"] = $email;
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Registration Successfull</title>
      <?php include('head.php') ?>
    </head>
    <body>
    <?php include('nav-bar.php') ?>

    <div class="background">
      <div class="container-float">
        <div class="row">
          <div class="col-sm-3 col-xs-2"></div>
          <div class="col-sm-6 col-xs-8">
            <div id="homeHeader">
              <h1>Registration Successfull</h1>
              <h3>Redirecting you shortly...</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    </body>
    </html>

    <?php
    header( "refresh:2;url=../index.php" );
  }else {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Oops!</title>
      <?php include('head.php') ?>
    </head>
    <body>
    <?php include('nav-bar.php') ?>

    <div class="background">
      <div class="container-float">
        <div class="row">
          <div class="col-sm-3 col-xs-2"></div>
          <div class="col-sm-6 col-xs-8">
            <div id="homeHeader">
              <h1>Oops! Something went wrong!</h1>
              <h3>Your registration failed, please try again...</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    </body>
    </html>
    <?php
    header( "refresh:2;url=../signup.php" );
  }

  $stmt->close();
  $conn->close();
}
?>
