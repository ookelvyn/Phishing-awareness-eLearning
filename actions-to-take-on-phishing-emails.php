<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `exercise1` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM exercise1 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
            if($answer == 'A') {
               $query = "INSERT INTO exercise1 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<small> <div class='alert alert-success' style='font-size:20px;'>Correct!!! Most organizations often strengthen their security networks and firewalls making it challenging for hackers to breach their systems, however, the weakness of staff members are usually exploited by cyber attackers using tactics to decieve them into giving sensitive information that can make allow them gain access to the organization's network. </div></small> ";
                $conn->close(); 
            }else{
               $query = "INSERT INTO exercise1 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<small> <div class='alert alert-danger' style='font-size:20px;'>Wrong... Most organizations often strengthen their security networks and firewalls making it challenging for hackers to breach their systems, however, the weakness of staff members are usually exploited by cyber attackers using tactics to decieve them into giving sensitive information that can make allow them gain access to the organization's network. </div></small> ";
                $conn->close();
            }
          }else{
               $msgreg = "<small> <div class='alert alert-danger' style='font-size:20px;'>Please click the <b>Next ></b> button at the bottom-right to proceed </div></small> ";
            }
            
        }
        // End of submit


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Actions to take on phishing emails | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">
  </head>
  <style type="text/css">
    .me-auto{
      line-height: 1.5;
    font-weight: 400;
    font-family: "Poppins", Arial, sans-serif;
    color: #000;
    font-size: 18px;
    color: grey;
    }

    .fw-bold h4{
    color: #013860;
    font-weight:500;
    font-size: 20px
        }
  </style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<?php include "sidebarcontent.php" ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: #f5f5f5; position: relative;">
        
        <div class="content-holder" >

          <!-- <div class="top-ruler"></div> --> <!-- End top-ruler -->
        
            
          <div class="questions">
            <h4>
              Actions to Take when you Suspect a Phishing email.
            </h4>
          </div> <!-- End question -->
          <div class="answers" style="padding-bottom: 10px;">
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"> <h4>Here, will outline the actions to take when you suspect a phishing email, helping you stay safe and secure in the digital world.</h4></div>
                </div>  
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  Do not click on any links or download any attachments in the email.
                </div> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  Mark the email as spam or junk to help your email provider better filter such messages in the future.
                </div> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  Delete the email from your inbox and trash folder.
                </div> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  If you provided any sensitive information, such as your password or credit card details, immediately change your password and notify your bank or credit card company.
                </div> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  Consider reporting the phishing attempt to the relevant authorities, such as your company's IT department or the Anti-Phishing Working Group
                </div> 
              </li>
            </ol>
            
          </div> <!-- End answers -->

          
       
         
        </div> <!-- End content-holder -->

        <div class="prevnext">
           

             <div class="">
                <a href="22-wrap-up.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="exercise-8.php">
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