<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `quiz1` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM quiz1 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
            if($answer == 'A') {
               $query = "INSERT INTO quiz1 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-success' style='font-size:20px;'>Correct!!! From observation, you could see that the sender's email is misspelled, and if you hover on the attachment link, you would see it has a suspicious domain: accessbank-plcnig01293.com. Please click the <b>Next ></b> button at the bottom-right to proceed.</div> ";
                $conn->close(); 
            }else{
               $query = "INSERT INTO quiz1 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-danger' style='font-size:20px;'>Wrong... From observation, you could see that the sender's email is misspelled, and if you hover on the attachment link, you would see it has a suspicious domain: accessbank-plcnig01293.com. Please click the <b>Next ></b> button at the bottom-right to proceed.</div>";
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
  	<title>Quiz 1 | eLearning</title>
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
              Quiz 1: Imagine receiving an email like the one shown below. Can you determine if the email is a phishing email or a legitimate one? <p style="color: grey"> Hint - Remeber to check the sender's name, email address, check URLs, attachments and links.</p>
            </h4>
          </div> <!-- End question -->
          <div class="email-box">
            <div class="email-head" style="padding: 20px;">
              <p style="font-size: 20px; color: #212121; margin-bottom: 0px; padding-bottom: 0px">
               From: <strong>Victor Ademola</strong> &lt;<span style="color: gray;">victor.ademola@acccesssbankplc.com</span>&gt;
              </p>
              <p style="margin: 0px; font-size: .875rem"> to me <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></p>

            </div> <!-- End email-head -->

            <div class="email-body" style="; align-content: center; background-color: #F0EEED; padding: 30px 30px;">
              <div class="inner1" style="margin: 2px 10px 0 10px; background-color: #fff; font-size: 15px; padding: 20px;">
                <p>Hello,</p>
                <p>We came across your profile on LinkedIn and were impressed by your experience in compliance. We would like to offer you the position of Compliance Officer in our organization.</p>
                <p>Please download the attachment to view job details</p>

                <p><a onclick="return false;" href="http://accessbank-plcnig01293.com">Attachment: JD, compliance officer</a></p>

                <p>Best regard, <br>Victor Ademola <br> Access Bank</p>

              </div> <hr>
              <div style="display: flex; justify-content: center;align-items: center;">
              <img style="left: 50%" src="images/accesslogo.png">
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
                <a href="quiz-2.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="22-wrap-up.php">
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