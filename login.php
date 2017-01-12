<?php
session_start();
?>



<html>
<head>
	<title></title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="vmx.css">
  <script src="https://use.fontawesome.com/f288586ec5.js"></script>
</head>
<body>
<?php include('nav-bar.php') ?>
<!--
<nav class="navbar navbar-default">
  <div class="container">
    //Brand and toggle get grouped for better mobile display
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">VMX Hosting</a>
    </div>

  //   Collect the nav links, forms, and other content for toggling
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
        <li class="active"><a href="login.html">Login <i class="fa fa-user" aria-hidden="true"></i></a></li>
      </ul>
    </div>< // /.navbar-collapse
  </div> // /.container-fluid
</nav>
// End of Menu
 -->

<div class="container bgim-1">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    	<div id="form">
				<h2>Log in</h2>
				<form method="post" action="login-sql.php" id="signin" class="navbar-form navbar-right" role="form">
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" name='email' id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name='password' id="password" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label><input type="checkbox"> Remember me</label>
				  </div>
				  <button type="submit" class="btn btn-default" name='login' formaction="dashboard.html">Submit</button>
				</form>
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
