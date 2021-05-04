<?php
function check_if_added_to_cart($items_id)
{
    require 'includes/common.php';
    
    $con = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die(mysqli_error($con));
    $user_id = $_SESSION['id'] ;
    $sqlquery= "SELECT * FROM users_items WHERE items_id='$items_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $sqlquery) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>=1)
    {
        return 1;
    }
    else {
        return 0;
    }
    
}
?>
