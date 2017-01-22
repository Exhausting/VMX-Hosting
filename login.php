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
<?php include('ref/nav-bar.php') ?>

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

<?php include('ref/footer.php') ?>
</body>
</html>
