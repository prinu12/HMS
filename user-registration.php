<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
<link rel="stylesheet" href="css/contact.css">
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<style>
body{
        /*background-image:url("./assets/abc.jpg");*/
          background:  #ccffe6;
          background-position: center; /* Center the image */
          background-repeat: no-repeat; /* Do not repeat the image */
          background-size: cover; /* Resize the background image to cover the entire container */
    }
.sign-up-container{
  /*background-image: linear-gradient(to right, #790975,#ff0030);*/
  background-color:  #009999;
  margin-top: 30%;
}
.form-label{
color:white !important;
}
#signup-btn{
	/*color:white;
	font-weight:bold;
	background: #343a40;*/
  background: #fff;
  width: 100px;
  border: none;
  outline: none;
  color: #009999;
  height: 35px;
  border-radius: 30px;
  margin-top: 20px;
  box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);
}
</style>
<BODY>
  <!-- header section starts  -->

  <header class="header">
  <a href="index.php" class="logo"> <img src="./image/heart@2x.png" width="70" height="70" style="vertical-align:middle"></img> <b>HEALTHCARE</b> </a>

      <nav class="navbar">
          <a href="index.php">home</a>
        <!--  <a href="#services">services</a>
          <a href="#about">about</a>
          <a href="#doctors">doctors</a>
          <a href="#book">book</a>
          <a href="#review">review</a>
          <a href="#blogs">blogs</a>
        -->
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

  </header>

  <!-- header section ends -->

	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="main.php" style="color:white">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading" style="color:white">Registration</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>	<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>


  <!-- footer section starts  -->

  <section class="footer">

      <div class="box-container">

          <div class="box">
              <h3>quick links</h3>
              <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
          </div>

          <div class="box">
              <h3>our services</h3>
              <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
          </div>

          <div class="box">
              <h3>contact info</h3>
              <a href="#"> <i class="fas fa-phone"></i> Contact No:+91 9883535832</a>
              <a href="#"> <i class="fas fa-envelope"></i>Email: healthcare12346@gmail.com</a>
              <a href="#"> <i class="fas fa-map-marker-alt"></i> Kolkata,West Bengal-700317</a>
          </div>

          <div class="box">
              <h3>follow us</h3>
              <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
              <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
              <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
              <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
              <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
              <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
          </div>

      </div>

      <div class="credit"> Site developed and maintained by <span>Basu Group of Hospitals</span> | all rights reserved </div>

  </section>

  <!-- footer section ends -->


	<script>
function signupValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");
	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	$("#username-info").html("").hide();
	$("#email-info").html("").hide();
	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
