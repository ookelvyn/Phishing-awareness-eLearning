<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `exercise5` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM exercise5 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
           
               $query = "INSERT INTO exercise5 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-success' style='font-size:20px;'>Thanks for selecting an option! Please click the <b>Next ></b> button at the bottom-right to proceed.</div> ";
                $conn->close(); 
            
          }else{
               $msgreg = "<small> <div class='alert alert-danger' style='font-size:20px;'>Please click the <b>Next ></b> button at the bottom-right to proceed </div></small> ";
            }
            
        }
        // End of submit


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Excercise 5 | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">
    <style type="text/css">
      input[type="radio"] {
        margin-top: 6px;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<?php include "sidebarcontent.php" ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: #f5f5f5; position: relative;">
        
        <div class="content-holder" >

          <div class="top-ruler"></div> <!-- End top-ruler -->
          <form method="POST">
            <?php if(isset($msgreg)){ echo $msgreg;} ?>
            
          <div class="questions">
            <h4>
              Prior to now, have you learnt about the seven (7) principles of persuasion? 

            </h4>
          </div> <!-- End question -->
          <div class="answers">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="Yes" required>
              <label class="form-check-label" for="flexRadioDefault1">
                 Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault2" value="No" required>
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
            
          </div> <!-- End answers -->

          <div class="question-button">     
              <button class="btn btn-primary btn-lg" name="submit">Submit</button>          
          </div> <!-- End bottom-button -->
         </form> <!-- End form -->
         
        </div> <!-- End content-holder -->

        <div class="prevnext">
           

             <div class="">
                <a href="exercise-6.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="11-common-target-of-phishing-attacks.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-left"><i class="fa fa-chevron-left"></i>Prev</button>
                </a>
              </div>
        </div> <!-- End prevNext -->

      </div>
      
		</div>

    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>