<?php
require "includes/common.php";
if (isset($_SESSION['email']))
    header('location: product.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap project </title>
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
        <div id= "banner-image">
             <div class= “container”>
                 <div id="banner-content">
                     <h1> We sell lifestyle.</h1>
                     <p> Flat 40% OFF on premium brands </p>
                     <a href="product.php" class="btn btn-danger btn-lg active"> Shop Now</a>
                 </div>
             </div>
        </div>  
        
      <?php
           include 'includes/footer.php';
      ?>
    </body>
</html>