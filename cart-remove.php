<?php
include 'includes/common.php';
//if(isset($_GET['id'])&& is_numeric($_GET['id'])){
 $item_id=$_GET['id'];
 $user_id=$_SESSION['id'];


$sqlquery= "DELETE FROM users_items WHERE items_id= '$item_id' AND user_id= '$user_id' ";
$result= mysqli_query($con, $sqlquery) or die(mysqli_error($con));

 header('location: cart.php'); 

//}
 ?>