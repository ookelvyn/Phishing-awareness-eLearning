<?php 
  session_start();

  require_once 'db.php';

  if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

 if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted


            $table1_query = "SELECT * FROM quiz1 WHERE email_address='$email'";
            $table1_result = $conn->query($table1_query);

            // Check if the name "kelvin" exists in table2
            $table2_query = "SELECT * FROM quiz2 WHERE email_address='$email'";
            $table2_result = $conn->query($table2_query);

            $table3_query = "SELECT * FROM quiz3 WHERE email_address='$email'";
            $table3_result = $conn->query($table3_query);

            $table4_query = "SELECT * FROM quiz4 WHERE email_address='$email'";
            $table4_result = $conn->query($table4_query);

            $table5_query = "SELECT * FROM quiz5 WHERE email_address='$email'";
            $table5_result = $conn->query($table5_query);

            $table6_query = "SELECT * FROM exercise1 WHERE email_address='$email'";
            $table6_result = $conn->query($table6_query);

            $table7_query = "SELECT * FROM exercise2 WHERE email_address='$email'";
            $table7_result = $conn->query($table7_query);

            $table8_query = "SELECT * FROM exercise3 WHERE email_address='$email'";
            $table8_result = $conn->query($table8_query);

            $table9_query = "SELECT * FROM exercise4 WHERE email_address='$email'";
            $table9_result = $conn->query($table9_query);

            $table10_query = "SELECT * FROM exercise5 WHERE email_address='$email'";
            $table10_result = $conn->query($table10_query);

            $table11_query = "SELECT * FROM exercise6 WHERE email_address='$email'";
            $table11_result = $conn->query($table11_query);

            $table12_query = "SELECT * FROM exercise7 WHERE email_address='$email'";
            $table12_result = $conn->query($table12_query);

            $table13_query = "SELECT * FROM exercise8 WHERE email_address='$email'";
            $table13_result = $conn->query($table13_query);



            // If the name "kelvin" exists in both tables, redirect to end.php
            if ($table1_result->num_rows > 0 && $table2_result->num_rows > 0 && $table3_result->num_rows > 0 && $table4_result->num_rows > 0 && $table5_result->num_rows > 0 && $table6_result->num_rows > 0 && $table7_result->num_rows > 0 && $table8_result->num_rows > 0 && $table9_result->num_rows > 0 && $table10_result->num_rows > 0 && $table11_result->num_rows > 0 && $table12_result->num_rows > 0 && $table13_result->num_rows > 0) {
                
                // insert into completed table
              $query = "INSERT INTO completed (id,email_address,created_at) VALUES('','$email','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));

                header("Location: concluded.php");
                exit();
            }
            // If the name "kelvin" does not exist in both tables, display a message
            else {
                // echo "Name does not exist in both tables."; you skipped some excercise
                 $msg = "<div class='alert alert-danger text-center'>Looks like you skipped some Excercises, could you please track back and check. You can contact 08036289672 on whatsapp for quick help.</div>";

            }

            // Close database connection
            $conn->close();


            }


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>End of course | eLearning</title>
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
        <?php if(isset($msg)){ echo $msg;} ?>
        <div class="top-ruler"></div>

        <div class="text-box" style="background-color: #fff; color: #013860; padding-top: 15px">
          
          <p class="content-text">
            Thank you for completing our e-course on  phishing attacks and the Principles of Persuasion used by attackers. <br>To help us improve our course, we would appreciate it if you could take a few minutes to fill out a short questionnaire survey. Your feedback is essential to ensure that we are meeting the needs of our learners and providing the best possible training. 
          </p>
          <p class="content-text" style="text-align: center;">
            <a href="https://forms.gle/RUs8i2XuUTDMtZxE8" target="_blank"> <button type="button" class="btn btn-primary btn-lg" >Take Survey</button></a>
          </p>

          

          <h1 class="mb-4" style="color: #013860">Thank you!</h1>
          
        </div>

        <div class="image-container">
          <img src="images/welcome.jpg" alt="eLearning">
        </div>

        <div class="" style="text-align: center; margin-top: 10px">
          <a href="quiz-5.php">
          <button class="btn btn-outline-secondary btn-lg"><i class="fa fa-chevron-left"></i> Prev </button>
        </a>
        <form method="POST">
        <!-- <a href="01-whats-in-this-course-for-you"> -->
          <button class="btn btn-outline-secondary btn-lg" name="submit">End course </button>
        <!-- </a> -->
        </form>
        </div>
        
       
      </div>
		</div>

    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>