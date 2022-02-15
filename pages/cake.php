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
		<title>Cakes</title>

		

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
             CAKE SHOP IN VADODARA</h2>
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="images/cake/honeybee.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Honeybee Cake</h3>            
            <span class="card__status">₹ 250</span>

          </div>
        </div>
        <p class="card__description">Address: Shop 1, Popular bakery, RTO Road, Opposite G.N.V School, Patel Park Society, Warasiya, Vadodara, Gujarat 390006
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cake/rose.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>                 
          <div class="card__header-text">
            <h3 class="card__title">Rose cakes</h3>
            <span class="card__status">₹ 350</span>
          </div>
        </div>
        <p class="card__description">Address: B/159, opp. Om nagar, Moti Nagar 2, Anand Baug Society, Tarsali, Vadodara, Gujarat 390009</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cake/ganache.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Ganache Patisserie</h3>            
            <span class="card__status">₹ 500</span>

          </div>
        </div>
        <p class="card__description">Address: GF-10, Devpushp Complex, Tulsidham Char Rasta, Vadodara, Gujarat 390011
                      
                    </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cake/monginis.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Monginis Cake</h3>            
            <span class="card__status">₹ 350</span>
          </div>
        </div>
        <p class="card__description">Address: 14, LALBAUG SHOPPING CENTER, near Shreyas School, Manjalpur, Vadodara, Gujarat 390011</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cake/whisk.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Whisk with Nim</h3>
            <span class="card__status">₹ 300</span>
          </div>          
        </div>
        <p class="card__description"> Address: Maninagar Society, 19, Tulsidham Char Rasta, Diwalibanagar Society, Vadodara, Gujarat 390011</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cake/thecake.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">The Cake Love</h3>            
            <span class="card__status">₹ 450</span>

          </div>
        </div>
        <p class="card__description">Address: 6-A Vitthalbaug Soc. Nr. Deep Chambers, Manjalpur Vadodara, Gujarat 390011</p>
      </div>
    </a>      
  </li> 
   <li>
    <a href="" class="card">
      <img src="images/cake/shilpa.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Shilpa's Cake Zone</h3>            
            <span class="card__status">₹ 499</span>

          </div>
        </div>
        <p class="card__description">Address: B6/502, Samanvay Saptarshi, Old Mega More Campus, Nr. Monalisa, Manjalpur, Vadodara, Gujarat 390011</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cake/mm.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">M.M Cake Gallery</h3>            
            <span class="card__status">₹ 200</span>

          </div>
        </div>
        <p class="card__description">Address: Jhulelal Mandir Rd, opp. JK Corner, Madar Mohalla, Patel Park Society, Warasiya, Vadodara, Gujarat 390006</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cake/papa1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Papa Cakes live</h3>            
            <span class="card__status">₹ 300</span>

          </div>
        </div>
        <p class="card__description">Address: Papa cakes the live cake & Bake studio Shop no 2 Shree Siddheshwar hub near Vaikunth,Vadodara, Gujarat 390022</p>
      </div>
    </a>      
  </li>   
</ul>
<!--<a class="btn btn-default" href="services.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>-->
<label class="btn btn-default"  type="button" value="back" onclick="history.back()" style="color: white; padding-center: 80px;">Back</label>
</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		

		


	</body>

</html>