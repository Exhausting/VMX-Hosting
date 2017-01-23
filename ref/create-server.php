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

// Test of data goed doorkomt.
// echo "Email: $email, SLA: $servicelevel, CPU: $cpu, Memory: $memory, Diskspace: $diskspace, VM-Name: $vmname, OS:  $operatingsystem, Key: $activationkey";

$stmt = $conn->prepare("INSERT INTO Customer_server (Email, Servicelevel, Cpu, Memory, Diskspace, Vmnaam, Operatingsystem, Activationkey) VALUES (?,?,?,?,?,?,?,?,?)");

$stmt->bind_param('siiiisis', $email, $servicelevel, $cpu, $memory, $diskspace, $vmname, $operatingsystem, $activationkey);


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
  }


$stmt->close();
$conn->close();



 ?>