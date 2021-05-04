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
        <title>Success page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body> 
      <?php
         
          $item_id = $_GET['items_id'];
          $user_id = $_SESSION['id'];
        $query= " UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND items_id IN  ('$item_id') AND status='Added to cart'";
        $update_name_result = mysqli_query($con, $query) or die(mysqli_error($con). "query not executed");
      ?>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                &nbsp;
                <div class="alert alert-success">
                    
                    <strong>Your order is confirmed</strong> Thank you for shopping with us.<br>
                    <a href="product.php">Click here </a> to purchase any other item.
                </div>
            </div>
        </div>
          
        <?php
           include 'includes/footercustom.php';
         ?>
    </body>
</html>




