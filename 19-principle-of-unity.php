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
  	<title>Priciple of unity | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">
    <style type="text/css">
      #content .content-holder{
        width: 90%;
        height: 50%;
        margin-left: 2.5%;
        height: auto;
        background-color: #fff;
        position: absolute;
      }

      video::-webkit-media-controls-timeline {
        display: none;
      }
      /* Hide progress bar control on video in Firefox */
      video::-webkit-media-controls-timeline {
        display: none !important;
      }

      video::-moz-range-track {
        display: none !important;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<?php include "sidebarcontent.php" ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: #f5f5f5; position: relative;">
        
        <div class="content-holder">
          <video controls autoplay width="100%" id="my-video">
            <source src="videos/19-principle-of-unity.mp4" type="video/mp4">
              <source src="video.webm" type="video/webm">
                <track default src="subtitle/19-principle-of-unity.vtt">
                Your browser does not support the video tag.
          </video>
         
        </div> <!-- End content-holder -->

        <div class="prevnext">
             <div class="">
                <a href="summary-of-persuasion-principles.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-right" id="next-button" style="display: none;">Next <i class="fa fa-chevron-right"></i></button>
                </a>
              </div>
              <div class="">
                <a href="18-principle-of-consensus.php">
                  <button class="btn btn-outline-secondary btn-lg bottom-left"><i class="fa fa-chevron-left"></i>Prev</button>
                </a>
              </div>
        </div> <!-- End prevNext -->

      </div>
      
		</div>
    <script>
      const video = document.getElementById('my-video');
      const nextButton = document.getElementById('next-button');

      // Add an event listener to the video element to detect when the video finishes playing
      video.addEventListener('ended', () => {
        // Show the next button
        nextButton.style.display = 'block';
      });
      </script>
    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>