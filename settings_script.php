<?php
require "includes/common.php";
if (!isset($_SESSION['email']))
{
    header('location:index.php'); 
}
$con= mysqli_connect("mi-linux.wlv.ac.uk/localhost", "1614765", "Epiderm25", "db1614765") or die (mysqli_error($con));
$email=$_SESSION['email'];
//$password=$_SESSION['password'];

$password=(mysqli_real_escape_string($con,$_POST['oldpassword'] ));
$newpassword=(mysqli_real_escape_string($con,$_POST['newpassword']));
$repassword=(mysqli_real_escape_string($con,$_POST['repassword']));
if ($newpassword!= $repassword) {

  header('location: settings.php?error=The two passwords don\'t match');
}

   $select_query = "SELECT password FROM users where email_id= '$email' and password= '$password'";
   $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
   $total_rows_fetched=mysqli_num_rows($select_query_result);
   
   if(mysqli_num_rows($select_query_result) > 0) 
   {
    	$row=mysqli_fetch_array($select_query_result);
    	$r=$row['0'];
        
          if ($password==$r) {
    		$con= mysqli_connect("mi-linux.wlv.ac.uk/localhost", "1614765", "Epiderm25", "db1614765") or die (mysqli_error($con));
    		 $select_query="UPDATE users SET password = '$newpassword' WHERE email_id = '$email' ";
    		    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    		    header('location: settings.php?error=Password Updated');
    	   } 
        
        else{
	 header('location: settings.php?error=Wrong Old Password');
         } }


?>