<!DOCTYPE html>
  <html>
  
  <head>
    <title>Contact us</title>
    <?php include('ref/head.php') ?>
  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>

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

  <?php include("ref/footer.php") ?>
  </body>
  </html>