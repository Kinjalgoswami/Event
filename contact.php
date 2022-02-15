<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $msg=$_POST['message'];
$sql="insert into tbluser(Name,MobileNumber,Email,Message)values(:name,:mobnum,:email,:msg)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':msg',$msg,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Message Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
		<style>
			.header{
	

background-image: url("image/h1.png");
	background-size:cover;
	text-align:center;
	padding:2em 0;
	min-height:150px;
}
.logo a h1{
	
	font-family: 'Glyphicons Halflings';

	
	text-decoration:none;



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
      font-size: 2.3em;
}
.top-menu ul li{
	display:inline-block;
	margin-top:1em;
}
.top-menu ul li a{
	font-size:1.1em;
  font-family: 'Engagement', cursive;
	display:block;
	padding:10px 18px;
	margin:0 1em;
	color:#fff;
	text-decoration:none;
}
.top-menu ul li.active a,.top-menu ul li a:hover{
	color:#ADEFD1FF;
}
.glyphicon {
  top: -8px;
  display: block;
  color: white;
}
.glyphicon-user:before,.glyphicon-envelope:before,.glyphicon-home:before,.glyphicon-picture:before,.glyphicon-calendar:before,.glyphicon-map-marker:before,.glyphicon-tags:before{
	color:#fff;
}

.contact h2 {
  color: #fff;
  font-weight: 600;
  margin-top: 1.5em;

  text-align: center;
}
.contact-main{
	margin-top:10em;
   margin-left: 210px;
   
  
}
.contact-main h3{
	color:#ADEFD1FF;
	font-size:2.2em;
	line-height:1.3em;
	width:80%;
   margin-left: 210px;

}
.contact-main h3 span{
	font-weight:600;
	color:#fff;
}
.contact-left{
	margin-left:530px;
	padding-left: 40px;
	background-color: #ffffff59;
	border-radius: 30px;
	margin-top: -188px;


}
.contact-grids {
  margin-top: 2em;
 
}
.contact-left p{
	color:#fff;
	font-weight:500;
	line-height:1.5em;
	width:80%;
	margin: 0 0 2em 0;
}
.contact-left ul li {
  display: inline-block;
  margin: 7px 0;
  width: 72%;
}
.contact-left ul li.text-info {
  width: 17%;
  color: #FFFFFF;
  vertical-align: top;
  font-weight: 400;
}
.contact-left form input[type="text"] {
  width: 100%;
  padding: 8px;
  font-size: 0.88em;
  font-weight: 600;
  border: 1px solid #D6D6D6;
  outline: none;
  font-style:italic;
  color: #999;
}
.contact-left textarea {
  width: 100%;
  min-height: 150px;
  resize: none;
   font-weight: 600;
   font-size: 0.88em;
  padding: 8px;
  color: #999;
  font-style:italic;
  margin-bottom:1em;
}
.contact-left input[type="submit"] {
  color: #fff;
  background: rgba(255, 0, 140, 0.59);
  padding: 5px 15px;
  display: inline-block;
  margin:0em 0 0 7em;
  outline:none;
  border:none;
}
.contact-left input[type="submit"]:hover{
	background:rgba(255, 0, 140, 0.77);
}
		</style>

</head>
<body style="background-image: url('image/8.jpg');">
<?php include_once('includes/header.php');?>
<div class="contact content">
 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 
		 <div class="contact-main">
			 <h4 style="color: white"><span class="glyphicon glyphicon-home" aria-hidden="true"> <?php  echo htmlentities($row->PageDescription);?></h4>
			 	<br>
			 	<h4 style="color: white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> <?php  echo htmlentities($row->Email);?></h4>
			 		<br>
			 		<h4 style="color: white"><span class="glyphicon glyphicon-phone" aria-hidden="true"> <?php  echo htmlentities($row->MobileNumber);?></h4>
			 		<?php $cnt=$cnt+1;}} ?>

			 <div class="contact-grids">
				 <div class="col-md-6 contact-left">
				 	<h2><?php  echo htmlentities($row->PageTitle);?></h2>
					
					 <form method="post">
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="text" name="name" required="true" ></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" class="text" name="email" required="true"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number: </li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Message:</li>
							 <li><textarea value="Write here" name="message" required="true"></textarea></li>
						 </ul>						
						 <input type="submit" name="submit" value="Submit">					 
					 </form>
				 </div>
				 
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>