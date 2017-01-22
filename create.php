<?php

session_start();
$title = 'Create';

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <html>
  <head>
    <?php include('ref/head.php') ?>
  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>

  <div class="pageHeader">
    <h2>Create a new Virtual Machine</h2>
  </div>
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

  <div class="container spacer">
    <div id="form">
      <h2>Create Account</h2>
      <form action="User-register.php" method="post">
        <div class="form-group">
          <label for="serviceLevel">Select Service Level</label>
          <select class="form-control" id="serviceLevel" name="service_level" required>
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
          </select>
        </div>
        
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>

  <?php include("ref/footer.php") ?>
  </body>
  </html>

<?php } else { 
  include("ref/nologin.php"); 
}
?>