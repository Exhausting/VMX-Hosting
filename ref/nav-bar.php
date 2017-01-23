<?php
$title = $_SESSION['title'];

//kijk als de sessie is gestart & kijk als de login sessie true is. info komt uit login.php
if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">VMX</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="<?php if($title =='Home'){echo 'active';}?>"><a href="index.php">Home</a></li>
          <li class="<?php if($title =='Contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php if($title =='Create'){echo 'active';}?>"><a href="create.php">Create VM</a></li>
          <li class="<?php if($title =='Dashboard'){echo 'active';}?>"><a href="dashboard.php">Dashboard</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php } 
else{ ?>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">VMX</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li class="<?php if($title =='Home'){echo 'active';}?>"><a href="index.php">Home</a></li>
          <li class="<?php if($title =='Register'){echo 'active';}?>"><a href="signup.php">Register</a></li>
          <li class="<?php if($title =='Contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
        </ul>
        <form method="post" action="login-sql.php" id="signin" class="navbar-form navbar-right" role="form">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
          </div>            
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </nav>
  <?php }

?>