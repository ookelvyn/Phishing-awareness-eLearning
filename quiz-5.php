<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `quiz5` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM quiz5 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
            if($answer == 'C') {
               $query = "INSERT INTO quiz5 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-success' style='font-size:20px;'>Correct!!! It's the principle of consensus, whereby people tend to look to the actions of others in order to determine their own. The email is suggesting a new product to James, persuading him by letting him know that so many customers have given positive feedback for same product. Please click the <b>Next ></b> button at the bottom-right to proceed.</div> ";
                $conn->close(); 
            }else{
               $query = "INSERT INTO quiz5 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-danger' style='font-size:20px;'>Wrong... It's the principle of consensus, whereby people tend to look to the actions of others in order to determine their own. The email is suggesting a new product to James, persuading him by letting him know that so many customers have given positive feedback for same product. Please click the <b>Next ></b> button at the bottom-right to proceed.</div>";
                $conn->close();
            }
          }else{
               $msgreg = "<small> <div class='alert alert-danger' style='font-size:20px;'>You already chose an answer for this question. Please click the <b>Next ></b> button at the bottom-right to proceed </div></small> ";
            }
            
        }
        // End of submit


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Quiz 5 | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">
    <style type="text/css">
      input[type="radio"] {
        margin-top: 10px;
      }

      #content .content-holder .email-box{
        border: 1px solid #BACDDB;
        margin: 35px 35px;
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
             Quiz 5: What persuasion principle is utilized in this email below? 
            </h4>
          </div> <!-- End question -->
          <div class="email-box">
            <div class="email-head" style="padding: 20px;">
              <p style="font-size: 20px; color: #212121; margin-bottom: 0px; padding-bottom: 0px">
                <strong>Deal Breaker Finance</strong> &lt;<span style="color: gray;">info@dealbreakerfinance.com</span>&gt;
              </p>
              <p style="margin: 0px; font-size: .875rem"> to me <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>
              <p>Subject: New Product Launch - Get 10% Interest on Your Savings</p>
            </div> <!-- End email-head -->

            <div class="email-body" style="; align-content: center; background-color: #F0EEED; padding: 30px 30px;">
              <div class="inner1" style="margin: 2px 10px 0 10px; background-color: #fff; font-size: 15px; padding: 20px;">
                <p>Dear James,</p>
                <p>We are excited to announce the launch of our newest product, which has been receiving rave reviews from our current customers.</p>
                
                <p>Our innovative new product has already helped hundreds of satisfied customers just like you to achieve their financial goals. Here are some of the benefits that our customers have reported experiencing:</p>
                <p>Higher interest rates</p>
                <p>Easy access to funds</p>
                <p>24/7 customer support</p>

                <p>We understand that it can be difficult to make financial decisions, but you don't have to take our word for it. Many of our customers have already shared their positive experiences with our product, and we would like to invite you to join them.</p>               

                <p>Don't miss out on this opportunity to grow your savings with a trusted financial institution. Sign up for our new product today and start experiencing the benefits of social proof for yourself! </p>
                
                <p>Best regards</p>
                DealBreaker Finance
              </div> <hr>
          
            </div>

          </div> <!-- End of email spot -->

          <div class="answers">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="A" required>
              <label class="form-check-label" for="flexRadioDefault1">
                 Principle of Liking
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault2" value="B" required>
              <label class="form-check-label" for="flexRadioDefault2">
                Principle of authority
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault3" value="C" required>
              <label class="form-check-label" for="flexRadioDefault3">
                Principle of consensus
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault4" value="D" required>
              <label class="form-check-label" for="flexRadioDefault4">
                Principle of unity
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
                <a href="end.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="quiz-4.php">
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