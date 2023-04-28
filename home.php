<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./main.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<!-- -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- -->

<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- -->
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<!-- -->

<style>
    body{
        /*background-image:url("./assets/bg.jpg");*/
        /* background-color: #ccffe6; */
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }
</style>
</HEAD>
<BODY>


<!-- -->
  <!-- header section starts  -->

  <header class="header">


      <a href="index.php" class="logo"> <img src="./image/heart@2x.png" width="70" height="70" style="vertical-align:middle"></img> <b>HEALTHCARE </b></a>
      <nav class="navbar">
          <a href="index.php">home</a>
          <a href="logout.php">Logout</a>
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
  <!-- -->



    <!-- <img src="./assets/bg.jpg" alt=""> -->
	<div class="phppot-container" >
        <!--  <div class="col btn btn-danger" style="margin-top:5% !important;"> User Dashboard</div><div class="page-header"></div> -->
		<div class="page-content jumbotron" style="  background-color: #ccffe6; margin-top: 20%; height: 10px;
  background: #009999;"> <!-- linear-gradient(to right, darkgoldenrod , purple);"> -->
  <h4 style="color:white; font-weight:bold; text-align: middle; ">Welcome to Account <?php echo $username;?></h4></div>

	</div>






<!-- -->
  <!-- home section starts  -->

  <section class="home" id="home">

      <div class="image">
          <img src="./image/hospital.png" alt="">
      </div>

      <div class="content">
          <h3>stay safe, stay healthy</h3>
          <p align="justify">We Care About Your Health.<br>
            We are Medical Centre. We Have Medicare Plan Options for you Quick and easy patient registration.Instantaneous profit and loss statement. For your Hospital Management,log in anytime anywhere in hospital, totally electronic medical records, unique patient identification,i-Medicare |Hospital Management System|Offers futuristic solutions for you.Patient Appointment.Patient Registration.Patient Billing.Ward Management Lab Management. Medical Records Department.Reports.Medical HelpDesk.</p>
          <a href="contact.html" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
      </div>

  </section>

  <!-- home section ends -->

  <!-- icons section starts  -->

  <section class="icons-container">

      <div class="icons">
          <i class="fas fa-user-md"></i>
          <h3>140+</h3>
          <p align="justify">doctors at work</p>
      </div>

      <div class="icons">
          <i class="fas fa-users"></i>
          <h3>1040+</h3>
          <p align="justify">satisfied patients</p>
      </div>

      <div class="icons">
          <i class="fas fa-procedures"></i>
          <h3>500+</h3>
          <p align="justify">bed facility</p>
      </div>

      <div class="icons">
          <i class="fas fa-hospital"></i>
          <h3>80+</h3>
          <p align="justify">available hospitals</p>
      </div>

  </section>

  <!-- icons section ends -->

  <!-- services section starts  -->

      <section class="services" id="services">

          <h1 class="heading"> our <span>services</span> </h1>

          <div class="box-container">



              <div class="box">
                  <i class="fas fa-notes-medical"></i>
                  <h3>free checkups</h3>
                  <p align="justify">The aim of providing the highest standard of medical care and free health checkups in a comfortable and homely ambiance.</p>
                  <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
              </div>

          <div class="box">
              <i class="fas fa-ambulance"></i>
              <h3>24/7 ambulance</h3>
              <p align="justify">Our hospital offers 24×7 ambulance services in collaboration with hospital’s Employees’ Cooperative Society. The vehicles are equipped to provide emergency services without delay, as every second counts in a medical emergency.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-user-md"></i>
              <h3>expert doctors</h3>
              <p align="justify">Deliver the flexibility and efficiency providers need and the convenience and communication patients expect with one, integrated platform for General, OB-GYN, Pediatrics, Orthopedics, Dental and other practices.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-pills"></i>
              <h3>medicines</h3>
              <p align="justify">Pharmacy Management software helps pharmacies manage their sales, distribution, and financial data. This software extends through the entire pharmacy management lifecycle, from POS to back office.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-procedures"></i>
              <h3>bed facility</h3>
              <p align="justify">The hospital is 241 bed, centrally located, multi-speciality hospital, with two Buildings- Building No.09 and Building No.10. The hospital has 3 Wings – Wing A, B and C. The infrastructure of the hospital is equipped with a comprehensive set of facilities – both structurally as well as in terms of services.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-heartbeat"></i>
              <h3>total care</h3>
              <p align="justify">provides effective, ethical and patient-friendly care with the human touch as it was always intended to.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-flask"></i>
              <h3>laboratories facilities</h3>
              <p align="justify">Handle complete order management, Custom Reports, Smart Notifications, Credit Settlement, detailed Reports, Analytics.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-money-bill-wave"></i>
              <h3>insurance/cashless facilities</h3>
              <p align="justify">Arrangement with leading corporate Houses and Public sector Companies for treatment of their employees. Recognised for credit facilities with Third Party Administrators for insurance patients – selected and restricted.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

          <div class="box">
              <i class="fas fa-briefcase-medical"></i>
              <h3>packages facilities</h3>
              <p align="justify">brings to you a range of health check-up packages that address your problems before they become Critical.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>


          <div class="box">
              <i class="fas fa-solid fa-hand-holding-medical"></i>
              <h3>blood banks</h3>
              <p align="justify">Blood Centre provides round the clock service to ensure Safe Transfusions and quality care to patients. It is equipped with the Latest Equipment for processing Blood and Blood Products with an objective to make Safer Blood and Blood Products available.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
          <div class="box">
              <i class="fas fa-plus"></i>
              <h3>Emergency</h3>
              <p align="justify">The Emergency Department services  are available 24 hours a day, seven days a week. The department is well equipped, staffed by emergency medical officers, trained to handle medical  emergencies, to ensure the best care is provided in a timely and proper  manner.</p>
              <a href="services_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>


      </div>

  </section>

  <!-- services section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">

      <h1 class="heading"> <span>about</span> us </h1>

      <div class="row">

          <div class="image">
              <img src="./image/about.png" alt="">
          </div>

          <div class="content">
              <h3>we take care of your healthy life</h3>
              <p align="justify">Welcome to HEALTHCARE<br>
                Best Medical & Health Care Needs to our Patients.HEALTHCARE is the one of the best known hospital in Kolkata.The Hospital system website covers the services that unify & simplify the work of healthcare professional as well as their interaction with patients.Moreover,the most important thing they are created to streamline various procedure that meet the needs of all the users The Hospital management system feature list is concentrated on providing the smooth experience of patients,hospital,staff & authorities.We provide the best medical services to our patients.</p>
              <a href="aboutus_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>

      </div>

  </section>

  <!-- about section ends -->

  <!-- doctors section starts  -->

  <section class="doctors" id="doctors">

      <h1 class="heading"> our <span>doctors</span> </h1>

      <div class="box-container">

          <div class="box">
              <img src="./image/doc1.png" alt="">
              <h3>D.Banerjee</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
          </div>

          <div class="box">
              <img src="./image/doc2.png"alt="">
              <h3>PK.Karmakar</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
          </div>

  <!---
          <div class="box">
              <img src=alt="./image/doc3.png"alt="">
              <h3>john deo</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
          </div>
  -->
          <div class="box">
              <img src="./image/doc3.png"alt="">
              <h3>M.Chinya</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
          </div>

          <div class="box">
              <img src="./image/doc4.png"alt="">
              <h3>S.Kumar</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
          </div>

          <div class="box">
              <img src="./image/doc5.png" alt="">
              <h3>SK.Bose</h3>
              <span>expert doctor</span>
              <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
              </div>
            </div>
              <div class="box">
                  <img src="./image/doc6.png"alt="">
                  <h3>A.Basu</h3>
                  <span>expert doctor</span>
                  <div class="share">
                      <a href="#" class="fab fa-facebook-f"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fab fa-instagram"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                  </div>
              </div>
          </div>

      </div>

  </section>

  <!-- doctors section ends -->

  <!-- booking section starts   -->

  <section class="book" id="book">

      <h1 class="heading"> <span>book</span> now </h1>

      <div class="row">

          <div class="image">
              <img src="./image/book.png"alt="">
          </div>
<!--
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
              <input type="submit" value="book now" class="btn">
          </form>
-->
  <a href="book.php" class="btn">book now</a>
      </div>

  </section>

  <!-- booking section ends -->

  <!-- review section starts  -->

  <section class="review" id="review">

      <h1 class="heading"> client's <span>review</span> </h1>

      <div class="box-container">

          <div class="box">
              <img src="./image/p1.png"alt="">
              <h3>Sumanta Kundu</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text">Environment is familiar. Benefits are quit needful. Supportive staffs who help any problem any time.</p>
          </div>

          <div class="box">
              <img src="./image/p2.png"alt="">
              <h3>Misha Roy</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text" align="justify">Service of this hospital is one of the best service in Kolkata. The environment of this hospitality is very neat and clean, all over services are very good.Good service.</p>
          </div>

          <div class="box">
              <img src="./image/p3.png"alt="">
              <h3>Dipankar  Ghosh</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text" align="justify">Recently visited health check up department  for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services.</p>
          </div>

      </div>

  </section>

  <!-- review section ends -->

  <!-- blogs section starts  -->

  <section class="blogs" id="blogs">

      <h1 class="heading"> our <span>blogs</span> </h1>

      <div class="box-container">

          <div class="box">
              <div class="image">
                  <img src="./image/blog1.png"alt="">
              </div>
              <div class="content">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 1st May, 2018 </a>
                      <a href="#"> <i class="fas fa-user"></i> by admin </a>
                  </div>
                  <h3>Arthroplasty</h3>
                  <p align="justify">R.B aged 78 years complained of knee pain following limitation of certain activities. She underwent total knee arthroplasty using fixed bearing Johnson & Johnson(USA) prosthesis. She was happy as the pain was gone</p>
                  <a href="arthroplasty_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="./image/blog2.png" alt="">
              </div>
              <div class="content">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 9th November, 2022 </a>
                      <a href="#"> <i class="fas fa-user"></i> by admin </a>
                  </div>
                  <h3>LUNG ILLNESS BEYOND COVID</h3>
                  <p align="justify">COVID-19 has brought much-needed attention to the importance of lung health. Since the outbreak of COVID -19, there have been many studies conducted on the long-term effects of the virus on the lungs. The results of these studies are still coming in, but they have already shown that COVID -19 can have lasting effects on the lungs of those who have contracted the virus. Many are more prone to getting affected by being in the high-risk category due to various other medical conditions.</p>
                  <a href="lung_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="./image/blog3.png"alt="">
              </div>
              <div class="content">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 7th September, 2020 </a>
                      <a href="#"> <i class="fas fa-user"></i> by admin </a>
                  </div>
                  <h3>HEART ATTACK IN WOMEN- SILENT KILLER</h3>
                  <p align="justify">The heart attack symptoms in women are different from men. Heart attack in women is often silent killers as early signs are not felt or may be ignored. Deep dive into this article to know more about female heart attack symptoms. What is meant by a “silent heart attack”? There are numerous instances where the person having a heart attack was unaware as it did not have the usual symptoms of shortness of breath, cold sweat or even chest pain.</p>
                  <a href="heartattack_learnmore.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>

      </div>

  </section>

  <!-- blogs section ends -->

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

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

<!-- -->





</BODY>
</HTML>
