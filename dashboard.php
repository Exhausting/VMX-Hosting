
<?php

session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
<!--   include('head.php');
  include('nav-bar.php');
  $gebruiker = $_SESSION['naam'];
  echo "Welkom $gebruiker in het Dashboard."; -->


  <html>
  <head>
    <title>Contact us</title>
    <?php include('head.php') ?>
  </head>
  <body>
  <?php include('nav-bar.php') ?>

  <div class="content1">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>Your Virtual Machines</h2>
        <div class="row">
          <div class="col-md-3">
            <h3>VM 1</h3>

          </div>
          <div class="col-md-3">
            <h3>VM 2</h3>
          </div>
          <div class="col-md-3">
            <h3>VM 3</h3>
          </div>
          <div class="col-md-3">
            <h3>VM 4</h3>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include("footer.php") ?>
  </body>
  </html>

<?php } else { ?>
  <!DOCTYPE html>
  <html>
  
  <head>
    <title>Contact us</title>
    <?php include('head.php') ?>
  </head>
  <body>
  <?php include('nav-bar.php') ?>

  <div class="container-float">
    <div class="row">
      <div class="col-sm-3 col-xs-2"></div>
      <div class="col-sm-6 col-xs-8">
        <div id="homeHeader">
          <h1>You are not an authorised user</h1>
          <h3>Please sign in or register</h3>
          <hr>
          <form>
            <button type="submit" class="btn-default btn-lg" formaction="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php") ?>
  </body>
  </html>
<?php }
?>
