<?php
require "includes/common.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Login Page</title>
         <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
       <?php
      include 'includes/header.php';
      ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><center>Login</center></h4>
                        </div>
                        
                        <div class="panel-body" >
                            
                            <div>
                                <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                  <b>Email:</b>    <input type="email"  class="form-control" id="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>  
                                <div class="form-group">
                                  <b>Password :</b>  <input type="password"  class="form-control" name="password" id="password" placeholder="Password" required="true" pattern=".{6,}">
                                </div>
                                    
                                    

                                  <button class="btn btn-primary btn-block">Login</button>
                                </form>
                            </div> 
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="sign_up.php"> Click here to Sign Up </a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
           include 'includes/footercustom.php';
        ?>
    </body>
</html>