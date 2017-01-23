<?php

session_start();
$title = 'Create';

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <html>
  <head>
    <?php include('ref/head.php') ?>


<script type="text/javascript">
$('#Servicelevel').on('change', function(){
   console.log($('#Servicelevel').val());
    $('#Cpu').html('');
    $('#Memory').html('');
    $('#Storage').html('');

    if($('#Servicelevel').val()==1){
        $('#Cpu').append('<option value="1">1</option>');
        $('#Memory').append('<option value="1">1</option>');
        $('#Storage').append('<option value="1">100</option>');

    }else if($('#Servicelevel').val()==2){
        $('#Cpu').append('<option value="2">2</option>');
        $('#Memory').append('<option value="2">4</option>');
        $('#Storage').append('<option value="2">150</option>');

    }else if($('#Servicelevel').val()==3){
        $('#Cpu').append('<option value="3">4</option>');
        $('#Memory').append('<option value="3">8</option>');
        $('#Storage').append('<option value="3">100</option>');
    }
});
</script>;


  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>

  <div class="background">
    <div class="content1">
      <div class="pageHeader">
        <h2>Create a new Virtual Machine</h2>
      </div>
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

  <div class="spacer">
    <div class="container " id="form">
      <form action="ref/create-server.php" method="post">
        <div class="col-md-5">
          <h2>Hardware Settings</h2>
          <div class="form-group">
            <label for="serviceLevel">Select Service Level:</label>
            <select class="form-control" id="ServiceLevel" name="service_level" required>
              <option disabled selected value> -- select an option -- </option>
              <option value="1">Package-1-Low</option>
              <option value="2">Package-2-Medium</option>
              <option value="3">Package-3-High</option>
</select>
          </div>
          <div class="form-group">
            <label for="cpu">Number of cores:</label>
            <select class="form-control" id="Cpu" name="cpu" required>
              <option disabled selected value> -- select an option -- </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">4</option>
    </select>
          </div>
          <div class="form-group">
            <label for="memory">Ammount of Memory:</label>
            <select class="form-control" id="Memory" name="memory" required>
              <option disabled selected value> -- select an option -- </option>
              <option value="1">1GB</option>
              <option value="2">4GB</option>
              <option value="3">8GB</option>
    </select>
          </div>
          <div class="form-group">
            <label for="disk_space">Ammount of Disk Space:</label>
            <select class="form-control" id="Storage" name="disk_space" required>
              <option disabled selected value> -- select an option -- </option>
              <option value="1">100GB SAS</option>
              <option value="2">150GB SAS</option>
              <option value="3">100GB SSD</option>
      </select>
          </div>
        </div>
        <div class="col-md-7">
          <h2>OS Settings</h2>
          <div class="form-group">
            <label for="vm-name">Virtual Machine Name: </label>
            <input type="text" class="form-control" id="vm_name" name="vm_name" placeholder="Virtual Machine Name" required>
          </div>
          <div class="form-group">
            <label for="operating-system">Operating System: </label>
            <select class="form-control" id="operating_system" name="operating_system"  required>
              <option disabled selected value> -- select an option -- </option>
              <option value="1">Ubuntu 16.04 LTS</option>
              <option value="2">Debian 8</option>
              <option value="3">Windows Server 2016</option>
            </select>
          </div>
          <div class="form-group">
            <label for="activation-key">Windows Server 2016 Activation Key:</label>
            <input type="text" class="form-control" id="activation_key" name="activation_key" placeholder="Optional">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> I accept the <a href="terms.php">Terms of Conditions</a></label>
          </div>
          <button type="submit" name="submit" class="btn btn-default pull-right">Submit</button>
        </div>
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
