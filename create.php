<?php

session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <html>
  <head>
    <title>Dashboard</title>
    <?php include('ref/head.php') ?>
  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>


  <?php include("ref/footer.php") ?>
  </body>
  </html>

<?php } else { 
  include("ref/nologin.php"); 
}
?>