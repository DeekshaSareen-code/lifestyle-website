<?php
require "includes/common.php";
if (isset($_SESSION['email']))
    { header('location: product.php'); }
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
            include 'includes/header.php';
        ?>
      <style>
            .g-recaptcha {
                margin-bottom: 10px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><b>Sign Up</b></h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" id="name" name="name" placeholder="Name" required="true" >
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" id="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            
                        </div>
                         <div class="form-group">
                            <input type="password"  class="form-control" id="password" name="password" placeholder="Password" required = "true" pattern=".{6,}">
                             
                         </div>
                        <div class="form-group">
                        <input type="tel"  class="form-control" name="contact" id="contact" placeholder="Contact" required="true" pattern="(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" id="city" placeholder="City" required="true" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="address" id="address" placeholder="Address">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Lcal8gZAAAAANUUX9-ZHLoA9BW0mPm3X1RNhu0X"></div>
                        <input type="submit" value="Submit" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div> 
        
      
        <?php
         include 'includes/footercustom.php';
        ?>
        
       
    </body>
</html>
