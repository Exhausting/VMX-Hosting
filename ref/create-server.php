<?php

session_start();

require 'ref/startdb.php';


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

  header( "refresh:2;url=dashboard.php" );

  }





$stmt->close();
$conn->close();


 ?>
