<?php

session_start();
$title = 'Dashboard';

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <html>
  <head>
    <title>Dashboard</title>
    <?php include('ref/head.php') ?>
  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>

  <div class="virtualMachines">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Your Virtual Machines</h2>
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <h3>Debian test</h3>
            <a href="#" class="">
              <div class="thumbnail imgresponsive">
                <img src="images/debian.png">
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-3">
            <h3>Ubuntu Webserver</h3>
            <a href="#" class="">
              <div class="thumbnail">
                <img src="images/ubuntu.png">
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-3">
            <h3>Windows 2016 - test</h3>
            <a href="#" class="">
              <div class="thumbnail">
                <img src="images/windows.jpg">
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-3">
            <h3>Ubuntu DB</h3>
            <a href="#" class="">
              <div class="thumbnail">
                <img src="images/ubuntu.png">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("ref/footer.php") ?>
  </body>
  </html>

<?php } else { 
  include("ref/nologin.php");
}
?>
