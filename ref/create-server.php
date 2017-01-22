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



echo $email;





$stmt->close();
$conn->close();


 ?>
