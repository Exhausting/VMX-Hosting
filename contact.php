<?php
session_start();
?>

<html>
<head>
	<title>Contact us</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <?php include('head.php') ?>
</head>
<body>

<?php include('nav-bar.php') ?>

<!-- Start Google Maps Widget -->
<div id="mapHeader">
  <h3>Where we are</h3>  
</div> 
<div id="map"></div>
<script>
  function initMap() {
    var hva = {lat: 52.359215 , lng: 4.909794};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: hva
    });
    var marker = new google.maps.Marker({
      position: hva,
      map: map
    });
  }
</script>
<!-- End Google Maps Widget -->

<!-- Start Contact Form -->
<div class="container contactForm">
  <h3>Contact</h3>
  <form action="smtp.php" class="well form-horizontal" method="POST">
    <div class="form-group">
      <div class="col-md-2 col-sm-2"></div>
      <label class="col-md-2 col-sm-2 control-label">Name:*</label>
      <div class="col-md-6 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" id="Naam" name="contact_form_naam" placeholder="Name" required>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2 col-sm-2"></div>
      <label class="col-md-2 col-sm-2 control-label">Email:*</label>
      <div class="col-md-6 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="text" class="form-control" id="email" name="contact_form_email" placeholder="Email" required>
        </div>
      </div> 
    </div>

    <div class="form-group">
      <div class="col-md-2 col-sm-2"></div>
      <label class="col-md-2 col-sm-2 control-label">Phone Number:</label>
      <div class="col-md-6 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
          <input type="text" class="form-control" id="telefoon" name="contact_form_telefoon" placeholder="Phone number">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2 col-sm-2"></div>
      <label class="col-md-2 col-sm-2 control-label">Subject:*</label>
      <div class="col-md-6 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"></span>
          <input type="text" class="form-control" id="onderwerp" name="contact_form_onderwerp" placeholder="Subject" required>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2 col-sm-2"></div>
      <label class="col-md-2 col-sm-2 control-label">Comment:*</label>
      <div class="col-md-6 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"></span>
          <textarea class="form-control" id="exampleTextarea" rows="4" name="contact_form_text" placeholder="Type your comment here" required></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4 col-sm-2"></div>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- End Contact Form -->

<?php include("footer.php") ?>

<script async defer 
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt67W5eE2BoAi-c1_Qe-5AcBTJbpA0lT8&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</body>
</html>
