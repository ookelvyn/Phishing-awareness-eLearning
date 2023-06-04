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
  	<title>Welcome | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">

<style type="text/css">
  #sidebar {
/*  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 50;
  overflow-y: auto;*/
}





</style>
  </head>
  <body>
    
		
		<div class="wrapper d-flex align-items-stretch">
			
      <?php include "sidebarcontent.php" ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        
        <div class="top-ruler"></div>

        <div class="text-box">
          <h1 class="mb-4">Welcome</h1>
          <p class="content-text" style="padding: 0 60px 20px 60px">
            Welcome to our e-learning course on phishing attacks and the Principles of Persuasion used by attackers. We're excited to have you here and eager to share our knowledge with you. This course is designed to provide you with the essential information you need to identify and prevent phishing attacks, which have become increasingly common in today's digital world. <b>The course is designed for the purpose of research.</b>
          </p>
          <div class="alert alert-danger" style="border-radius: 0;">
            <h2 class="text-center">Instruction</h2>
            <p>For better experience, use Chrome browser for this course, and enable auto-play for the videos if it prompts you to.</p>
            <p> The left-side menu on the screen acts only as a guide for the course and is non-functional until you complete the course and choose to revisit it. Only the "Welcome" and "Logout" menus are currently active. </p>
            <p>The course includes videos and exercises interspersed throughout the lessons. Please make sure to select an answer in the exercises and avoid leaving any unanswered questions. </p>
            <p>Please use the navigation buttons located on the bottom part of the screen to advance or go back to the previous slide. Please note that the Next button appears after the video concludes playing</p>
            <p>In case the lesson videos do not auto-play due to browser security, you can click on the video screen to start playing the videos.</p>
            <p>Please complete the quiz and survey located at the end of the course.</p>
            <p>For quick help, send a WhatsApp memssage to 08036289672, or a mail to ookelvyn@gmail.com</p>
          </div>
        </div>


        <div class="image-container">
          <img src="images/welcome.jpg" alt="eLearning">
        </div>

        <div class="bottom-button">
        <a href="01-whats-in-this-course-for-you.php">
          <button class="btn btn-outline-secondary btn-lg">Next <i class="fa fa-chevron-right"></i></button>
        </a>
        </div>
        
       
      </div>
		</div>

    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>