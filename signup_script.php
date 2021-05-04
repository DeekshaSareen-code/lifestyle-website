<?php
require "includes/common.php";

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city= $_POST['city'];
$address= $_POST['address'];

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$curl= curl_init();
//var_dump($_POST);
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER=>1,
    CURLOPT_URL=>'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST=>1,
    CURLOPT_POSTFIELDS=>[
        'secret' => '6Lcal8gZAAAAAKEZMLuHUQj_P-dbddSKJKukZF1X',
        'response'=> $_POST['g-recaptcha-response'],
        
    ]
    ]);

 $response = json_decode(curl_exec($curl));
$sqlquery = "SELECT id from users WHERE email_id= '$email' ";

$query_result = mysqli_query($con, $sqlquery) or die(mysqli_error($con));

if(mysqli_num_rows($query_result)>0)
{
    echo "email id already exists";
   // header('location: login.php');
}
else
{

$user_registration_query = "insert into users(name, email_id, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address');";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['id'] = mysqli_insert_id($con); 
header('location: product.php');

   
}
?>