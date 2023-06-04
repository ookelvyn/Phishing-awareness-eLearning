<?php

// session_start();

// if (isset($_SESSION['email'])!="") {
//  header("Location: welcome-page.php");
//  exit;
// }
require_once('db.php');

if (isset($_POST['submit'])) {
  
  // Get the email address entered by the user
  $email = $_POST['email'];
  
  // Check if the email address exists in the database
  $sql = "SELECT * FROM login WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    
    // Generate a new password
    $newPassword = generatePassword();
    
    // Hash the password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $sql = "UPDATE login SET password='$hashedPassword' WHERE email='$email'";
    mysqli_query($conn, $sql);

    // Send an email to the user with the new password
    $to = $email;
    $subject = "Password Reset";
    $message = "Your new password is: $newPassword";
    $headers = "From: info@smartstudyhq.com";
    mail($to, $subject, $message, $headers);
    
    // Display a success message to the user
    $error = "<div class='alert alert-success text-center'>A new password has been sent to your email address.</div>";
    
  } else {
    // If the email address is not found in the database, display an error message
    $error = "<div class='alert alert-danger text-center'>Email address not found.</div>";
  }

}

function generatePassword() {
  // Generate a random password
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $password = '';
  $length = 10;
  for ($i = 0; $i < $length; $i++) {
    $index = rand(0, strlen($alphabet) - 1);
    $password .= $alphabet[$index];
  }
  return $password;
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pasword Rest | eLearning</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST">

                    <!-- Error/success message -->
        
                    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
                    <!-- End of Error/success message -->

                    <span class="login100-form-title p-b-43">
                        Forgot Password
                    </span>

                <!--    <span class="login100-form-title p-b-43" style="color: red">
                        Exercise Ended
                    </span> -->
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    
                    
                

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div>
                            <a href="index.php" >
                                Login here
                            </a>
                        </div>

                        <div>
                            <a href="register.php" >
                                Register
                            </a>
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Reset password
                        </button>
                    </div>
                    
                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            <a href="register.php">or sign up</a>
                        </span>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                    <h1 style="margin-left: 20%; margin-top: 30%; font-weight: bold; color: #fff; text-shadow: black; font-size: 3.5rem;text-shadow: 2px 2px 4px #000; ">Phishing Awareness Training</h1>
                </div>
            </div>
        </div>
    </div>
    
    

    
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>