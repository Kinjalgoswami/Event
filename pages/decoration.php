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
             DECORATORS IN VADODARA
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="images/decorators/pdca.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Pradhan Decorators</h3>            
            <span class="card__status">₹ 15000</span>

          </div>
        </div>
        <p class="card__description">Address: 4, Prerna Complex,. Polo Ground, S.R.P. road, Navapura,, Vadodara, Gujarat 390009 
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/decorators/sk.png" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>                 
          <div class="card__header-text">
            <h3 class="card__title">S. K. Decorators</h3>
            <span class="card__status">₹ 20,000</span>
          </div>
        </div>
        <p class="card__description">Address: Shop no-30, Panchratna Complex Parivar Char Rasta, Dabhoi - Waghodia Ring Rd, Vadodara, Gujarat 390025</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/decorators/jalaram.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Jalaram Decorators</h3>            
            <span class="card__status">₹ 30,000</span>

          </div>
        </div>
        <p class="card__description">Address: D/12 Anil Park, 3, VIP Rd, behind Bright School, Padmavati Nagar, Karelibagh, Vadodara, Gujarat 390018
                      
                    </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/decorators/amber.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Amber Decorators Faraskhana</h3>            
            <span class="card__status">₹ 35,000</span>
          </div>
        </div>
        <p class="card__description">Address: B-11, Devkinandan Complex, Near, Near Susson G I D C, Makarpura Road, Makarpura Road, Vadodara, Gujarat 390010</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/decorators/parvati.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Parvati Decoration</h3>
            <span class="card__status">₹ 35,000</span>
          </div>          
        </div>
        <p class="card__description"> Address: B-23 NAMRATA PARK SOCIETY,NEAR ASHOK NAGAR COLONY,Makarpura Road, Danteshwar, Vadodara, Gujarat 390004</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/decorators/shiv.jpeg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Shiv Faraskhana Decorators</h3>            
            <span class="card__status">₹ 25,000</span>

          </div>
        </div>
        <p class="card__description">Address: Shop no-1, Ratnam Complex Opp Shivam Duplex Near D-mart, Waghodia Rd, Vadodara, Gujarat 390019</p>
      </div>
    </a>      
  </li> 
   <li>
    <a href="" class="card">
      <img src="images/decorators/prajapati.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Prajapati Decorators</h3>            
            <span class="card__status">₹ 30,000</span>

          </div>
        </div>
        <p class="card__description">Address: 47 Marutidham Socity, Gidc, Jason Main Rd,Vadodara, Gujarat 390010</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/decorators/avsar.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Avsar Decorators</h3>            
            <span class="card__status">₹ 38,000</span>

          </div>
        </div>
        <p class="card__description">Address: Officers Railway Colony, Pratapgunj, Vadodara, Gujarat 390002</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/decorators/arunodaya.JPG" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Arunodaya Decorators</h3>            
            <span class="card__status">₹ 35,000</span>

          </div>
        </div>
        <p class="card__description">Address: Jamnadas Brahmapuri, Dandia Bazar, Vadodara, Gujarat 390001</p>
      </div>
    </a>      
  </li>   
</ul>
<label class="btn btn-default"  type="button" value="back" onclick="history.back()" style="color: white; padding-center: 80px;">Back</label>
</section><!--/.packages-->
		<!--packages end-->

		


	</body>

</html>