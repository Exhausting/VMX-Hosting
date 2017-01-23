<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require 'startdb.php';

// Test if a connection can be made.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION["email"];
$servicelevel = $_POST["service_level"];
$cpu = $_POST["cpu"];
$memory = $_POST["memory"];
$diskspace = $_POST["disk_space"];
$vmname = $_POST["vm_name"];
$operatingsystem = $_POST["operating_system"];
$activationkey = $_POST["activation_key"];
// Create the Virtual machine using the API

$url = 'http://10.0.1.102:8080/yes/domain?vmName='.$vmname.'&memory='.$memory.'&vmImage=/home/jurjen/Downloads/CentOS-7-x86_64-Minimal-1611.iso&storage='.$diskspace;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json'
    )
);
$result = curl_exec($ch);

$stmt = $conn->prepare("INSERT INTO Customer_server (Email, Servicelevel, Cpu, Memory, Diskspace, Vmnaam, Operatingsystem, Activationkey) VALUES (?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssss", $email, $servicelevel, $cpu, $memory, $diskspace, $vmname, $operatingsystem, $activationkey);


$result = $stmt->execute();

  if ($result === TRUE) {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Virtual machine created successfull!</title>
      <?php include('head.php') ?>
    </head>
    <body>
    <?php include('nav-bar.php') ?>
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

    </body>
    </html>

    <?php
    header( "refresh:2;url=../dashboard.php" );
  }else {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Virtual machine creation failed!</title>
      <?php include('head.php') ?>
    </head>
    <body>
    <?php include('nav-bar.php') ?>
    <div class="container-float">
      <div class="row">
        <div class="col-sm-3 col-xs-2"></div>
        <div class="col-sm-6 col-xs-8">
          <div id="homeHeader">
            <h1>Oops! Something went wrong! :-(</h1>
            <h3>Virtual Machine creation failed. Please try again...</h3>
          </div>
        </div>
      </div>
    </div>

    </body>
    </html>

    <?php
    header( "refresh:2;url=../dashboard.php" );
  }
}


$stmt->close();
$conn->close();



 ?>
