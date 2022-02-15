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
		<title>Catering </title>

		

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
             POPULAR CATERING IN VADODARA
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="images/cateres/download.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">vraj Caterers</h3>            
            <span class="card__status">₹ 26000</span>

          </div>
        </div>
        <p class="card__description">Address:24-b, Jashlok Society, Manjalpur, Near Deep Chamber, Manjalpur, Vadodara, Gujarat 390011 
        </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cateres/123.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <button type="button" class="btn btn-outline-info">Book</button>                 
          <div class="card__header-text">
            <h3 class="card__title">Zaika Caterers</h3>
            <span class="card__status">₹ 24000</span>
          </div>
        </div>
        <p class="card__description">Address:  Avesh Complex, Moghulwada, Gendi Gate Road, near Suleimani Bank, Vadodara, Gujarat 390017</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cateres/456.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Yash caterers</h3>            
            <span class="card__status">₹ 38000</span>

          </div>
        </div>
        <p class="card__description">Address: Harni - Warasiya Ring Rd, opposite bankers hospital, Waghela Nagar, Bapunagar, Vadodara, Gujarat 390006
                      
                    </p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cateres/256.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Harsh Catering</h3>            
            <span class="card__status">₹ 32000</span>
          </div>
        </div>
        <p class="card__description">Address: F/ 41, Bhagyalaxmi Society, Samta, Subhanpura, Vadodara, Gujarat 390023</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/cateres/ttt.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Rudra Caterers</h3>
            <span class="card__status">₹ 25000</span>
          </div>          
        </div>
        <p class="card__description"> Address: FF-14 Shivalaya -1 Complex Near Raneshwar Temple Vasna Main Road, Vasna Rd, Vadodara, Gujarat 390007</p>
      </div>
    </a>
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cateres/sai.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Sai Caterers</h3>            
            <span class="card__status">₹ 23000 </span>

          </div>
        </div>
        <p class="card__description">Address: 2nd Floor Shagun Banquet,Harni Warashia Ring Road,opp.Premdas Jalaram Hospital, Vadodara, Gujarat 390006</p>
      </div>
    </a>      
  </li> 
   <li>
    <a href="" class="card">
      <img src="images/cateres/raj.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Raj Caterers</h3>            
            <span class="card__status">₹ 27000</span>

          </div>
        </div>
        <p class="card__description">Address: Subhanpura, 197,Shiv Shakti Society, B/h. Anandvan Complex, Nr. I.P.C.L., New IPCL Rd, Vadodara, Gujarat 390023</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cateres/4141.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Preet caterers</h3>            
            <span class="card__status">₹ 38000</span>

          </div>
        </div>
        <p class="card__description">Address: 856, 5, Makarpura GIDC, Makarpura, Vadodara, Gujarat 390010, Near Bank Of Baroda</p>
      </div>
    </a>      
  </li>
   <li>
    <a href="" class="card">
      <img src="images/cateres/download1.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <button type="button" class="btn btn-outline-info">Book</button>
          <div class="card__header-text">
            <h3 class="card__title">Patel Catering</h3>            
            <span class="card__status">₹ 31000</span>

          </div>
        </div>
        <p class="card__description">Address: 2, Sikkanagar Society, Alkapuri, Opposite Sardar Baug Atithi Gruh, Alkapuri, Vadodara, Gujarat 390007</p>
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