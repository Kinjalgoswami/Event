<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta cha₹ et="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come fi₹ t in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title> Drinks In Vadodara</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="services/assets/logo/favicon.png"/>

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
             <a href="index.php"><h1>Drinks</h1></a>
         </div>
         
         <div class="clearfix"></div>
     </div>
</div>
	<title> Drinks In Vadodara</title>

<body style="background-image: url(services/assets/backgrouds/52.jpg")>
<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="services/assets/images/drinks/cold.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Cold House Alkapuri  <span class="pull-right">₹ 150</span></h3>
									<div class="packages-para">
										<p>
										
												Address: Bombay Shopping Centre, 25, RC Dutt Rd, Vadiwadi, Vadodara, Gujarat 3900201 
											
											
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
								<img src="services/assets/images/drinks/xomo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3> Xomox Sun Bar Ltd<span class="pull-right"> ₹ 199 </span></h3>
									<div class="packages-para">
										<p>
											 Address: 701, B Tower, Alkapuri Arcade, R C Dutt Road, Vadodara, Gujarat <br>390007
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
								<img src="services/assets/images/drinks/saura.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Saurashtra Cold Drinks<span class="pull-right"> ₹ 159</span></h3>
									<div class="packages-para">
										<p>
											Address: Shop no-1, Shree Kunj Heights Opp Mahalaxmi Party Plot, Jupiter Rd, Vadodara, Gujarat 390011
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
								<img src="services/assets/images/drinks/rajlaxmi.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Rajlaxmi Cold drinks<span class="pull-right"> ₹ 200</span></h3>
									<div class="packages-para">
										<p>
											Address: 76X2+2W3, Near Market Char Rasta, Sultanpura, Vadodara, Gujarat 390001
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
								<img src="services/assets/images/drinks/bogo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Bogo Cafe <span class="pull-right"> ₹ 299</span></h3>
									<div class="packages-para">
										<p>
											Address: 7-A, Rajpath Society KTM Showroom Lane, Old Padra Rd, Vadodara, Gujarat 390007
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
								<img src="services/assets/images/drinks/juice.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Juice Bar<span class="pull-right"> ₹ 180</span></h3>
									<div class="packages-para">
										<p>
											Address: Narayan School Rd, Goverdhan Twp, Kendranagar, Vadodara, Gujarat 390025
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
								<img src="services/assets/images/drinks/happy.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Happy Cold Drink House<span class="pull-right"> ₹ 200</span></h3>
									<div class="packages-para">
										<p>
											Address: Raopura Main Road, Raopura, Mandvi, Vadodara, Gujarat 390001
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
								<img src="services/assets/images/drinks/super.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Super Fountain Soda<span class="pull-right"> ₹ 150</span></h3>
									<div class="packages-para">
										<p>
											Address: Genti Gate, opp. Police Chowky Wadi, Wadi, Vadodara, Gujarat 390017
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
								<img src="services/assets/images/drinks/shiv.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Shiv Shakti Cold Drinks<span class="pull-right"> ₹ 120</span></h3>
									<div class="packages-para">
										<p>
											Address: Dhanyavi Chokdi N H 8 Ta₹ ali By Pass, Ta₹ ali, Vadodara, Gujarat 390009

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