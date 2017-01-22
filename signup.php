<?php
session_start();
$title = 'Register';
?>

<html>
<head>
  <?php include('ref/head.php') ?>
</head>
<body>
<?php include('ref/nav-bar.php') ?>


<div class="container bgim-1">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div id="form">
        <h2>Create Account</h2>
        <form action="User-register.php" method="post">
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
      </div>
    </div>
  </div>
</div>

<?php include('ref/footer.php') ?>
</body>
</html>
