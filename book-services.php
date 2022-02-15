<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
  	$bid=$_GET['bookid'];
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':bid',$bid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='services.php'</script>";
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
<!--<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />-->
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

</head>
<style>
body{
	background-image: url(image/bg.jpg) ;

}

.header{
	

background-image: url("image/h1.png");
	background-size:cover;
	text-align:center;
	padding:2em 0;
	min-height:150px;
}
.logo a h1{
	
	font-family: 'Monoton', cursive;

	
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
	margin-top:2.5em;
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
	padding-left:0;
	margin-left: 350px;
background-color:#00000061 ;
font-family:arial narrow;
font-size: 110%;
border-radius: 30px;
  padding: 20px;
}
.contact-grids {
  margin-top: 2em;
}
.contact-left p{
	color:#fff;
	font-weight:900;
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
  font-weight: 900;
  margin-left: 30px;
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
  width: 70%;
  min-height: 150px;
  resize: none;
   font-weight: 600;
   font-size: 0.88em;
  padding: 8px;
  color: #FFF;
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
.contact-map{
	margin-top:2em;
}
.contact-map iframe{
	width: 80%;
  min-height: 378px;
  border: 18px solid #fff;
}
.form-control {
    display: block;
    width: 70%;

    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    margin-left: 150px;
font-family:arial narrow;
    line-height: 1.42857143;
    color: #fff;
    background-color: #3f51b54f;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 30px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.text {
    display: block;
    width: 75%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
font-family:arial narrow;
    line-height: 1.42857143;
    color: #FFF;
      margin-left: 120px;
    background-color: #3f51b54f;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 30px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
</style><?php include_once('includes/header.php');?>
<div class="contact content">
	 

<body style="" >

		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Book Services</li>	  
		 </ol>
		
		<form>
			 <div class="contact-grids">
				 <div class="col-md-6 contact-left">
					 <h3 style="margin-left: 230px; color:white;"><b style=";font-family:arial narrow; color:white;">Book Your Events Now. </b></h3><br>
					 <form method="post">
					 
					 	
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="form-control" name="name" required="true"></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info" >Email: </li>
							 <li><input type="email" class="form-control" name="email" required="true"></li>
						 </ul>
						 <ul>
						 	 <ul>
							 <li class="text-info" ><p style="margin-left:-40px">Mobile: </p></li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>
							 <li class="text-info">Event Date: </li>
							 <li><input type="date" class="form-control" name="edate" required="true"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Event Starting Time:</li>
							 <li><select type="text" class="form-control" name="est" required="true">
							 	<option value="">Select Starting Time</option>
							 	<option value="1 A.M">1 A.M </option>
							 	<option value="2 A.M">2 A.M </option>
							 	<option value="3 A.M">3 A.M </option>
							 	<option value="4 A.M">4 A.M </option>
							 	<option value="5 A.M">5 A.M </option>
							 	<option value="6 A.M">6 A.M </option>
							 	<option value="7 A.M">7 A.M </option>
							 	<option value="8 A.M">8 A.M </option>
							 	<option value="9 A.M">9 A.M </option>
							 	<option value="10 A.M">10 A.M</option>
							 	<option value="11 A.M">11 A.M</option>
							 	<option value="12 P.M">12 P.M</option>
							 	<option value="1 P.M">1 P.M </option>
							 	<option value="2 P.M">2 P.M </option>
							 	<option value="3 P.M">3 P.M </option>
							 	<option value="4 P.M">4 P.M </option>
							 	<option value="5 P.M">5 P.M </option>
							 	<option value="6 P.M">6 P.M </option>
							 	<option value="7 P.M">7 P.M </option>
							 	<option value="8 P.M">8 P.M </option>
							 	<option value="9 P.M">9 P.M </option>
							 	<option value="10 P.M">10 P.M</option>
							 	<option value="11 P.M">11 P.M</option>
							 	<option value="12 A.M">12 A.M</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Event Time Duration:</li>
							 <li><select type="text" class="form-control" name="eetime" required="true">
							 	<option value="">Select Time Duration</option>
							 	<option value="1 Hour">1 Hour</option>
							 	<option value="2 Hour">2 Hour</option>
							 	<option value="3 Hour">3 Hour</option>
							 	<option value="4 Hour">4 Hour</option>
							 	<option value="5 Hour">5 Hour</option>
							 	<option value="6 Hour">6 Hour</option>
							 	<option value="7 Hour">7 Hour</option>
							 	<option value="8 Hour">8 Hour"</option>
							 	<option value="9 Hour">9 Hour</option>
							 	<option value="10 Hour">10 Hour</option>
							 	
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Venue Address:</li>
							 <li><textarea type="text" class="form-control" name="vaddress" required="true" ></textarea></li>
						 </ul>
						 <ul>
							 <li class="text-info">Type of Event:</li>
							 <li><select type="text" class="form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option>

							 	<?php 

$sql2 = "SELECT * from   tbleventtype ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
 <?php } ?>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-info">Additional Information:</li>
							 <li><textarea type="text" class="form-control" name="addinfo" required="true"></textarea></li>
						 </ul>					
						 <input type="submit" name="submit" value="Book">					 
					 </form>
				 </div>
				 <!--<div class="col-md-6 contact-right">
					 	<div class="contact-map">
						<img src="images/431427.jpg" class="img-responsive" height="900" width="500" alt=""/>
						</div>
				 </div>-->
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->
</form>

<!---->
</body>
</html>