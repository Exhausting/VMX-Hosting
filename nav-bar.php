<?php

//kijk als de sessie is gestart & kijk als de login sessie true is. info komt uit login.php
if (isset($_SESSION["login"]) && $_SESSION["login"] == true){

echo'
  <nav class="navbar navbar-inverse">

            <div class="container-fluid">

                <div class="navbar-header">

                    <a class="navbar-brand" href="index.php">SMX</a>

                </div>

                <ul class="nav navbar-nav">

                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Support</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>

                </ul>

            </div>

        </nav>
        
';}


else{

echo'
 <nav class="navbar navbar-inverse">

            <div class="container-fluid">

                <div class="navbar-header">

                    <a class="navbar-brand" href="index.php">SMX</a>

                </div>

                <ul class="nav navbar-nav">

                        <li><a href="index.php">Home</a></li>
                        <li><a href="User-register.php">Register</a></li>
                        <li><a href="contact.php">Support</a></li>
                        

                </ul>
                <form method="post" action="login.php" id="signin" class="navbar-form navbar-right" role="form">

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
</nav>
           ';     }





                ?>