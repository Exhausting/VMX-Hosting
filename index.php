<!DOCTYPE html>
<?php
session_start();
$title = 'Home';
?>

<html>
<head>
  <?php include('ref/head.php') ?>
</head>

<body>
<?php include('ref/nav-bar.php') ?>

<div class="background">
  <div class="container-float">
    <div class="row">
      <div class="col-sm-3 col-xs-2"></div>
      <div class="col-sm-6 col-xs-8">
        <div id="homeHeader">
          <h1>VMX Hosting</h1>
          <h3>Your Partner For Reliable Hosting</h3>
          <hr>
          <?php if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
            <form>
              <button type="submit" class="btn-default btn-lg btn-special" formaction="create.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Get Started!</button>
            </form>
          <?php } else{ ?>
            <form>
              <button type="submit" class="btn-default btn-lg btn-special" formaction="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Get Started!</button>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="spacer">
  <div class="background">
    <div class="content1">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <h2>Pellentesque habitant</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

          <h2>Vestibulum tortor</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

          <h2>Mauris placerat</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="spacer createVM products">
  <h2>Our Products</h2>
  <div class="container">
    <div class="row">
      <?php if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>Low</h2>
          <p class="text-info">
            <p><b>CPU:    </b> 1</p>
            <p><b>Memory: </b> 1GB</p>
            <p><b>Storage:</b> 100GB</p></p>
          <a class="btn btn-info pull-center" href="create.php" role="button">Create</a>
        </section>

        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>Medium</h2>
          <p class="text-info">
            <p><b>CPU:    </b> 2</p>
            <p><b>Memory: </b> 4GB</p>
            <p><b>Storage:</b> 500GB</p></p>
          <a class="btn btn-info pull-center" href="create.php" role="button">Create</a>
        </section>

        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>High</h2>
          <p class="text-info">
            <p><b>CPU:    </b> 4</p>
            <p><b>Memory: </b> 8GB</p>
            <p><b>Storage:</b> 1000GB</p></p>
          <a class="btn btn-info pull-center" href="create.php" role="button">Create</a>
        </section>
      <?php } else{ ?>
        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>Low</h2>
          <p class="text-info">
              <p><b>CPU:    </b> 1</p>
              <p><b>Memory: </b> 1GB</p>
              <p><b>Storage:</b> 100GB</p></p>
          <a class="btn btn-info pull-right" href="signup.php" role="button">Go</a>
        </section>

        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>Medium</h2>
          <p class="text-info">
              <p><b>CPU:    </b> 2</p>
              <p><b>Memory: </b> 4GB</p>
              <p><b>Storage:</b> 500GB</p></p>
          <a class="btn btn-info pull-right" href="signup.php" role="button">Go</a>
        </section>

        <section class="col-xs-4">
          <img src="images/icon.png" class="img-circle img-responsive center-block">
          <h2>High</h2>
          <p class="text-info">
              <p><b>CPU:    </b> 4</p>
              <p><b>Memory: </b> 8GB</p>
              <p><b>Storage:</b> 1000GB</p></p>
          <a class="btn btn-info pull-right" href="signup.php" role="button">Go</a>
        </section>
      <?php } ?>
    </div>
  </div>
</div>

<div class="spacer">
  <div class="background">
    <div class="content1">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <h2>Pellentesque habitant</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

          <h2>Vestibulum tortor</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

          <h2>Mauris placerat</h2>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("ref/footer.php") ?>

</body>
</html>
