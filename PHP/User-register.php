<?php

     require"PHP/startdb.php";

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
$stmt = $conn->prepare("insert into Customer (Naam, Achternaam, Tussenvoegsel, Email, Telefoon, Bedrijf, Adres, Huisnummer, Toevoeging, Wachtwoord) VALUES (?,?,?,?,?,?,?,?,?,?)");

// Parameter mee geven uit het form.
$stmt->bind_param("sssss", $naam, $achternaam, $email, $bedrijf, $hash);

// SQL Query uitvoeren.
$result = $stmt->execute();

       if ($result === TRUE) {
           echo "New record created successfully";
    header( "refresh:2;url=index.php" );
       }else {
           echo "Failed to write data to the database. Please try again.";
       }

$stmt->close();
$conn->close();
   }
?>
