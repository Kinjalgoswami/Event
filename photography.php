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
		<title>Photographers</title>

		

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
             <a href="index.php"><h1>Photography</h1></a>
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
								<img src="services/assets/images/photographers/p1.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Memories Studio  <span class="pull-right">₹ 500/hr</span></h3>
									<div class="packages-para">
										
										<p>
							
											  Address: House, 2nd Floor, Memories, 58, Sampatrao Colony, Alkapuri, Vadodara, Gujarat 390007
										 </p>
									</div><!--/.packages-para-->
									<!--/.packages-review-->
									<div class="about-btn">
										<button  class="about-view packages-btn" style="margin-left: 50px;">
											<a href="book-services.php" style="color:white;">
											book now</a>

										</button>
									
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="services/assets/images/photographers/p2.jpeg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Visual Stories<span class="pull-right">₹ 1000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
										  Address: B-304, Keshav, Near Jayratna, Beside Reliance Petrol Pump, R.V.Desai Road, Vadodara, Gujarat 390001
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
								<img src="services/assets/images/photographers/avsar2.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3> Avsar studio <span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
										 Address: G-7, 8 Annapurna Complex, Makarpura Main Road, Near Bhavans School Three Way,Vadodara, Gujarat 390011
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
								<img src="services/assets/images/photographers/moment.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Momenttra<span class="pull-right">₹ 1500/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address: 304 Shivalay Residency 2 Inside Bharat Petrol Pump, Dabhoi Waghodia Ring Rd, Vadodara, Gujarat 390025
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
								<img src="services/assets/images/photographers/memory.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Memory Bucket <span class="pull-right">₹ 2000/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											Address: 29, Atthar Society, near Nalanda 3, Opposite Water Tank, Vadodara, Gujarat 390025
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
								<img src="services/assets/images/photographers/impress.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Impress Digital Studio<span class="pull-right">₹ 2500/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address: Madhu Malti Building, B/H General post Office,Near Dr. Kaku R. Shah's Hospital, Raopura, Vadodara, Gujarat 390001
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
								<img src="services/assets/images/photographers/shivam1.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Shivam Joshi <span class="pull-right"> ₹ 2000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
											  Address: 20 paras society , opposite harihar apartment, b/h Old R.T.O, Warasiya, Vadodara, Gujarat 390006
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
								<img src="services/assets/images/photographers/bride.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Bride Emotions<span class="pull-right"> ₹ 1000/hr </span></h3>
									<div class="packages-para">
										
										<p>
											
											 Address: 405, Pinnacle Business Park, Tulshi Dham Rd, opp. Domminos Pizza, Vadodara, Gujarat 390011
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
								<img src="services/assets/images/photographers/happy.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Happy Studio <span class="pull-right">₹ 2000/hr</span></h3>
									<div class="packages-para">
										
										<p>
											
								 Address: Shop no. 1, Somnath villa appartment B/H govind bhuvan, Dandia Bazaar Rd, Vadodara, Gujarat 390001
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