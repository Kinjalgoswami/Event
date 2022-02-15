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
             PHOTOGRAHERS IN VADODARA
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="images/photographers/p1.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Memories Studio</h3>            
            <span class="card__status">₹ 25000</span>

          </div>
        </div>
        <p class="card__description">Address: House, 2nd Floor, Memories, 58, Sampatrao Colony, Alkapuri, Vadodara, Gujarat 390007 
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/photographers/p2.jpeg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>                 
          <div class="card__header-text">
            <h3 class="card__title">Visual Stories</h3>
            <span class="card__status">₹ 20000</span>
          </div>
        </div>
        <p class="card__description">Address: B-304, Keshav, Near Jayratna, Beside Reliance Petrol Pump, R.V.Desai Road, Vadodara, Gujarat 390001</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/photographers/avsar2.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Avsar studio</h3>            
            <span class="card__status">₹ 40000</span>

          </div>
        </div>
        <p class="card__description">Address: G-7, 8 Annapurna Complex, Makarpura Main Road, Near Bhavans School Three Way,Vadodara, Gujarat 390011
                      
                    </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/photographers/moment.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Momenttra</h3>            
            <span class="card__status">₹ 30000</span>
          </div>
        </div>
        <p class="card__description">Address: 304 Shivalay Residency 2 Inside Bharat Petrol Pump, Dabhoi Waghodia Ring Rd, Vadodara, Gujarat 390025</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/photographers/memory.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Memory Bucket</h3>
            <span class="card__status">₹ 25000</span>
          </div>          
        </div>
        <p class="card__description"> Address: 29, Atthar Society, near Nalanda 3, Opposite Water Tank, Vadodara, Gujarat 390025</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/photographers/impress.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Impress Digital Studio</h3>            
            <span class="card__status">₹ 25000</span>

          </div>
        </div>
        <p class="card__description">Address: Madhu Malti Building, B/H General post Office,Near Dr. Kaku R. Shah's Hospital, Raopura, Vadodara, Gujarat 390001</p>
      </div>
    </a>      
  </li> 
   <li>
    <a href="" class="card">
      <img src="images/photographers/shivam1.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Shivam Joshi</h3>            
            <span class="card__status">₹ 22000</span>

          </div>
        </div>
        <p class="card__description">Address: 20 paras society , opposite harihar apartment, b/h Old R.T.O, Warasiya, Vadodara, Gujarat 390006</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/photographers/bride.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Bride Emotions</h3>            
            <span class="card__status">₹ 38000</span>

          </div>
        </div>
        <p class="card__description">Address: 405, Pinnacle Business Park, Tulshi Dham Rd, opp. Domminos Pizza, Vadodara, Gujarat 390011</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/photographers/happy.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Happy Studio</h3>            
            <span class="card__status">₹ 25000</span>

          </div>
        </div>
        <p class="card__description">Address: Shop no. 1, Somnath villa appartment B/H govind bhuvan, Dandia Bazaar Rd, Vadodara, Gujarat 390001</p>
      </div>
    </a>      
  </li>   
</ul>
<label class="btn btn-default"  type="button" value="back" onclick="history.back()" style="color: white; padding-center: 80px;">Back</label>
</section>

		



	</body>

</html>