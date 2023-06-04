<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }

        $email = $_SESSION['email']; 
        $members = $conn->query("SELECT * FROM `exercise8` WHERE `email_address`='$email'");
        $row = mysqli_fetch_assoc($members);



        if(isset($_POST['submit']))
        {
            $email = $_SESSION['email'];  
            $answer = mysqli_real_escape_string($conn, $_REQUEST['option']);
            $timestamp = date('Y-m-d H:i:s');
            // Check if answer has been submitted

            $check_email = $conn->query("SELECT email_address FROM exercise8 WHERE email_address='$email'");
            $count=$check_email->num_rows;
            if ($count==0) {
                     

            // If answer is correct
            if($answer == 'D') {
               $query = "INSERT INTO exercise8 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-success' style='font-size:20px;'>Correct!!! Most times, suspicious URL contains misspellings, extra letters, or added symbols, and might prompt you to download a file or install a software. Please click the <b>Next ></b> button at the bottom-right to proceed.</div>";
                $conn->close(); 
            }else{
               $query = "INSERT INTO exercise8 (id,email_address,answer,created_at) VALUES('','$email','$answer','$timestamp')";
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            
              $msgreg = "<div class='alert alert-danger' style='font-size:20px;'>Wrong answer... Most times, suspicious URL contains misspellings, extra letters, or added symbols, and might prompt you to download a file or install a software. Please click the <b>Next ></b> button at the bottom-right to proceed.</div> ";
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
  	<title>Excercise 8 | eLearning</title>
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

      .answe
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
              Which of the buttons or URLs have a suspicious link? Place your mouse on them and check the bottom-left of your screen for the url link.
            </h4>
          </div> <!-- End question -->
          <div class="answers">

            <div style="margin-left: 20%; margin-bottom: 5%"> 
              <a onclick="return false;" href="https://www.phishing.org"> 
                <button class="btn btn-primary btn-lg">Button A</button>
              </a>

              <a onclick="return false;" href="https://www.google.com/">
                <button class="btn btn-primary btn-lg" style="margin-left: 5%;">Button B</button>
              </a>
            </div>
            <div style="margin-left: 20%; margin-bottom: ">
              <a onclick="return false;" href="https://www.cert.gov.ng/">
                <p style="font-size: 20px; font-family: sans-serif;">URL 1</p>
              </a>
              <a onclick="return false;" href="http://tinnyyurl.com/3t9afg77fgt6cx">
                <p style="font-size: 20px; font-family: sans-serif;">URL 2</p>
              </a>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" value="A" required>
              <label class="form-check-label" for="flexRadioDefault1">
                Button A
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault2" value="B" required>
              <label class="form-check-label" for="flexRadioDefault2">
                Button B
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault3" value="C" required>
              <label class="form-check-label" for="flexRadioDefault3">
                URL 1
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="option" id="flexRadioDefault4" value="D" required>
              <label class="form-check-label" for="flexRadioDefault4">
                URL 2
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
                <a href="actions-to-take-on-phishing-emails.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="exercise-7.php">
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