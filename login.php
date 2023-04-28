<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link rel="stylesheet" href="css/contact.css">
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
	body{
        /*background-image:url("./assets/bg1.jpg");*/
        background:  #ccffe6;
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }
.sign-up-container{
  /*background-image: linear-gradient(to right, #ff0030 , #790975);*/
  background-color:  #009999;
  margin-top: 30%;
}
.form-label{
color:white !important;
}



#login-btn{
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
</HEAD>
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
				<a href="user-registration.php" style="color:white;">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading"  style="color:white;">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
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
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
          <div class="row">
            	<div class="inline-block">
                	<div class="form-label">
                    Login as
                    <span class="required error" id="login-password-info"></span>
                  </div>
                  <form action="">
                <td class="input-box-330"><select name="Sex" id="Sex" class="box"><option value="select">select</option><option value="admin">Admin</option><option value="doctor">Doctor</option><option value="paitent">Paitent</option></select></td>
              </form>
             </div>
        </div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now">
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
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
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
