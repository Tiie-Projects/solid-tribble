<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>FragBenni</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="framework/bootstrap.css" rel="stylesheet" type="text/css">
<link href="framework/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="css/404.css" rel="stylesheet" type="text/css">
<script src="js/JQuery/jquery.min.js" type="text/javascript"></script>
<script src="js/isSticky.js"></script>
<script src="js/isRotation.js" async></script>
</head>
<body class="index">
	<div class="row d-flex justify-content-center" id="infotab">
		<div class="col-xs-12 col-md-12 d-flex infotabcontent align-content-center align-items-center">
			<p>Rufen Sie gern an: 0174 24 76 749</p><p>|</p><p><a href="mailto:fragbenni@fragbenni.de">benni@fragbenni.de</a></p>
		</div>
	</div>
	<div id="nav_id" class="row">
		<nav id="nav" class="nav_g d-flex">
			<div class="col-xs-12 col-md-4"><a href="#"><img id="logo" src="img/logonav.jpg"></a></div>
			<div class="col-xs-12 col-md-8 d-flex align-content-center align-items-center justify-content-start nav_s"><?php require_once("nav/navg.php");?></div>
		</nav>
	</div>
	<header class="row">
		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
			<img src="img/banner1.jpg">
		  </div>

		  <div class="mySlides fade">
			<img src="img/banner2.jpg">
		  </div>

		  <div class="mySlides fade">
			<img src="img/banner1.jpg">
		  </div>
		  <!-- Next and previous buttons -->
		  <a class="prev d-flex align-items-center justify-content-center" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next d-flex align-items-center justify-content-center" onclick="plusSlides(1)">&#10095;</a>
		
		<!-- The dots/circles -->
		<div id="dotcontent" class="text-center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</header>
	<div class="spacer_header"></div>
	
	<?php require_once('function/pagefunction.php')?>
	
	<footer id="footer" class="row d-flex justify-content-center">
		<div class="footer_container d-flex justify-content-center align-content-center align-items-center">
			<div class="col-xs-12 col-md-4 footer_logo"><a href="#"><img id="logo" src="img/logonav.jpg"></a></div>
			<div class="col-xs-12 col-md-8 footer_nav">
				<?php require_once("nav/navfooter.php")?>
			</div>
		</div>
	</footer>
</body>
</html>