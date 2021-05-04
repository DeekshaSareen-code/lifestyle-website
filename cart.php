<?php
require "includes/common.php";

if(!isset($_SESSION['email'])){
    
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body> 
       <?php
        include 'includes/header.php';
       ?>
       <?php
        $total=0;
        $id = '';
        $user_id= $_SESSION['id'] ;
        $sqlquery = "SELECT * from users_items INNER JOIN items on users_items.items_id=items.id where users_items.user_id='$user_id' and status='Added to cart'"; 
        $result= mysqli_query($con, $sqlquery) or die(mysqli_error($con));
         ?>
        
      <?php
        if(mysqli_num_rows($result)==0)
        {
          echo "Add items to the cart first!";
        }
        else {?>
       
        <div class="container">
             <div class="col-xs-6 col-xs-offset-3">  
            <table class="table">
                <thead>
                <tr>
                     <th>Item Number</th>
                     <th>Item Name</th>
                     <th>Price</th>
                     <th> </th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    
                    while ($row= mysqli_fetch_array($result)) {  
                         $total+= $row["price"];
                         $id .= $row["id"] . ",";
                         echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td> &pound" . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    $id = rtrim($id, ",");
                    echo "<tr><td></td><td>Total</td><td> &pound " . $total . "</td><td><a href='success.php?items_id=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                ?>
                 
                </tbody>   
            </table>
        </div>
        </div>
         <?php }?>
       <?php
        include './includes/footercustom.php';
       ?>
        
    </body>
</html>
