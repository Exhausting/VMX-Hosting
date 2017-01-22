<?php

session_start();

require '../ref/startdb.php';


$email = $_SESSION["login"];

$servicelevel = $_POST["service_level"];
$cpu = $_POST["cpu"];
$memory = $_POST["memory"];
$diskspace = $_POST["disk_space"];
$vmname = $_POST["vm_name"];
$operatingsystem = $_POST["operating_system"];
$activationkey = $_POST["activation_key"];

$stmt = $conn->prepare("insert into Customer_server (Email, Servicelevel, Cpu, Memory, Diskspace, Vmnaam, Operatingsytem, Activationkey) VALUES (?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssss", $email, $servicelevel, $cpu, $memory, $diskspace, $vmname, $operatingsystem, $activationkey);

$result = $stmt->execute();

  if ($result === TRUE) {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Virtual machine created successfull!</title>
      <?php include('../ref/head.php') ?>
    </head>
    <body>
    <?php include('../ref/nav-bar.php') ?>

    <div class="container-float">
      <div class="row">
        <div class="col-sm-3 col-xs-2"></div>
        <div class="col-sm-6 col-xs-8">
          <div id="homeHeader">
            <h1>VM Successfull</h1>
            <h3>Redirecting you shortly...</h3>
          </div>
        </div>
      </div>
    </div>

    <?php include("../ref/footer.php") ?>
    </body>
    </html>

    <?php
    header( "refresh:2;url=dashboard.php" );
  }





$stmt->close();
$conn->close();


 ?>
