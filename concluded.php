<?php 
  session_start();

  require_once 'db.php';

  if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

 


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Exit course | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">

  </head>
  <body>
    
		
		<div class="wrapper d-flex align-items-stretch">
			
      <?php include "sidebarcontent.php" ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: #E7E9EB">
     
        <div class="top-ruler"></div>

        <div class="text-box" style="background-color: #fff; color: #013860; padding-top: 15px">
          
        <p style="font-weight: bold; font-size: 15px; text-align: center;">Please fill the survey if you haven't. <a href="https://forms.gle/RUs8i2XuUTDMtZxE8" target="_blank">Click here to launch survey</a></p>
          <p class="content-text" style="text-align: center;">
            <a href="logout.php"> <button type="button" class="btn btn-primary btn-lg" >Exit this window </button></a>
          </p>

          

          <h1 class="mb-4" style="color: #013860">Thank you!</h1>
          
        </div>

        <div class="image-container">
          <img src="images/welcome.jpg" alt="eLearning">
        </div>

      
        
       
      </div>
		</div>

    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>