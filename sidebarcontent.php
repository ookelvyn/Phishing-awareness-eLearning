<style type="text/css">
  #sidebar ul li a {
    padding: 10px 30px;
}
</style>

<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<h3>Welcom <br> <?php echo ''.$_SESSION['email'].'!'; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="welcome-page.php"> Welcome</a>
          </li>
          
          <li class="">
            <a onclick="return false;" href="01-whats-in-this-course-for-you.php"> Course introduction</a>
          </li>

          <li class="">
            <a onclick="return false;" href="02-introduction-to-phishing-attacks.php"> Introduction to phishing attacks</a>
          </li>

          <li class="">
            <a onclick="return false;" href="11-common-target-of-phishing-attacks.php"> Common targets of phishing attack</a>
          </li>

          <li class="">
            <a onclick="return false;" href="12-principles-of-persuasion.php"> Principles of persuasion</a>
          </li>

          <li class="">
            <a onclick="return false;" href="20-red-flags-intro.php"> Red flags on emails</a>
          </li>

          <li class="">
            <a onclick="return false;" href="actions-to-take-on-phishing-emails.php"> Actions to take on phishing emails</a>
          </li>
          <li class="">
            <a onclick="return false;" href="22-wrap-up.php"> Wrap-up</a>
          </li>
          <li class="">
            <a onclick="return false;" href="quiz-1.php"> Quiz</a>
          </li>
          <li>
            <a href="logout.php">Logout</a>
          </li>
        </ul>

    	</nav>