<?php

session_start();
$title = 'Dashboard';
require 'ref/startdb.php';
$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT * FROM Customer_server WHERE Email = '$email'");

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){ ?>
  <html>
  <head>
    <title>Dashboard</title>
    <?php include('ref/head.php') ?>
  </head>
  <body>
  <?php include('ref/nav-bar.php') ?>

  <div class="virtualMachines">
    <div class="row">
      <div class="col-lg-2 col-md-2"></div>
      <div class="col-lg-8 col-md-8">
        <h2>Your Virtual Machines</h2>
        <div class="row"> 
        <?php
          if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
              ?>
              <div class="col-md-3 col-sm-3 ">
                <h3><?php echo htmlspecialchars($row['Vmnaam'], ENT_QUOTES, 'UTF-8') ?></h3>
                <a href="#" class="">
                  <div class="thumbnail imgresponsive">
                    <?php if ($row['Operatingsystem'] == '1') {
                      ?> <img src="images/ubuntu.png"> <?php
                    } elseif ($row['Operatingsystem'] == '2') {
                      ?> <img src="images/debian.png"> <?php
                    } else {
                      ?> <img src="images/windows.jpg"> <?php
                    } ?>
                  </div>
                </a>  
                <div class="col1">
                  <div><p><b>Service Level: </b></p></div>                          
                  <div><p><b>CPU:           </b></p></div>
                  <div><p><b>Memory:        </b></p></div> 
                  <div><p><b>Storage:       </b></p></div>                      
                </div>
                <div class="col2">
                  <?php if ($row['Servicelevel'] == '1') {
                    ?> <div><p>Low</p></div><?php
                  } elseif ($row['Servicelevel'] == '2') {
                    ?> <div><p>Medium</p></div><?php
                  } else {
                    ?> <div><p>High</p></div><?php
                  } ?>
                  <div><p><?php echo $row['Cpu'] ?></p></div>
                  <div><p><?php echo $row['Memory'] ?> MB</p></div>   
                  <div><p><?php echo $row['Diskspace'] ?> GB</p></div>
                </div>
              </div> <?php
            }
          } 
        ?>
        </div>
      </div>
    </div>
  </div>

  <?php include("ref/footer.php") ?>
  </body>
  </html>

<?php } else { 
  include("ref/nologin.php");
} 
?>
