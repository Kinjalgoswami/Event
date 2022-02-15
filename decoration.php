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
		<title>Decorators</title>

		

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="services/assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="services/assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="services/assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="services/assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="services/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="services/assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="services/assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="services/assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="services/assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="services/assets/css/tyl.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="services/assets/css/responsive.css" />

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
             <a href="index.php"><h1>Decoration</h1></a>
         </div>
         
         <div class="clearfix"></div>
     </div>
</div>

	<body style="background-image: url(services/assets/backgrouds/52.jpg")>
		

	

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="services/assets/images/decorators/pdca.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Pradhan Decorators<span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
							
											<i class="fa fa-angle-right"></i>Address: 4, Prerna Complex,. Polo Ground, S.R.P. road, Navapura,, Vadodara, Gujarat 390009
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
								<img src="services/assets/images/decorators/sk.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>S. K. Decorators<span class="pull-right">₹ 2000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: Shop no-30, Panchratna Complex Parivar Char Rasta, Dabhoi - Waghodia Ring Rd, Vadodara, Gujarat 390025
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
								<img src="services/assets/images/decorators/jalaram.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Jalaram Decorators<span class="pull-right">₹ 1700/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: D/12 Anil Park, 3, VIP Rd, behind Bright School, Padmavati Nagar, Karelibagh, Vadodara, Gujarat 390018
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
								<img src="services/assets/images/decorators/amber.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Amber Decorators Faraskhana<span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: B-11, Devkinandan Complex, Near, Near Susson G I D C, Makarpura Road, Makarpura Road, Vadodara, Gujarat 390010
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
								<img src="services/assets/images/decorators/parvati.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Parvati Decoration<span class="pull-right">₹ 1800/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: B-23 NAMRATA PARK SOCIETY,NEAR ASHOK NAGAR COLONY,Makarpura Road, Danteshwar, Vadodara, Gujarat 390004
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
								<img src="services/assets/images/decorators/shiv.jpeg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Shiv Faraskhana Decorators<span class="pull-right">₹ 1200/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: Shop no-1, Ratnam Complex Opp Shivam Duplex Near D-mart, Waghodia Rd, Vadodara, Gujarat 390019
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
								<img src="services/assets/images/decorators/prajapati.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Prajapati Decorators <span class="pull-right"> ₹ 1600/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: 47 Marutidham Socity, Gidc, Jason Main Rd,Vadodara, Gujarat 390010
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
								<img src="services/assets/images/decorators/avsar.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Avsar Decorators<span class="pull-right"> ₹ 1000/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i> Address: Officers Railway Colony, Pratapgunj, Vadodara, Gujarat 390002
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
								<img src="services/assets/images/decorators/arunodaya.JPG" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Arunodaya Decorators <span class="pull-right">₹ 1200/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											<i class="fa fa-angle-right"></i>Address: Jamnadas Brahmapuri, Dandia Bazar, Vadodara, Gujarat 390001
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
background-image: linear-gradient(315deg, #e84393 0%, #000000 74%); margin-left: 140px; padding-center: 80px;"> <a href="services.php" style="color:white;text-decoration: none;">Back</a></label>		</section><!--/.packages-->
		<!--packages end-->

		


	</body>

</html>