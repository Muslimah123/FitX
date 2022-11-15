<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/index.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About FitX Management System</h2>
				</div>
			</div>
		</div>
	</section>
	


	<section class="section gray-bg" id="home">
     <div class ="container">
           <div class="row justify-content-center">
                <div class=" text-center text-bg-light"> 
                    <div class="section-title ">
                            <h2> What we do</h2>
                            <p class="lead">I provide professional, certified fitness programs designed to help you reach and maintain your health and fitness goals. Check out my offerings and choose one suitable to your ambitions and lifestyle.</p>
                    </div>
              </div>
              
            </div>

            <div class="col-lg-6">
            <img class="img-fluid img-thumbnail" src="https://static.wixstatic.com/media/37ed934bcf134e6e83dea8f6f7398ac6.jpg/v1/fill/w_831,h_675,fp_0.49_0.23,q_85,usm_0.66_1.00_0.01,enc_auto/37ed934bcf134e6e83dea8f6f7398ac6.jpg" alt="">
             <div class="centered">
                 <h2 id="cap">Muscle Building</h2>
                <p>Health and Fitness is not only about what your body looks like on the outside, but also on the inside! I will make sure your body and mind find the right balance. What are you waiting for? Book a session today!</p>
             </div>
       </div>

       <div class="col-lg-6">
           <img class="img-fluid img-thumbnail" src="https://static.wixstatic.com/media/70bc9811a4b44c18bbb4237ed2ffec6a.jpg/v1/fill/w_831,h_675,fp_0.61_0.25,q_85,usm_0.66_1.00_0.01,enc_auto/70bc9811a4b44c18bbb4237ed2ffec6a.jpg" alt="">
            <div class="centered">
                <h2 id="cap">Flexibility Training</h2>
                <p>This is a popular trend in the fitness world today. Whether it’s losing weight or trimming and toning, my program will improve your health and have you feeling great. You’ll see an improvement in your performance in no time.</p>
           </div>
        </div>
        
  
        
   </div>   
</section>
    <footer id="footer" > 
        <div class="footer-newsletter"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-6">
                         <h4>Our Newsletter</h4> 
                         <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                     </div> 
                     <div class="col-lg-6"> 
                        <form action="" method="post">
                             <input type="email" name="email">
                             <input type="submit" value="Subscribe"> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="footer-top"> 
        <div class="container">
             <div class="row"> 
                <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                      <ul> 
                        <li><i class="bx bx-chevron-right"></i> 
                        <a href="#">Home</a>
                    </li> 
                    <li><i class="bx bx-chevron-right"></i> 
                    <a href="#">About us</a>
                </li> 
                <li>
                    <i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                     <li>
                        <i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> 
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a>
                    </li> 
                </ul>
             </div>
              <div class="col-lg-3 col-md-6 footer-links"> 
                <h4>Our Services</h4> 
                <ul>
                     <li><i class="bx bx-chevron-right"></i>
                      <a href="#">Muscle Building</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="#">Flexibility Training</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Fitness Aero</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Senior Fitness</a></li> 
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Workouts</a></li>
                     </ul>
                     </div> 
                     <div class="col-lg-3 col-md-6 footer-contact"> 
                        <h4>Contact Us</h4>
                         <p> 1University Ave, <br> Berekuso<br> Ghana <br><br> <strong>Phone:</strong> +1233 207611117<br> <strong>Email:</strong> idaya.seidu@ashesi.edu.gh<br> </p> 
                        </div>
                         <div class="col-lg-3 col-md-6 footer-info"> 
                            <h3>About FitX</h3> 
                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> 
                            <div class="social-links mt-3"> 
                            <a href="#" class="twitter"><i class="bx bxl-twitter">
                            </i></a> <a href="#" class="facebook"><i class="bx bxl-facebook">

                            </i>
                        </a> <a href="#" class="instagram">
                            <i class="bx bxl-instagram"></i></a> 
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
         <div class="container">
             <div class="copyright"> &copy; Copyright <strong><span>FitX</span></strong>. All Rights Reserved </div> <div class="credits"> Designed by <a href="#">FitX Team</a> 
            </div>
         </div>
</footer>
	

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	</body>
</html>
