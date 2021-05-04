<?php
require "includes/common.php";
$item_id = $_GET['id'];
$user_id= $_SESSION['id'];
$sqlquery= "INSERT INTO users_items(user_id, items_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
mysqli_query($con, $sqlquery) or die(mysqli_error($con));
header('location: product.php');


?> 