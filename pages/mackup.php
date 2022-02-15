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
		<title>MakeUp Artist </title>

		

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
 <link rel="stylesheet" href="style.css" />
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
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		

	

		<!--packages start-->
		<section id="pack" class="packages">
      <div class="container">
        <div class="gallary-header text-center">
          <h2>
             MakeUp Artist  in Vadodara</h2>
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="images/makeup/dd1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">DD Makeup</h3>            
            <span class="card__status">₹ 10,000</span>

          </div>
        </div>
        <p class="card__description">Address: B-604, CLEBRITY LUXURIA Nr Sterling bio tech company, Gujarat 390012
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/makeup/bb3.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>                 
          <div class="card__header-text">
            <h3 class="card__title">Blush n Blow</h3>
            <span class="card__status">₹ 8,000</span>
          </div>
        </div>
        <p class="card__description">Address:  Radhe Flats, Near GMERS Medical College, Vadodara, Gujarat 390021</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/makeup/ss1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Makeup Artist</h3>            
            <span class="card__status">₹ 12,500</span>

          </div>
        </div>
        <p class="card__description">Address: A/27,Pancham park Society, Maneja,Vadodara,Gujarat 390013
                      
                    </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/makeup/pp1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Parul's Beauty Care</h3>            
            <span class="card__status">₹ 25,000</span>
          </div>
        </div>
        <p class="card__description">Address: A/201, 2nd Floor, Nilkanth Residency, Nr Patcon House, 80 Feet Rd, Vivekanand Wadi, Anand, Gujarat 388001</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/makeup/bb1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Brides by Bindiya</h3>
            <span class="card__status">₹ 15,000</span>
          </div>          
        </div>
        <p class="card__description"> Address: Shop No9 Ambe Avenue, opp. Ambaji Temple, Mandvi, Vadodara, Gujarat 390001</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/makeup/bb2.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Beyound Beauty</h3>            
            <span class="card__status">₹ 10,000</span>

          </div>
        </div>
        <p class="card__description">Address: shop No. 108/A, ananta trendz, near narayan garden, new alkapuri, gotri, Vadodara, Gujarat 390021</p>
      </div>
    </a>      
  </li> 
   <li>
    <a href="" class="card">
      <img src="images/makeup/vv1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">VEE Glow Beauty</h3>            
            <span class="card__status">₹ 7,000</span>

          </div>
        </div>
        <p class="card__description">Address:  FF 106, Ajwa Rd, Vadodara, Gujarat 390019</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/makeup/mm1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Murtis Beauty Salon</h3>            
            <span class="card__status">₹ 10,000</span>

          </div>
        </div>
        <p class="card__description">Address:  Shashwat Residency,4,Tulsidham to GIDC Road,Manjalpur,Vadodara-390011</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/makeup/ss3.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Sapana Beauty</h3>            
            <span class="card__status">₹ 15,000</span>

          </div>
        </div>
        <p class="card__description">Address: A1 Shrusti Society, Keya Motors Ln, TP 13,Vadodara,Gujarat 390024</p>
      </div>
    </a>      
  </li>   
</ul>
<label class="btn btn-default"  type="button" value="back" onclick="history.back()" style="color: white; padding-center: 80px;">Back</label>
</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->



	</body>

</html>