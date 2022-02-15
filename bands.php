<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Bands </title>

		

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="services/assets/css/tyl.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<style>
    
@import url('http://fonts.googleapis.com/css?family=Monoton');
.header{
    

background-image: url("services/h1.png");
    background-size:cover;
    text-align:center;

    padding:4em 0;
	}
.logo a h1{

    text-transform: capitalize ;
font-family: 'Monoton', cursive;
  background-image: linear-gradient(
    -225deg,
    #ADEFD1FF 67%,
    #44107a 29%,
    #ff1361 0%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 3s linear infinite;
  display: inline-block;
      font-size: 3.2em;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }

}
</style>


<div class="header">
     <div class="container">
         <div class="logo">
             <a href="index.php"><h1>Bands</h1></a>
         </div>
         
         <div class="clearfix"></div>
     </div>
</div>

	<body style="background-image: url(services/assets/backgrouds/52.jpg");>
		

	

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/pransang.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Prasang Band <span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
							
											 Address:Krishna Township, 212, Vadodara, Gujarat 390021
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn" ><a href="book-services.php">
											<a href="book-services.php" style="color:white;">
											book now</a></a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/darbar.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Sayaji Music Band<span class="pull-right">₹ 1200/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address:  Narshiji`s Pole Naka Mahatma, Gandhi Road, Vadodara, Gujarat 390001
										 </p>
									</div><!--/.packages-para-->
<!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/sagar.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3> Sagar Band <span class="pull-right">₹ 1000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											Address:  Atladra Bus Stop, Vadodara, Gujarat 390015
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/daimond.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Diamond Music Band<span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											Address: Hathikhana Main Rd, Fatehpura, Mandvi, Vadodara, Gujarat 390006
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/maharaja.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Maharaja Music Band <span class="pull-right">₹ 1000/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address:  opposite Dargh, Fatehpura, Adaniyapul, Vadodara, Gujarat 390006
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/jhankar.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Jankar Band<span class="pull-right">₹ 2000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											Address:B/H Dina Clinic,, Gorwa, Vadodara, Gujarat 390016
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/jai.jpeg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Sangam Music Band<span class="pull-right"> ₹ 1700/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address: 20, Hardwar Apartment, Wadi Rangmahal, Vadodara, Gujarat 390017
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/dar.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Darbar Music Band <span class="pull-right"> ₹ 1400/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											Address: Narshiji`s Pole Naka Mahatma, Gandhi Road, Vadodara, Gujarat 390001
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="assets/images/bands/bar.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Great Royal music band <span class="pull-right">₹ 1200/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											Address: Hathikhana Main Rd, Bajwada, Chhipwad, Vadodara, Gujarat 390006
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->

									<div class="about-btn">
										<button  class="about-view packages-btn">
											<a href="book-services.php" style="color:white;">
											book now</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->
			<label class="btn btn-default"  type="button" value="back" onclick="history.back()" style=" background-color: #e84393;
background-image: linear-gradient(315deg, #e84393 0%, #000000 74%); margin-left: 140px; padding-center: 80px;"> <a href="services.php" style="color:white;text-decoration: none;">Back</a></label>
		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>


	</body>

</html>