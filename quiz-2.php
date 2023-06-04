<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `quiz2` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM quiz2 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
            if($answer == 'A') {
               $query = "INSERT INTO quiz2 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-success' style='font-size:20px;'>Correct!!! The attached form URL actually points to a suspicious domain: rikky.net. Also, the sender's email is not spelt correctly. Please click the <b>Next ></b> button at the bottom-right to proceed.</div> ";
                $conn->close(); 
            }else{
               $query = "INSERT INTO quiz2 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-danger' style='font-size:20px;'>Wrong... The attached form URL actually points to a suspicious domain: rikky.net. Also, the sender's email is not spelt correctly. Please click the <b>Next ></b> button at the bottom-right to proceed.</div>";
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
  	<title>Quiz 2 | eLearning</title>
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
              Quiz 2: Imagine you work for Zenith bank and you receive an email like the one shown below. Can you determine if the email is a phishing email or a legitimate one? <p style="color: grey"> Hint - Remeber to check the sender's name, email address, check URLs, attachments and links.</p>
            </h4>
          </div> <!-- End question -->
          <div class="email-box">
            <div class="email-head" style="padding: 20px;">
              <p style="font-size: 20px; color: #212121; margin-bottom: 0px; padding-bottom: 0px">
               From: <strong>Anthony Clement</strong> &lt;<span style="color: gray;">A.clement@zenitbankk.com</span>&gt;
              </p>
              <p style="margin: 0px; font-size: .875rem"> to me <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>

            </div> <!-- End email-head -->

            <div class="email-body" style="; align-content: center; background-color: #F0EEED; padding: 30px 30px;">
              <div class="inner1" style="margin: 2px 10px 0 10px; background-color: #fff; font-size: 15px; padding: 20px;">
                <p>Hello,</p>
                <p>I hope this email finds you well. As part of our HR procedures, we kindly request your attention to fill out a form required for our records. The form contains important information, and it will only take a few minutes to complete.</p>
                
                <p>Please find the attached form to this email. Once completed, kindly send it back to me by email. If you have any questions or concerns, please don't hesitate to reach out to me.</p>

                <p>Thank you for your cooperation.</p>

                <p><a onclick="return false;" href="https://drive.google.com.download-doc.rikky.net/SDJND8kd88">Form to fill</a></p>

                <p>Best regard, <br>Anthony Clement <br> HR Representative</p>

              </div> <hr>
              <div style="display: flex; justify-content: center;align-items: center; ">
              <img style="left: 50%; height: 80px" src="images/zenith-logo.png">
            </div>
            </div>

          </div> <!-- End of email spot -->




          <div class="answers">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="A" required>
              <label class="form-check-label" for="flexRadioDefault1">
                 It's a phishing email
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault2" value="B" required>
              <label class="form-check-label" for="flexRadioDefault2">
                It's a legitimate email
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
                <a href="quiz-3.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="quiz-1.php">
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