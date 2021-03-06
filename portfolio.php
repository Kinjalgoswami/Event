<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portfolio</title>
	 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />
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
			img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
	color: #fff;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

/*---------------------
  Helper CSS
-----------------------*/

.section-title {
	margin-bottom: 40px;
}

.section-title h2 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.section-title p {
	color: #666666;
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.spad {
	padding-top: 100px;
	padding-bottom: 100px;
}

.spad-2 {
	padding-top: 50px;
	padding-bottom: 70px;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/* buttons */

.primary-btn {
	display: inline-block;
	font-size: 16px;
	padding: 14px 30px;
	color: #ffffff;
	background: #009603;
	text-transform: uppercase;
	font-weight: 700;
	font-family: "Quantico", sans-serif;
}

.site-btn {
	font-size: 15px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-family: "Quantico", sans-serif;
	display: inline-block;
	padding: 14px 30px 12px;
	background: #009603;
	border: none;
}

/* Preloder */
.spacial-controls {
	position: fixed;
	width: 111px;
	height: 91px;
	top: 0;
	right: 0;
	z-index: 999;
}

.spacial-controls .search-switch {
	display: block;
	height: 100%;
	padding-top: 30px;
	background: #323232;
	text-align: center;
	cursor: pointer;
}

.search-model {
	display: none;
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	z-index: 99999;
}

.search-model-form {
	padding: 0 15px;
}

.search-model-form input {
	width: 500px;
	font-size: 40px;
	border: none;
	border-bottom: 2px solid #333;
	background: none;
	color: #999;
}

.search-close-switch {
	position: absolute;
	width: 50px;
	height: 50px;
	background: #333;
	color: #fff;
	text-align: center;
	border-radius: 50%;
	font-size: 28px;
	line-height: 28px;
	top: 30px;
	cursor: pointer;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

/*---------------------
  Header
-----------------------*/



.nav-menu {
	float: left;
}

.nav-menu ul li {
	list-style: none;
	display: inline-block;
	margin-right: 30px;
	position: relative;
}

.nav-menu ul li:last-child {
	margin-right: 0;
}

.nav-menu ul li:hover .dropdown {
	top: 86px;
	opacity: 1;
	visibility: visible;
}

.nav-menu ul li:hover>a:after {
	opacity: 1;
}

.nav-menu ul li.active a:after {
	opacity: 1;
}

.nav-menu ul li a {
	font-size: 16px;
	font-weight: 700;
	text-transform: uppercase;
	color: #111111;
	display: block;
	padding: 32px 8px 30px;
	position: relative;
	font-family: "Quantico", sans-serif;
}

.nav-menu ul li a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	height: 3px;
	width: 100%;
	background: #009603;
	content: "";
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.nav-menu ul li .dropdown {
	position: absolute;
	left: 0;
	top: 105px;
	background: #111111;
	width: 180px;
	z-index: 99;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.nav-menu ul li .dropdown li {
	display: block;
	margin-right: 0;
}

.nav-menu ul li .dropdown li a {
	color: #ffffff;
	padding: 5px 18px;
	font-weight: 400;
	text-transform: capitalize;
}

.nav-menu ul li .dropdown li a:after {
	display: none;
}

.top-search {
	font-size: 15px;
	height: 50px;
	width: 50px;
	color: #ffffff;
	background: #009603;
	line-height: 50px;
	text-align: center;
	cursor: pointer;
	float: right;
	margin: 19px 0 16px;
}

.slicknav_menu {
	display: none;
}

/*---------------------
  Hero
-----------------------*/

.hs-slider.owl-carousel .owl-item.active .hs-text h2 {
	top: 0;
	opacity: 1;
}

.hs-slider.owl-carousel .owl-item.active .hs-text p {
	top: 0;
	opacity: 1;
}

.hs-slider.owl-carousel .owl-item.active .hs-text .primary-btn {
	top: 0;
	opacity: 1;
}

.hs-slider.owl-carousel .owl-nav button {
	font-size: 24px;
	color: #ffffff;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 50%;
	position: absolute;
	left: 100px;
	top: 50%;
	-webkit-transform: translateY(-25px);
	-ms-transform: translateY(-25px);
	transform: translateY(-25px);
}

.hs-slider.owl-carousel .owl-nav button.owl-next {
	left: auto;
	right: 100px;
}

.hs-item {
	height: 900px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	text-align: center;
}

.hs-item .hs-text h2 {
	font-size: 60px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 20px;
	position: relative;
	top: 100px;
	-webkit-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
	opacity: 0;
}

.hs-item .hs-text p {
	color: #ffffff;
	line-height: 30px;
	margin-bottom: 32px;
	position: relative;
	top: 100px;
	-webkit-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	transition: all 0.5s ease-out;
	opacity: 0;
}

.hs-item .hs-text .primary-btn {
	position: relative;
	top: 100px;
	-webkit-transition: all 0.7s ease-out;
	-o-transition: all 0.7s ease-out;
	transition: all 0.7s ease-out;
	opacity: 0;
}

/*---------------------
  Services
-----------------------*/

.services-section {
	padding-top: 0;
	padding-bottom: 60px;
}

.services-section.services-normal .container {
	margin-top: 0;
}

.services-section .container {
	position: relative;
	margin-top: -70px;
	z-index: 99;
}

.services-item {
	text-align: center;
	padding: 10px 10px 18px 10px;
	background: #ffffff;
	-webkit-box-shadow: 0px 10px 25px rgba(206, 206, 206, 0.5);
	box-shadow: 0px 10px 25px rgba(206, 206, 206, 0.5);
	margin-bottom: 30px;
}

.services-item img {
	margin-bottom: 28px;
	min-width: 100%;
}

.services-item h3 {
	color: #191039;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 10px;
}

/*---------------------
  Categories Section
-----------------------*/

.right-btn {
	text-align: right;
	padding-top: 24px;
}

.categories-slider.owl-carousel .owl-item.active .cs-item .cs-text h4 {
	opacity: 1;
}

.categories-slider.owl-carousel .owl-item.active .cs-item .cs-text span {
	opacity: 1;
}

.categories-slider.owl-carousel .owl-nav button {
	font-size: 24px;
	color: #ffffff;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 50%;
	position: absolute;
	left: 30px;
	top: 152px;
}

.categories-slider.owl-carousel .owl-nav button.owl-next {
	left: auto;
	right: 30px;
}

.cs-item {
	text-align: center;
	width: 100%;
	background: #f5f5f5;
}

.cs-item .cs-pic {
	height: 360px;
}

.cs-item .cs-text {
	padding: 25px 0 22px;
}

.cs-item .cs-text h4 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 10px;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.cs-item .cs-text span {
	font-size: 17px;
	color: #009603;
	display: block;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

/*---------------------
  Portfolio
-----------------------*/

.portfolio-section .container-fluid {
	padding-left: 35px;
}

.portfolio-section.portfolio-page {
	padding-top: 0;
}

.portfolio-section .section-title {
	margin-bottom: 22px;
	text-align: center;
}

.portfolio-section .section-title h2 {
	margin-bottom: 0;
}

.filter-controls {
	margin-bottom: 43px;
	text-align: center;
}

.filter-controls ul li {
	font-size: 17px;
	color: #FFF;
	display: inline-block;
	list-style: none;
	margin-right: 60px;
	position: relative;
	cursor: pointer;
}

.filter-controls ul li.active {
	color: #00203FFF;
}

.filter-controls ul li:after {
	position: absolute;
	right: -33px;
	top: -1px;
	content: "|";
	color: #d7d7d7;
}

.filter-controls ul li:last-child {
	margin-right: 0;
}

.filter-controls ul li:last-child:after {
	display: none;
}

.portfolio-filter .pf-item {
	width: calc(20% - 20px);
	height: 360px;
	float: left;
	margin-right: 20px;
	margin-bottom: 20px;
	position: relative;
	z-index: 1;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	overflow: hidden;
}

.portfolio-filter .pf-item:after {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
	content: "";
	z-index: -1;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.portfolio-filter .pf-item .pf-icon {
	font-size: 36px;
	color: #ffffff;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.portfolio-filter .pf-item:hover:after {
	opacity: 1;
}

.portfolio-filter .pf-item:hover .pf-icon {
	opacity: 1;
}

.portfolio-filter .pf-item:hover .pf-text {
	bottom: 25px;
}

.portfolio-filter .pf-item:hover .pf-text h4 {
	opacity: 1;
	top: 0;
}

.portfolio-filter .pf-item:hover .pf-text span {
	opacity: 1;
	top: 0;
}

.portfolio-filter .pf-item .pf-text {
	text-align: center;
	position: absolute;
	left: 0;
	bottom: -100px;
	width: 100%;
}

.portfolio-filter .pf-item .pf-text h4 {
	color: #ffffff;
	font-weight: 700;
	text-align: center;
	margin-bottom: 5px;
	position: relative;
	top: 20px;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.portfolio-filter .pf-item .pf-text span {
	font-size: 15px;
	color: #009603;
	position: relative;
	top: 40px;
	-webkit-transition: all 0.6s;
	-o-transition: all 0.6s;
	transition: all 0.6s;
}

.portfolio-filter .pf-item.large-width {
	width: calc(40% - 20px);
}

.portfolio-filter .pf-item.large-height {
	height: 740px;
}

.load-more-btn {
	text-align: center;
	margin-top: 30px;
	overflow: hidden;
}

.load-more-btn.portfolio-btn a {
	background: #009603;
}

.load-more-btn a {
	font-size: 15px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	display: inline-block;
	padding: 15px 102px 13px;
	background: #000606;
	font-family: "Quantico", sans-serif;
}

/*---------------------
  Footer
-----------------------*/

.footer-section {
	background: #000606;
	padding-top: 70px;
}

.fs-about {
	margin-bottom: 30px;
}

.fs-about .fa-logo {
	margin-bottom: 34px;
}

.fs-about p {
	color: #c4c4c4;
	margin-bottom: 20px;
}

.fs-about .fa-social a {
	display: inline-block;
	font-size: 18px;
	color: #ffffff;
	margin-right: 20px;
}

.fs-about .fa-social a:last-child {
	margin-right: 0;
}

.fs-widget {
	margin-bottom: 30px;
	overflow: hidden;
}

.fs-widget h5 {
	font-size: 20px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.fs-widget .fw-instagram {
	margin-right: -5px;
	overflow: hidden;
}

.fs-widget .fw-instagram img {
	width: calc(33.33% - 5px);
	margin-right: 5px;
	float: left;
}

.fs-widget ul {
	width: 50%;
	float: left;
}

.fs-widget ul li {
	list-style: none;
}

.fs-widget ul li a {
	font-size: 15px;
	color: #c4c4c4;
	line-height: 36px;
}

.fs-widget p {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form {
	position: relative;
}

.fs-widget .fw-subscribe form input {
	width: 100%;
	height: 50px;
	font-size: 15px;
	color: #c4c4c4;
	padding-left: 20px;
	border: 1px solid #009603;
	background: transparent;
}

.fs-widget .fw-subscribe form input::-webkit-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::-moz-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input:-ms-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::-ms-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form button {
	font-size: 18px;
	color: #ffffff;
	background: #009603;
	height: 50px;
	width: 50px;
	border: none;
	position: absolute;
	right: 0;
	top: 0;
}

.copyright-text {
	font-size: 15px;
	color: #c4c4c4;
	text-align: center;
	border-top: 1px solid #181d1d;
	padding: 30px 0;
	margin-top: 40px;
}

/*---------------------
  Breadcrumb
-----------------------*/

.breadcrumb-option {
	padding-top: 55px;
}

.breadcrumb-option .bo-links a {
	font-size: 15px;
	color: #111111;
	margin-right: 20px;
	position: relative;
}

.breadcrumb-option .bo-links a i {
	margin-right: 5px;
}

.breadcrumb-option .bo-links a:after {
	position: absolute;
	right: -18px;
	top: 1px;
	content: "5";
	font-family: "ElegantIcons";
}

.breadcrumb-option .bo-links span {
	font-size: 15px;
	color: #888888;
}

/*--------------------------------- Other Pages Styles -----------------------------*/

/*---------------------
  About Section
-----------------------*/

.about-pic {
	height: 960px;
	position: relative;
}

.about-pic .play-btn {
	height: 100px;
	width: 100px;
	line-height: 100px;
	text-align: center;
	background: #009603;
	font-size: 30px;
	color: #ffffff;
	display: inline-block;
	border-radius: 50%;
	position: absolute;
	right: -50px;
	top: 50%;
	-webkit-transform: translateY(-50px);
	-ms-transform: translateY(-50px);
	transform: translateY(-50px);
	z-index: 9;
}

.about-text {
	background: #f5f5f5;
	padding-left: 60px;
	padding-top: 50px;
	height: 960px;
}

.about-text .section-title h2 {
	line-height: 47px;
	margin-bottom: 30px;
}

.about-text .at-list .al-item {
	margin-bottom: 50px;
	overflow: hidden;
}

.about-text .at-list .al-item:last-child {
	margin-bottom: 0;
}

.about-text .at-list .al-item .al-pic {
	height: 100px;
	width: 100px;
	line-height: 100px;
	text-align: center;
	background: #ffffff;
	float: left;
	margin-right: 30px;
}

.about-text .at-list .al-item .al-text {
	overflow: hidden;
}

.about-text .at-list .al-item .al-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 8px;
}

.about-text .at-list .al-item .al-text p {
	color: #666666;
	margin-bottom: 0;
}

/*---------------------
  Team Section
-----------------------*/

.team-section {
	padding-bottom: 70px;
}

.team-item {
	background: #f5f5f5;
	text-align: center;
	margin-bottom: 30px;
}

.team-item img {
	min-width: 100%;
}

.team-item .ti-text {
	padding: 25px 0;
}

.team-item .ti-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 5px;
}

.team-item .ti-text span {
	display: block;
	font-size: 15px;
	color: #009603;
	margin-bottom: 20px;
}

.team-item .ti-text .ti-social a {
	color: #666666;
	font-size: 15px;
	display: inline-block;
	margin-right: 20px;
}

.team-item .ti-text .ti-social a:last-child {
	margin-right: 0;
}

/*---------------------
  Cta Section
-----------------------*/

.cta-section {
	padding-top: 140px;
	padding-bottom: 150px;
}

.cta-text {
	text-align: center;
}

.cta-text h2 {
	font-size: 50px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.cta-text p {
	font-size: 17px;
	line-height: 30px;
	color: #ffffff;
	margin-bottom: 30px;
}

/*---------------------
  Testimonial Section
-----------------------*/

.testimonial-section {
	padding-bottom: 70px;
}

.testimonial-section .section-title {
	text-align: center;
	margin-bottom: 60px;
}

.testimonial-item {
	border-top: 5px solid #e1e1e1;
	padding-top: 30px;
	position: relative;
	margin-bottom: 30px;
}

.testimonial-item:before {
	position: absolute;
	left: 0;
	top: -12px;
	background-image: url(../img/testimonial/quote.png);
	background-repeat: no-repeat;
	content: "";
	height: 26px;
	width: 26px;
	background-color: #ffffff;
}

.testimonial-item .ti-author {
	overflow: hidden;
	margin-bottom: 18px;
}

.testimonial-item .ti-author .ta-pic {
	margin-right: 25px;
	float: left;
}

.testimonial-item .ti-author .ta-pic img {
	height: 90px;
	width: 90px;
	border-radius: 50%;
}

.testimonial-item .ti-author .ta-text {
	overflow: hidden;
	padding-top: 24px;
}

.testimonial-item .ti-author .ta-text h5 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 5px;
}

.testimonial-item .ti-author .ta-text span {
	font-size: 15px;
	color: #888888;
}

.testimonial-item p {
	color: #444444;
	margin-bottom: 0;
}

/*---------------------
  Services Option
-----------------------*/

.services-option {
	padding-bottom: 50px;
}

.so-item {
	margin-bottom: 42px;
}

.so-item .so-title {
	overflow: hidden;
	margin-bottom: 12px;
}

.so-item .so-title .so-number {
	font-size: 16px;
	color: #ffffff;
	font-weight: 600;
	width: 36px;
	height: 36px;
	line-height: 36px;
	text-align: center;
	background: #009603;
	float: left;
	margin-right: 20px;
}

.so-item .so-title h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	overflow: hidden;
	line-height: 36px;
}

.so-item p {
	color: #666666;
	margin-bottom: 0;
}

/*---------------------
  Pricing Section
-----------------------*/

.pricing-section {
	padding-bottom: 35px;
	padding-top: 0;
}

.section-title.pricing-title {
	margin-bottom: 110px;
}

.pricing-item {
	position: relative;
	background: #ffffff;
	z-index: 1;
	text-align: center;
	padding-bottom: 20px;
	-webkit-box-shadow: 0px 0px 25px rgba(206, 206, 206, 0.5);
	box-shadow: 0px 0px 25px rgba(206, 206, 206, 0.5);
	margin-bottom: 110px;
}

.pricing-item:after {
	position: absolute;
	left: 50%;
	top: -73px;
	height: 73px;
	width: 150px;
	background: #ffffff;
	content: "";
	border-top-left-radius: 75px;
	border-top-right-radius: 75px;
	z-index: -1;
	-webkit-transform: translateX(-75px);
	-ms-transform: translateX(-75px);
	transform: translateX(-75px);
	-webkit-box-shadow: 0px -8px 25px -8px rgba(206, 206, 206, 0.5);
	box-shadow: 0px -8px 25px -8px rgba(206, 206, 206, 0.5);
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.pricing-item:hover:after {
	background: #009603;
}

.pricing-item:hover .pi-price h2 {
	color: #ffffff;
}

.pricing-item:hover .pi-price span {
	color: #ffffff;
}

.pricing-item:hover .pi-title {
	background: #009603;
}

.pricing-item:hover .pi-title h3 {
	color: #ffffff;
	border-bottom: 1px solid transparent;
}

.pricing-item:hover .pi-text .primary-btn {
	background: #009603;
	color: #ffffff;
}

.pricing-item .pi-price {
	position: absolute;
	top: -32px;
	width: 100%;
	left: 0;
}

.pricing-item .pi-price h2 {
	color: #009603;
	font-weight: 700;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
	transition: all 0.2s;
}

.pricing-item .pi-price span {
	font-size: 15px;
	color: #111111;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
	transition: all 0.2s;
}

.pricing-item .pi-title {
	padding-top: 65px;
	padding-left: 20px;
	padding-right: 20px;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.pricing-item .pi-title h3 {
	color: #111111;
	font-weight: 700;
	padding-bottom: 32px;
	text-transform: uppercase;
	border-bottom: 1px solid #ebebeb;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
	transition: all 0.2s;
}

.pricing-item .pi-text {
	padding-left: 20px;
	padding-right: 20px;
}

.pricing-item .pi-text ul {
	margin: 25px 0;
}

.pricing-item .pi-text ul li {
	font-size: 15px;
	color: #666666;
	line-height: 42px;
	list-style: none;
}

.pricing-item .pi-text .primary-btn {
	font-size: 15px;
	color: #111111;
	background: #ebebeb;
	padding: 14px 0;
	display: block;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

/*---------------------
  Portfolio Hero
-----------------------*/

.portfolio-hero-section {
	height: 900px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	text-align: center;
}

.ph-text {
	background: rgba(0, 0, 0, 0.7);
	display: inline-block;
	padding: 60px 75px 65px;
	text-align: center;
}

.ph-text h2 {
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 12px;
}

.ph-text ul li {
	list-style: none;
	display: inline-block;
	color: #009603;
	font-size: 15px;
	margin-right: 28px;
	position: relative;
}

.ph-text ul li:after {
	position: absolute;
	right: -20px;
	top: -1px;
	color: #e1e1e1;
	opacity: 0.5;
	content: "|";
}

.ph-text ul li:last-child {
	margin-right: 0;
}

.ph-text ul li:last-child:after {
	display: none;
}

/*---------------------
  Portfolio Details
-----------------------*/

.portfolio-details-section {
	padding-top: 70px;
	padding-bottom: 40px;
}

.pd-text {
	margin-bottom: 70px;
}

.pd-text p {
	font-size: 17px;
	line-height: 30px;
}

.pd-text p:first-child {
	margin-bottom: 30px;
}

.portfolio-pics {
	padding-left: 20px;
	margin-bottom: 50px;
}

.portfolio-details-pic .pdp-item {
	width: calc(20% - 20px);
	float: left;
	height: 360px;
	margin-bottom: 20px;
	margin-right: 20px;
}

.portfolio-details-pic .pdp-item.large-width {
	width: calc(40% - 20px);
}

.portfolio-details-pic .pdp-item.large-height {
	height: 740px;
}

.pd-more-text h2 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 30px;
}

.pd-more-text p {
	font-size: 17px;
	line-height: 30px;
}

/*---------------------
  Recent Photography
-----------------------*/

.recent-photography-section {
	padding-top: 0;
}

.recent-photography-section .section-title {
	padding-top: 50px;
	border-top: 1px solid #e1e1e1;
}

.rp-item {
	text-align: center;
	width: 100%;
	background: #f5f5f5;
	margin-bottom: 30px;
}

.rp-item img {
	min-width: 100%;
}

.rp-item .rp-text {
	padding: 26px 0 25px;
}

.rp-item .rp-text h5 {
	color: #111111;
	font-weight: 700;
	font-size: 20px;
	text-transform: uppercase;
	margin-bottom: 5px;
}

.rp-item .rp-text span {
	font-size: 15px;
	font-weight: 600;
	color: #009603;
	display: block;
}

/*---------------------
  Blog
-----------------------*/

.blog-section {
	padding-top: 0;
}

.blog-item {
	margin-bottom: 50px;
	overflow: hidden;
}

.blog-item .bi-pic {
	float: left;
	margin-right: 30px;
}

.blog-item .bi-text {
	overflow: hidden;
}

.blog-item .bi-text .label {
	font-size: 12px;
	color: #ffffff;
	font-weight: 600;
	display: inline-block;
	background: #009603;
	padding: 2px 12px;
	text-transform: uppercase;
}

.blog-item .bi-text h5 {
	margin-top: 20px;
	margin-bottom: 10px;
}

.blog-item .bi-text h5 a {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	line-height: 27px;
	text-transform: uppercase;
}

.blog-item .bi-text ul {
	margin-bottom: 14px;
}

.blog-item .bi-text ul li {
	font-size: 13px;
	color: #888888;
	display: inline-block;
	list-style: none;
	margin-right: 24px;
	position: relative;
}

.blog-item .bi-text ul li:after {
	position: absolute;
	right: -17px;
	top: -1px;
	content: "|";
}

.blog-item .bi-text ul li:last-child {
	margin-right: 0;
}

.blog-item .bi-text ul li:last-child:after {
	display: none;
}

.blog-item .bi-text ul li span {
	color: #111111;
}

.blog-item .bi-text p {
	color: #444444;
	line-height: 30px;
	letter-spacing: 0.5px;
	margin-bottom: 0;
}

.blog-pagination a {
	display: inline-block;
	font-size: 20px;
	font-weight: 600;
	background: #f2f2f2;
	color: #111111;
	padding: 12px 22px;
	margin-right: 8px;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.blog-pagination a:hover {
	color: #ffffff;
	background: #111111;
}

.blog-pagination a:last-child {
	margin-right: 0;
}

.blog-sidebar .bs-item.s-mb {
	margin-bottom: 55px;
}

.blog-sidebar .bs-item h5 {
	font-size: 20px;
	font-weight: 700;
	color: #111111;
	text-transform: uppercase;
	position: relative;
	margin-bottom: 35px;
}

.blog-sidebar .bs-item h5:after {
	position: absolute;
	right: 0;
	top: 10px;
	height: 3px;
	width: 95px;
	background: #e1e1e1;
	content: "";
}

.blog-sidebar .bs-item .bi-feature-post .fp-item {
	overflow: hidden;
	margin-bottom: 30px;
	display: block;
}

.blog-sidebar .bs-item .bi-feature-post .fp-item .fp-pic {
	float: left;
	margin-right: 20px;
}

.blog-sidebar .bs-item .bi-feature-post .fp-item .fp-text {
	overflow: hidden;
}

.blog-sidebar .bs-item .bi-feature-post .fp-item .fp-text h6 {
	font-size: 15px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	line-height: 20px;
}

.blog-sidebar .bs-item .bi-feature-post .fp-item .fp-text span {
	font-size: 13px;
	color: #888888;
}

.blog-sidebar .bs-item p {
	color: #444444;
	font-weight: 500;
}

.blog-sidebar .bs-item .bi-subscribe form input {
	font-size: 13px;
	color: #444444;
	height: 46px;
	width: 100%;
	border: 1px solid #d7d7d7;
	padding-left: 15px;
	background: transparent;
	margin-bottom: 20px;
}

.blog-sidebar .bs-item .bi-subscribe form input::-webkit-input-placeholder {
	color: #444444;
}

.blog-sidebar .bs-item .bi-subscribe form input::-moz-placeholder {
	color: #444444;
}

.blog-sidebar .bs-item .bi-subscribe form input:-ms-input-placeholder {
	color: #444444;
}

.blog-sidebar .bs-item .bi-subscribe form input::-ms-input-placeholder {
	color: #444444;
}

.blog-sidebar .bs-item .bi-subscribe form input::placeholder {
	color: #444444;
}

.blog-sidebar .bs-item .bi-subscribe form .site-btn {
	width: 100%;
}

.blog-sidebar .bs-item .bi-insta {
	margin-right: -10px;
	overflow: hidden;
}

.blog-sidebar .bs-item .bi-insta img {
	width: calc(50% - 10px);
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

/*---------------------
  Blog Details Section
-----------------------*/

.blog-hero {
	height: 960px;
}

.blog-details-section {
	padding-top: 0;
	padding-bottom: 60px;
}

.blog-details-text {
	background: #ffffff;
	padding-top: 60px;
	padding-left: 55px;
	padding-right: 55px;
	margin-top: -240px;
}

.blog-details-text .bd-title {
	margin-bottom: 60px;
}

.blog-details-text .bd-title .bt-bread {
	margin-bottom: 12px;
}

.blog-details-text .bd-title .bt-bread a {
	font-size: 15px;
	color: #111111;
	margin-right: 20px;
	position: relative;
}

.blog-details-text .bd-title .bt-bread a i {
	margin-right: 5px;
}

.blog-details-text .bd-title .bt-bread a:after {
	position: absolute;
	right: -18px;
	top: 1px;
	content: "5";
	font-family: "ElegantIcons";
}

.blog-details-text .bd-title .bt-bread span {
	font-size: 15px;
	color: #888888;
}

.blog-details-text .bd-title h2 {
	font-size: 42px;
	color: #111111;
	font-weight: 700;
	line-height: 55px;
	margin-bottom: 18px;
}

.blog-details-text .bd-title ul li {
	font-size: 13px;
	color: #888888;
	display: inline-block;
	list-style: none;
	margin-right: 24px;
	position: relative;
}

.blog-details-text .bd-title ul li:after {
	position: absolute;
	right: -17px;
	top: -1px;
	content: "|";
}

.blog-details-text .bd-title ul li:last-child {
	margin-right: 0;
}

.blog-details-text .bd-title ul li:last-child:after {
	display: none;
}

.blog-details-text .bd-title ul li span {
	color: #111111;
}

.blog-details-text .bd-top-text {
	margin-bottom: 50px;
}

.blog-details-text .bd-top-text p {
	font-size: 17px;
	color: #444444;
	line-height: 30px;
}

.blog-details-text .bd-quote {
	border-top: 10px solid #f2f2f2;
	position: relative;
	margin-bottom: 35px;
}

.blog-details-text .bd-quote:after {
	position: absolute;
	left: 0;
	top: -20px;
	background-image: url(../img/blog/details/quote.png);
	height: 22px;
	width: 45px;
	background-repeat: no-repeat;
	background-color: #ffffff;
	content: "";
}

.blog-details-text .bd-quote p {
	font-size: 20px;
	color: #111111;
	line-height: 35px;
	font-weight: 600;
	font-style: italic;
	padding-top: 24px;
}

.blog-details-text .bd-desc {
	margin-bottom: 40px;
}

.blog-details-text .bd-desc p {
	font-size: 17px;
	color: #444444;
	line-height: 30px;
}

.blog-details-text .bd-pics {
	margin-right: -10px;
	overflow: hidden;
	margin-bottom: 34px;
}

.blog-details-text .bd-pics img {
	width: calc(33.33% - 10px);
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

.blog-details-text .bd-last-desc {
	margin-bottom: 40px;
}

.blog-details-text .bd-last-desc p {
	font-size: 17px;
	color: #444444;
	line-height: 30px;
}

.blog-details-text .bd-tag-share {
	overflow: hidden;
	padding-top: 35px;
	border-top: 1px solid #ebebeb;
	margin-bottom: 50px;
}

.blog-details-text .bd-tag-share .tags {
	float: left;
}

.blog-details-text .bd-tag-share .tags a {
	font-size: 13px;
	display: inline-block;
	color: #444444;
	text-transform: uppercase;
	padding: 8px 14px;
	background: #ebebeb;
	margin-right: 9px;
}

.blog-details-text .bd-tag-share .tags a:last-child {
	margin-right: 0;
}

.blog-details-text .bd-tag-share .share {
	float: right;
}

.blog-details-text .bd-tag-share .share span {
	display: inline-block;
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 600;
	color: #111111;
	margin-right: 20px;
}

.blog-details-text .bd-tag-share .share a {
	display: inline-block;
	font-size: 14px;
	color: #ffffff;
	width: 46px;
	height: 46px;
	line-height: 46px;
	text-align: center;
	margin-left: 6px;
}

.blog-details-text .bd-tag-share .share a.facebook {
	background: #3263AF;
}

.blog-details-text .bd-tag-share .share a.twitter {
	background: #40C4FF;
}

.blog-details-text .bd-tag-share .share a.youtube {
	background: #FF0000;
}

.blog-details-text .bd-tag-share .share a.instagram {
	background: -o-linear-gradient(45deg, #af00e1, #ff9e35);
	background: linear-gradient(45deg, #af00e1, #ff9e35);
}

.blog-details-text .bd-related-post {
	margin-bottom: 60px;
}

.blog-details-text .bd-related-post .post-item {
	display: block;
	overflow: hidden;
}

.blog-details-text .bd-related-post .post-item.prev-item .pi-pic {
	float: left;
	margin-right: 30px;
}

.blog-details-text .bd-related-post .post-item.prev-item .pi-text {
	overflow: hidden;
}

.blog-details-text .bd-related-post .post-item.next-item {
	text-align: right;
}

.blog-details-text .bd-related-post .post-item.next-item .pi-pic {
	float: right;
	margin-left: 30px;
}

.blog-details-text .bd-related-post .post-item.next-item .pi-text {
	overflow: hidden;
}

.blog-details-text .bd-related-post .post-item h6 {
	font-size: 15px;
	color: #111111;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 25px;
}

.blog-details-text .bd-related-post .post-item h6 span {
	font-size: 22px;
	position: relative;
	top: 3px;
}

.blog-details-text .bd-related-post .post-item .pi-text .label {
	font-size: 12px;
	color: #ffffff;
	font-weight: 600;
	display: inline-block;
	background: #009603;
	padding: 2px 12px;
	text-transform: uppercase;
}

.blog-details-text .bd-related-post .post-item .pi-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	line-height: 23px;
	letter-spacing: 0.5px;
	margin-top: 10px;
}

.blog-details-text .bd-author {
	background: #f5f5f5;
	padding: 50px;
	margin-bottom: 60px;
}

.blog-details-text .bd-author .avatar-pic {
	float: left;
	margin-right: 30px;
}

.blog-details-text .bd-author .avatar-pic img {
	height: 130px;
	width: 130px;
	border-radius: 50%;
}

.blog-details-text .bd-author .avatar-text {
	overflow: hidden;
}

.blog-details-text .bd-author .avatar-text h4 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 8px;
}

.blog-details-text .bd-author .avatar-text p {
	color: #444444;
	font-size: 17px;
	line-height: 30px;
}

.blog-details-text .bd-author .avatar-text .at-social a {
	font-size: 14px;
	display: inline-block;
	color: #444444;
	margin-right: 15px;
}

.blog-details-text .bd-author .avatar-text .at-social a:last-child {
	margin-right: 0;
}

.blog-details-text .bd-comment-form h4 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.blog-details-text .bd-comment-form .comment-item {
	margin-bottom: 35px;
}

.blog-details-text .bd-comment-form .comment-item .ci-pic {
	float: left;
	margin-right: 20px;
}

.blog-details-text .bd-comment-form .comment-item .ci-pic img {
	height: 70px;
	width: 70px;
	border-radius: 50%;
}

.blog-details-text .bd-comment-form .comment-item .ci-text {
	overflow: hidden;
}

.blog-details-text .bd-comment-form .comment-item .ci-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-right: 8px;
}

.blog-details-text .bd-comment-form .comment-item .ci-text p {
	color: #444444;
	margin-bottom: 10px;
}

.blog-details-text .bd-comment-form .comment-item .ci-text ul li {
	list-style: none;
	display: inline-block;
	font-size: 12px;
	color: #444444;
	margin-right: 25px;
}

.blog-details-text .bd-comment-form .comment-item .ci-text ul li:last-child {
	margin-right: 0;
}

.blog-details-text .bd-comment-form .comment-item .ci-text ul li i {
	font-size: 14px;
	color: #009603;
	margin-right: 5px;
}

.blog-details-text .bd-comment-form .leave-form {
	padding: 35px 40px 40px 40px;
	border: 1px solid #e1e1e1;
}

.blog-details-text .bd-comment-form .leave-form form input {
	height: 50px;
	width: 100%;
	padding-left: 20px;
	font-size: 14px;
	color: #444444;
	background: #f2f2f2;
	margin-bottom: 20px;
	border: none;
}

.blog-details-text .bd-comment-form .leave-form form input::-webkit-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form input::-moz-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form input:-ms-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form input::-ms-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form input::placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form textarea {
	width: 100%;
	padding-left: 20px;
	padding-top: 12px;
	height: 100px;
	font-size: 14px;
	color: #444444;
	background: #f2f2f2;
	resize: none;
	border: none;
	margin-bottom: 14px;
}

.blog-details-text .bd-comment-form .leave-form form textarea::-webkit-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form textarea::-moz-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form textarea:-ms-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form textarea::-ms-input-placeholder {
	color: #444444;
}

.blog-details-text .bd-comment-form .leave-form form textarea::placeholder {
	color: #444444;
}

/*---------------------
  Gallery
-----------------------*/

.gallery-section {
	padding-top: 0;
}

.gallery-section .container-fluid {
	padding-left: 35px;
}

.gallery-filter .gf-item {
	width: calc(20% - 20px);
	height: 360px;
	float: left;
	margin-right: 20px;
	margin-bottom: 20px;
	position: relative;
	z-index: 1;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	overflow: hidden;
}

.gallery-filter .gf-item.small-height {
	height: 240px;
}

.gallery-filter .gf-item.medium-small-height {
	height: 410px;
}

.gallery-filter .gf-item.large-small-height {
	height: 440px;
}

.gallery-filter .gf-item.large-height {
	height: 540px;
}

.gallery-filter .gf-item.medium-large-height {
	height: 510px;
}

.gallery-filter .gf-item:after {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
	content: "";
	z-index: -1;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.gallery-filter .gf-item .gf-icon {
	font-size: 36px;
	color: #ffffff;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.gallery-filter .gf-item:hover:after {
	opacity: 1;
}

.gallery-filter .gf-item:hover .gf-icon {
	opacity: 1;
}

/*---------------------
  Contact
-----------------------*/

.map {
	height: 635px;
}

.map iframe {
	width: 100%;
}

.contact-text h3 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.contact-text p {
	color: #111111;
	margin-bottom: 32px;
}

.contact-text .ct-item {
	overflow: hidden;
	margin-bottom: 30px;
}

.contact-text .ct-item .ct-icon {
	height: 80px;
	width: 80px;
	background: #009603;
	border-radius: 50%;
	font-size: 40px;
	line-height: 80px;
	text-align: center;
	color: #ffffff;
	float: left;
	margin-right: 30px;
}

.contact-text .ct-item .ct-text {
	overflow: hidden;
	padding-top: 12px;
}

.contact-text .ct-item .ct-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.contact-text .ct-item .ct-text p {
	color: #444444;
	margin-bottom: 0;
}

.contact-text .ct-item .ct-text ul li {
	list-style: none;
	display: inline-block;
	margin-right: 30px;
	font-size: 15px;
	color: #444444;
	position: relative;
}

.contact-text .ct-item .ct-text ul li:after {
	position: absolute;
	right: -20px;
	top: -2px;
	content: "|";
}

.contact-text .ct-item .ct-text ul li:last-child {
	margin-right: 0;
}

.contact-text .ct-item .ct-text ul li:last-child:after {
	display: none;
}

.contact-form h3 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.contact-form form input {
	height: 50px;
	width: 100%;
	padding-left: 20px;
	font-size: 14px;
	color: #444444;
	background: transparent;
	margin-bottom: 30px;
	border: 1px solid #e1e1e1;
}

.contact-form form input::-webkit-input-placeholder {
	color: #444444;
}

.contact-form form input::-moz-placeholder {
	color: #444444;
}

.contact-form form input:-ms-input-placeholder {
	color: #444444;
}

.contact-form form input::-ms-input-placeholder {
	color: #444444;
}

.contact-form form input::placeholder {
	color: #444444;
}

.contact-form form textarea {
	width: 100%;
	padding-left: 20px;
	padding-top: 12px;
	height: 100px;
	font-size: 14px;
	color: #444444;
	background: transparent;
	resize: none;
	border: 1px solid #e1e1e1;
	margin-bottom: 24px;
}

.contact-form form textarea::-webkit-input-placeholder {
	color: #444444;
}

.contact-form form textarea::-moz-placeholder {
	color: #444444;
}

.contact-form form textarea:-ms-input-placeholder {
	color: #444444;
}

.contact-form form textarea::-ms-input-placeholder {
	color: #444444;
}

.contact-form form textarea::placeholder {
	color: #444444;
}

/*--------------------------------- Responsive Media Quaries -----------------------------*/

@media only screen and (min-width: 1430px) {
	.container {
		max-width: 1400px !important;
	}
	.blog-details-section .container {
		max-width: 1170px !important;
	}
	.logo {
		
	}
	.about-text {
		padding-left: 100px;
		padding-right: 110px;
	}
	.header-section {
		padding-left: 85px;
		padding-right: 85px;
	}
}

@media only screen and (min-width: 1200px) {
	.container {
		max-width: 1170px;
	}
}

/* Medium Device = 1200px */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.hs-slider.owl-carousel .owl-nav button {
		left: 50px;
	}
	.hs-slider.owl-carousel .owl-nav button.owl-next {
		right: 50px;
	}
	.logo {
		margin-right: 20px;
	}
	.nav-menu ul li {
		margin-right: 5px;
	}
	.about-section .col-lg-6 {
		max-width: 100% !important;
		-webkit-box-flex: 0 !important;
		-ms-flex: 0 0 100% !important;
		flex: 0 0 100% !important;
	}
	.about-pic .play-btn {
		right: auto;
		left: 50%;
		-webkit-transform: translate(-50px, -50px);
		-ms-transform: translate(-50px, -50px);
		transform: translate(-50px, -50px);
	}
	.about-text {
		padding-left: 30px;
		padding-bottom: 70px;
		height: auto;
	}
	.blog-sidebar .bs-item h5:after {
		width: 45px;
	}
}

/* Tablet Device = 768px */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.hs-slider.owl-carousel .owl-nav button {
		left: 10px;
	}
	.hs-slider.owl-carousel .owl-nav button.owl-next {
		right: 10px;
	}
	.about-pic .play-btn {
		right: auto;
		left: 50%;
		-webkit-transform: translate(-50px, -50px);
		-ms-transform: translate(-50px, -50px);
		transform: translate(-50px, -50px);
	}
	.about-text {
		padding-left: 30px;
		padding-bottom: 70px;
		height: auto;
	}
	.blog-sidebar {
		padding-top: 40px;
	}
	.blog-details-text .bd-tag-share .tags {
		float: none;
		margin-bottom: 20px;
	}
	.blog-details-text .bd-tag-share .share {
		float: none;
	}
	.post-item.prev-item {
		margin-bottom: 30px;
	}
	.nav-menu {
		display: none;
	}
	.slicknav_menu {
		display: block;
		background: transparent;
	}
	.slicknav_menu .slicknav_menutxt {
		display: none;
	}
	.slicknav_btn {
		margin: 0;
		background-color: transparent;
		padding: 0;
		margin-top: 30px;
	}
	.slicknav_menu .slicknav_icon-bar {
		background-color: #111;
		width: 20px;
		height: 3px;
	}
	.slicknav_nav {
		background: #111;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 8px 30px;
		margin: 0;
	}
	.header-section .container-fluid {
		position: relative;
	}
	.top-search {
		float: none;
		position: absolute;
		right: 50px;
	}
	.logo {
		margin-right: 0;
	}
	.portfolio-filter .pf-item {
		width: calc(33.33% - 20px);
	}
	.portfolio-filter .pf-item.large-width {
		width: calc(33.33% - 20px);
	}
	.gallery-filter .gf-item {
		width: calc(33.33% - 20px);
	}
	.portfolio-details-pic .pdp-item {
		width: calc(33.33% - 20px);
	}
	.portfolio-details-pic .pdp-item.large-width {
		width: calc(33.33% - 20px);
	}
}

/* Wide Mobile = 480px */

@media only screen and (max-width: 767px) {
	.about-pic .play-btn {
		right: auto;
		left: 50%;
		-webkit-transform: translate(-50px, -50px);
		-ms-transform: translate(-50px, -50px);
		transform: translate(-50px, -50px);
	}
	.about-text {
		padding-left: 30px;
		padding-bottom: 70px;
		height: auto;
	}
	.blog-sidebar {
		padding-top: 40px;
	}
	.blog-details-text .bd-tag-share .tags {
		float: none;
		margin-bottom: 20px;
	}
	.blog-details-text .bd-tag-share .share {
		float: none;
	}
	.post-item.prev-item {
		margin-bottom: 30px;
	}
	.hs-slider.owl-carousel .owl-nav button {
		left: 0;
	}
	.hs-slider.owl-carousel .owl-nav button.owl-next {
		right: 0;
	}
	.right-btn {
		text-align: left;
		padding-top: 0;
		margin-bottom: 45px;
	}
	.filter-controls ul li {
		margin-right: 10px;
	}
	.filter-controls ul li:after {
		right: -12px;
	}
	.blog-item .bi-pic {
		float: none;
		margin-right: 0;
	}
	.blog-item .bi-text {
		overflow: visible;
		padding-top: 30px;
	}
	.blog-details-text .bd-tag-share .tags a {
		margin-bottom: 15px;
	}
	.blog-details-text .bd-author .avatar-pic {
		float: none;
		margin-right: 0;
	}
	.blog-details-text .bd-author .avatar-text {
		overflow: visible;
		padding-top: 30px;
	}
	.nav-menu {
		display: none;
	}
	.slicknav_menu {
		display: block;
		background: transparent;
	}
	.slicknav_menu .slicknav_menutxt {
		display: none;
	}
	.slicknav_btn {
		margin: 0;
		background-color: transparent;
		padding: 0;
		margin-top: 30px;
	}
	.slicknav_menu .slicknav_icon-bar {
		background-color: #111;
		width: 20px;
		height: 3px;
	}
	.slicknav_nav {
		background: #111;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 8px 30px;
		margin: 0;
	}
	.header-section .container-fluid {
		position: relative;
	}
	.top-search {
		float: none;
		position: absolute;
		right: 50px;
	}
	.logo {
		margin-right: 0;
	}
	.hs-item {
		height: auto;
		padding: 150px 0 200px;
	}
	.portfolio-hero-section {
		height: auto;
		padding: 150px 0;
	}
	.portfolio-filter .pf-item {
		width: calc(50% - 20px);
	}
	.portfolio-filter .pf-item.large-width {
		width: calc(50% - 20px);
	}
	.gallery-filter .gf-item {
		width: calc(50% - 20px);
	}
	.portfolio-details-pic .pdp-item {
		width: calc(50% - 20px);
	}
	.portfolio-details-pic .pdp-item.large-width {
		width: calc(50% - 20px);
	}
}

/* Small Device = 320px */

@media only screen and (max-width: 479px) {
	.load-more-btn a {
		padding: 15px 70px 13px;
	}
	.ph-text {
		background: rgba(0, 0, 0, 0.7);
		display: inline-block;
		padding: 60px 20px 65px;
		text-align: center;
	}
	.blog-pagination a {
		margin-right: 5px;
	}
	.blog-details-text {
		padding-left: 15px;
		padding-right: 15px;
	}
	.blog-details-text .bd-tag-share .share a {
		margin-bottom: 10px;
	}
	.blog-details-text .bd-related-post .post-item.prev-item .pi-pic {
		float: none;
		margin-right: 0;
	}
	.blog-details-text .bd-related-post .post-item.prev-item .pi-text {
		overflow: visible;
		padding-top: 15px;
	}
	.blog-details-text .bd-related-post .post-item.next-item .pi-pic {
		float: none;
		margin-right: 0;
	}
	.blog-details-text .bd-related-post .post-item.next-item .pi-text {
		overflow: visible;
		padding-top: 15px;
	}
	.blog-details-text .bd-author {
		padding: 30px;
	}
	.blog-details-text .bd-comment-form .leave-form {
		padding: 35px 20px 40px 20px;
	}
	.slicknav_menu {
		display: block;
		background: transparent;
	}
	.slicknav_menu .slicknav_menutxt {
		display: none;
	}
	.slicknav_btn {
		margin: 0;
		background-color: transparent;
		padding: 0;
		margin-top: 30px;
	}
	.slicknav_menu .slicknav_icon-bar {
		background-color: #111;
		width: 20px;
		height: 3px;
	}
	.slicknav_nav {
		background: #111;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: #009603;
		color: #fff;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 8px 30px;
		margin: 0;
	}
	.header-section .container-fluid {
		position: relative;
	}
	.top-search {
		float: none;
		position: absolute;
		right: 50px;
	}
	.logo {
		margin-right: 0;
	}
	.hs-item .hs-text h2 {
		font-size: 38px;
	}
	.portfolio-section .container-fluid,
	.gallery-section .container-fluid {
		padding: 0 30px;
	}
	.portfolio-filter .pf-item {
		width: 100%;
		margin-right: 0;
	}
	.portfolio-filter .pf-item.large-width {
		width: 100%;
	}
	.gallery-filter .gf-item {
		width: 100%;
	}
	.portfolio-details-pic .pdp-item {
		width: 100%;
	}
	.portfolio-details-pic .pdp-item.large-width {
		width: 100%;
	}
	.about-text .at-list .al-item .al-pic,
	.blog-details-text .bd-comment-form .comment-item .ci-pic {
		float: none;
		margin-right: 0;
		margin-bottom: 25px;
	}
	.blog-hero {
		height: 450px;
	}
	.blog-details-text .bd-pics img {
		width: 100%;
		float: left;
		margin-right: 0;
		margin-bottom: 15px;
	}
	.blog-details-text .bd-title h2 {
		font-size: 36px;
		line-height: normal;
	}
}
		</style>
</head>
<body>
<?php include_once('includes/header.php');?>
<div class="about content">	 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Portfolio</li>	  
		 </ol>

		 
<div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".fashion">Baby Shower</li>
                            <li data-filter=".lifestyle">Birthday Party</li>
                            <li data-filter=".natural">Parties</li>
                            <li data-filter=".wedding">Wedding</li>
                            <li data-filter=".videos">Videos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="gallery-filter">
                        <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/01.jpg">
                            <a href="gallery/img/gallery/01.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>


                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/04.jpg">
                            <a href="gallery/img/gallery/04.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/33.jpg">
                            <a href="gallery/img/gallery/33.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item small-height set-bg wedding" data-setbg="gallery/img/gallery/15s.jpg">
                            <a href="gallery/img/gallery/15s.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/05.jpg">
                            <a href="gallery/img/gallery/05.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>              

                         <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/11.jpg">
                            <a href="gallery/img/gallery/11.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg videos" data-setbg="gallery/img/gallery/gallery-7.jpg">
                            <a href="gallery/img/gallery/gallery-7.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/02.jpg">
                            <a href="gallery/img/gallery/02.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item medium-large-height set-bg videos" data-setbg="gallery/img/gallery/gallery-9.jpg">
                            <a href="gallery/img/gallery/gallery-9.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/03.jpg">
                            <a href="gallery/img/gallery/03.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg wedding" data-setbg="gallery/img/gallery/16s.jpg">
                            <a href="gallery/img/gallery/16s.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="gallery/img/gallery/7s.jpg">
                            <a href="gallery/img/gallery/7s.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item small-height set-bg wedding" data-setbg="gallery/img/gallery/19s.jpg">
                            <a href="gallery/img/gallery/19s.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

            <div class="gf-item small-height set-bg wedding" data-setbg="gallery/img/gallery/32.jpg">
                            <a href="gallery/img/gallery/32.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        

                        <div class="gf-item set-bg wedding" data-setbg="gallery/img/gallery/17s.jpg">
                            <a href="gallery/img/gallery/17s.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="gallery/img/gallery/9a.jpg">
                            <a href="gallery/img/gallery/9a.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg wedding" data-setbg="gallery/img/gallery/08.jpg">
                            <a href="gallery/img/gallery/08.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item large-height set-bg wedding" data-setbg="gallery/img/gallery/09.jpg">
                            <a href="gallery/img/gallery/09.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
          



          <div class="gf-item large-height set-bg wedding" data-setbg="gallery/img/gallery/28.jpg">
                            <a href="gallery/img/gallery/28.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item medium-small-height set-bg wedding" data-setbg="gallery/img/gallery/91.jpg">
                            <a href="gallery/img/gallery/91.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

              <div class="gf-item medium-small-height set-bg wedding" data-setbg="gallery/img/gallery/71.jpg">
                            <a href="gallery/img/gallery/71.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>           

            <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/011.jpg">
                            <a href="gallery/img/gallery/011.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
               <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/nn.jpg">
                            <a href="gallery/img/gallery/nn.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

           <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/022.jpg">
                            <a href="gallery/img/gallery/022.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
            
            <div class="gf-item medium-small-height set-bg wedding" data-setbg="gallery/img/gallery/10.jpg">
                            <a href="gallery/img/gallery/10.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>                        
              <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/23.jpg">
                            <a href="gallery/img/gallery/23.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
            <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/24.jpg">
                            <a href="gallery/img/gallery/24.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/25.jpg">
                            <a href="gallery/img/gallery/25.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/26.jpg">
                            <a href="gallery/img/gallery/26.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

 


         <div class="gf-item large-height set-bg wedding" data-setbg="gallery/img/gallery/29.jpg">
                            <a href="gallery/img/gallery/29.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>


          <div class="gf-item set-bg wedding" data-setbg="gallery/img/gallery/30.jpg">
                            <a href="gallery/img/gallery/30.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>              


      
              <div class="gf-item large-small-height set-bg wedding" data-setbg="gallery/img/gallery/31.jpg">
                            <a href="gallery/img/gallery/31.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>  
                        
            <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/38.jpg">
                            <a href="gallery/img/gallery/38.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>





              <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/27.jpg">
                            <a href="gallery/img/gallery/27.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div> 


             <div class="gf-item large-small-height set-bg videos" data-setbg="gallery/img/gallery/29.jpg">
                            <a href="gallery/img/gallery/29.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>  



<div class="gf-item large-small-height set-bg videos" data-setbg="gallery/img/gallery/31.jpg">
                            <a href="gallery/img/gallery/31.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>  
         


        <div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/34.jpg">
                            <a href="gallery/img/gallery/34.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div> 

<div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/36.jpg">
                            <a href="gallery/img/gallery/36.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>


<div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/37.jpg">
                            <a href="gallery/img/gallery/37.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
<div class="gf-item large-small-height set-bg fashion" data-setbg="gallery/img/gallery/39.jpg">
                            <a href="gallery/img/gallery/39.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>



     <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/47.jpg">
                            <a href="gallery/img/gallery/47.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>


                        <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/46.jpg">
                            <a href="gallery/img/gallery/46.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/45.jpg">
                            <a href="gallery/img/gallery/45.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/44.jpg">
                            <a href="gallery/img/gallery/44.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item large-small-height set-bg natural" data-setbg="gallery/img/gallery/43.jpg">
                            <a href="gallery/img/gallery/43.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>


<div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/51.jpg">
                            <a href="gallery/img/gallery/51.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>
<div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/52.jpg">
                            <a href="gallery/img/gallery/52.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/53.jpg">
                            <a href="gallery/img/gallery/53.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/54.jpg">
                            <a href="gallery/img/gallery/54.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>

                        <div class="gf-item set-bg lifestyle" data-setbg="gallery/img/gallery/55.jpg">
                            <a href="gallery/img/gallery/55.jpg" class="gf-icon image-popup"><span
                                    class="icon_plus"></span></a>
                        </div>












                    </div>
                </div>
            </div>
        </div>
        
    </div>



<script src="gallery/js/jquery-3.3.1.min.js"></script>
    <script src="gallery/js/bootstrap.min.js"></script>
    <script src="gallery/js/jquery.magnific-popup.min.js"></script>
    <script src="gallery/js/isotope.pkgd.min.js"></script>
    <script src="gallery/js/masonry.pkgd.min.js"></script>
    <script src="gallery/js/jquery.slicknav.js"></script>
    <script src="gallery/js/owl.carousel.min.js"></script>
    <script src="gallery/js/main.js"></script>

</body>
</html>