<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Venue</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>


</head>
<body>
<?php include_once('includes/header.php');?>
<div class="event content">
	 <div class="container">  
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Venue</li>	  
		 </ol>
		 <h2>Services</h2>
		 <div height="auto" width="100%" class="frow f-space-between max-width-container f-wrap margin-b-50 sc-eLExRp fyTVIo">
		 	<div class="bg-light-gray">
		 		<div height="auto" width="590px" color="#d8dffc" class="margin-b-10 pointer sc-eLExRp MeRjR">
		 			<div class="RainbowCategoryCard frow w-100 f f-space-between">
		 				<div width="340px" height="120px" class="v-center padding-1-20 sc-daURTG hclrHB">
		 					<div width="250px" class="fcol sc-daURTG EMsOV">
		 						<div class="text-left text-secondary h5 text-bold pre-wrap">
		 							"Venues"
		 							<i class="fa fa-angle-down text-secondary h5"></i>
		 							
		 						</div>
		 						<div width="250px" class="ellipsis margin-margin-t-5 font-override text text-secondary text-left regular sc-daURTG EMsOV">
		 							"NSTI VAdodara"
		 						</div>
		 						
		 					</div>
		 					
		 				</div>


		 				<div width="250px !important" height="120px" class="sc-daURTG ktFSqU" >
		 					<img class="object-fit-cover w-100 h-100 sc-bXGyLb etupgQ" src="images/cake/papa.jpg" alt="categoryImg">
		 				</div>

		 			</div>
		 		
		 		</div>
		 		

		 	</div>
		 </div>





		 <?php include_once('includes/footer.php');?>	
	 </div>
</div>
<!---->

<!---->
</body>
</html>