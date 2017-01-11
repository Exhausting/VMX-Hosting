
<?php
session_start();
?>

<html>
<head>
  // INCLUDE NAV vanuit session_start
  <?php include('head.php') ?>
  <title>VMX Hosting</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="vmx.css">
  <script src="https://use.fontawesome.com/f288586ec5.js"></script>
</head>
<body>
<?php include('nav-bar.php') ?>
<!-- Start of Menu -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">VMX Hosting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.html">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
        <li><a href="login.html">Login <i class="fa fa-user" aria-hidden="true"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End of Menu -->


<div class="container bgim-1">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div id="form">
        <h2>Create Account</h2>

        <form>
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firtName" name="form_naam" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="form_achternaam" placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <label for="organization">Organization (optional)</label>
            <input type="text" class="form-control" id="organization" name="form_bedrijf" placeholder="Optional">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="form_email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <p class="help-block">Passwords must be a minimum of 8 characters long, and include at least 1 uppercase letter, 1 lowercase letter, and 1 number. Please note: do not include your username, or part of your username, in your password.</p>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pasword" name="form_wachtwoord" placeholder="Password" pattern=".{8,255}" title="Passwords must be a minimum of 8 characters long, and include at least 1 uppercase letter, 1 lowercase letter, and 1 number. Please note: do not include your username, or part of your username, in your password." required>
          </div>
              <div class="checkbox">
            <label><input type="checkbox"> I accept the <a href="#">Terms of Conditions</a></label>
          </div>
          <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      </div>
    </div>
  </div>
</div>


<!-- Start of Footer -->
<div class="footer">
  <div class="footerContent">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Footer -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
