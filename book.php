<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/book.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">


    <a href="index.php" class="logo"> <img src="./image/heart@2x.png" width="70" height="70" style="vertical-align:middle"></img> <b>HEALTHCARE </b></a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="login.php">login</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->
<section class="book" id="book">
  <div class="row">
<form action="">
<h3>book appointment</h3>
<input type="text" placeholder="your name" class="box">
<input type="number" placeholder="your mobile number" class="box">
<input type="text" placeholder="your alternate mobile number" class="box">
<input type="email" placeholder="your email" class="box">
<input type="text" placeholder="your age" class="box">
<input type="text" placeholder="height in cms" class="box">
<input type="text" placeholder="weight in kgs" class="box">
<input type="text" placeholder="address" class="box">
<input type="text" placeholder="pincode" class="box">
<input type="text" placeholder="landmark" class="box">

<td><select name="Sex" id="Sex" class="box"><option value="select gender">select gender</option><option value="male">Male</option><option value="female">Female</option><option value="others">Others</option></select></td>
<td><select name="Blood-Group" id="Blood-Group" class="box"><option value="select blood group">select blood group</option><option value="O+ve">O+ve</option><option value="O-ve">O-ve</option><option value="A+ve">A+ve</option><option value="A-ve">A-ve</option><option value="B+ve">B+ve</option><option value="B-ve">B-ve</option><option value="AB+ve">AB+ve</option><option value="AB-ve">AB-ve</option> </select></td>
<td><select name="Doctors name" id="Doctors name" class="box"><option value="select doctor">select doctor</option><option value="D.Banerjee">D.Banerjee</option><option value="PK.Karmakar">PK.Karmakar</option><option value="M.Chinya">M.Chinya</option><option value="S.Kumar">S.Kumar</option><option value="SK.Bose">SK.Bose</option><option value="A.Basu">A.Basu</option></select></td>
<input type="text" placeholder="appointment date" class="box">


<input type="submit" value="submit" class="btn">
</form>
</div>
</section>

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
