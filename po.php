<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Portfolio</title>
<link href="gallery/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="gallery/css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->

<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="gallery/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="gallery/css/style.css" type="text/css">

<!-- Custom Theme files -->

		<link rel="stylesheet" type="text/css" href="gallery/css/jquery.fancybox.css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/gallery/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/gallery/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	   


</head>
<style >
	body {
		background: linear-gradient(to top, #adefd1 0%, #003366 70%);
	}
</style>
<body>


<?php include_once('includes/header.php');?>

<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Portfolio</li>

		 </ol>

		 
<?php include('gallery/gallery.php');?>



		  




		 <?php include_once('includes/footer.php');?>	
	 </div>
</div>
<!---->

<!---->
</body>
</html>