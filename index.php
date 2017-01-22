<!DOCTYPE html>
<?php
session_start();
?>

<html>
<head>
  <title>VMX Hosting</title>
  <?php include('ref/head.php') ?>
</head>

<body>
<?php include('ref/nav-bar.php') ?>

<div class="container-float">
  <div class="row">
    <div class="col-sm-3 col-xs-2"></div>
    <div class="col-sm-6 col-xs-8">
      <div id="homeHeader">
        <h1>VMX Hosting</h1>
        <h3>Your Partner For Reliable Hosting</h3>
        <hr>
        <form>
          <button type="submit" class="btn-default btn-lg" formaction="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Get Started!</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class= "row">
  <hr class="primary">
</div>

<div class="spacer">
  <div class="content1">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>I'm serious as a heart attack</h2>
        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>

        <h2>No, motherfucker</h2>
        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>

        <h2>Hold on to your butts</h2>
        <p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>
      </div>
    </div>
  </div>
</div>

<?php if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
<div class="spacer createVM">
  <div class="container">
    <div class="row">
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
    </div>
  </div>
</div>
<?php } 
else{ ?>
<div class="spacer createVM">
  <div class="container">
    <div class="row">
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
    </div>
  </div>
</div>
<?php } ?>

<div class="spacer">
  <div class="content1">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <h2>I can do that</h2>
        <p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>

        <h2>We happy?</h2>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>

        <h2>I'm serious as a heart attack</h2>
        <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>
      </div>
    </div>
  </div>
</div>

<?php include("ref/footer.php") ?>

</body>
</html>
