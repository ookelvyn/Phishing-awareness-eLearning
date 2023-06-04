<?php
session_start();
        include_once 'db.php';

//         if (!isset($_SESSION['naiajatracksession'])) {
//          header("Location: index.php");
//         }


// $query = $conn->query("SELECT * FROM adminlogin WHERE id =".$_SESSION['naiajatracksession']);
// $userRow=$query->fetch_array();
       // $conn->close(); 



if(isset($_POST['register'])) {
   
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 $gender = strip_tags($_POST['gender']);
 $timestamp = date('Y-m-d H:i:s');
 

 $email = $conn->real_escape_string($email);
 $password = $conn->real_escape_string($upass);
 $gender = $conn->real_escape_string($gender);
 
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);


$hashed_password = password_hash($password, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
 
 $check_email = $conn->query("SELECT email FROM login WHERE email='$email'");
 $count=$check_email->num_rows;



 if ($count==0) {

  $query = "INSERT INTO login (email, password, gender, created_at) VALUES('$email', '$hashed_password', '$gender', '$timestamp')";
  
if ($conn->query($query)) {
    $msg = "<div class='alert alert-success text-center'>
      Successfully registered! <a href='index.php'>Login</a>
     </div>";    

   }else{$msg = "<div class='alert alert-danger text-center'>
      error while registering !
     </div>";}
  

}else {
  
  
  $msg = "<div class='alert alert-danger text-center'>
      Sorry, Email is already taken, please use a different email address!
    </div>";
   
 }

}
 $conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register | eLearning</title>
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
					<!-- <div class='alert alert-danger text-center'> Invalid Username or Password !</div> -->

					<!-- Error/success message -->
		
					<?php if(isset($msg)){ echo $msg;} ?>
					<!-- End of Error/success message -->

					<span class="login100-form-title p-b-43">
						Register
					</span>
						
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" required="">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>				

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="radio" name="gender" value="male" required>
							<label class="label-checkbox100" for="ckb1">
								Male
							</label>
						</div>

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb2" type="radio" name="gender" value="female" required>
							<label class="label-checkbox100" for="ckb2">
								Female
							</label>
						</div>
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb3" type="radio" name="gender" value="other" required>
							<label class="label-checkbox100" for="ckb3">
								Other
							</label>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register">
							Signup
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						
							<span class="txt2">
								<a href="index.php">or Login here</a>
							</span>
						
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
					
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