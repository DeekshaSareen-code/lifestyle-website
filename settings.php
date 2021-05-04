<?php
require 'includes/common.php';
 if(!isset($_SESSION['email']))
 {
     header('location: index.php'); 
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body> 
      
        <?php
          include './includes/header.php';
      ?>
          <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h3>Change Password</h3>
                    <form method="POST" action="settings_script.php" >
                         <div class="form-group">
                            <input type="password"  class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="newpassword" id="newpassword" placeholder="New Password">
                        </div>
                         <div class="form-group">
                            <input type="password"  class="form-control" id="repassword" name="repassword" placeholder="Re-type NewPassword">
                        </div>
                         <input type="submit" value="Change" class="btn btn-primary" name="Change">
                         <?php
                       // echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
         
        <?php
           include 'includes/footercustom.php';
      ?>
    </body>
</html>

