<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
	<title>CRoNe 2015</title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/social-buttons.css" rel="stylesheet">
	<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="css/carrousel_expositors/carrouselExpositors.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon.ico" />

	<!--web-font-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	<!--//web-font-->

	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Free style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- //Custom Theme files -->

	<!-- js -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/owl-carousel/owl.carousel.js"></script>
	<!-- <script src="js/carrusel.js"></script> -->
	<!-- //js -->	

	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});

				// Activity
				$('.activity-body-item').click(function () {
					$(this).find('.activity-body-item-description').slideToggle();
				});
				$('.activity-body-item-description').slideUp(0);
			
				$("#owl-demo").owlCarousel({
					autoPlay : 4000,
					stopOnHover : true,
					paginationSpeed : 1000,
    				goToFirstSpeed : 2000,
					slideSpeed : 300,
					singleItem:true
				});
			});
	</script>
	<!--//end-smoth-scrolling-->
	<script type="text/javascript" src="js/speakers.js"></script>	

</head>
<body>

	<div class="header" id="header">
		<div class="container">
			<div class="header-logo">
				<a href="index.php"><img src="images/logo-2.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu-icon.png" alt=""/></span>
				<ul class="nav1">
					<?php if (strcmp($current_page, "index") == 0) { ?>

					<li><a href="#header" class="scroll">INICIO </a></li>
					<li><a href="#expo" class="scroll">EXPOSITORES</a></li> 
					<li><a href="poster.php" >POSTERS</a></li> 
					<li><a href="#activity" class="scroll">ACTIVIDADES</a></li>
					<li><a href="#">INSCRIPCIÓN</a></li>
					<li><a href="contact.php">CONTACTO</a></li>

					<?php } elseif ((strcmp($current_page, "contact") == 0)) { ?>
					
					<li><a href="index.php">INICIO </a></li>
					<li><a href="index.php#expo">EXPOSITORES</a></li> 
					<li><a href="poster.php">POSTERS</a></li> 
					<li><a href="index.php#activity">ACTIVIDADES</a></li> 
					<li><a href="#">INSCRIPCIÓN</a></li>
					<li><a href="#header" class="scroll">CONTACTO</a></li>

					<?php } elseif ((strcmp($current_page, "poster") == 0)) { ?>
					
					<li><a href="index.php">INICIO </a></li>
					<li><a href="index.php#expo">EXPOSITORES</a></li> 
					<li><a href="#">POSTERS</a></li> 
					<li><a href="index.php#activity">ACTIVIDADES</a></li> 
					<li><a href="#">INSCRIPCIÓN</a></li>
					<li><a href="contact.php">CONTACTO</a></li>

					<?php } elseif ((strcmp($current_page, "expo-details") == 0)) { ?>
					
					<li><a href="index.php">INICIO </a></li>
					<li><a href="#bio" class="scroll">BIOGRAFÍA</a></li> 
					<li><a href="#talk" class="scroll">CHARLA</a></li> 
					<!-- <li><a href="index.php#activity">ACTIVIDADES</a></li> -->
					<li><a href="#">INSCRIPCIÓN</a></li>
					<li><a href="contact.php">CONTACTO</a></li>
					
					<?php } ?>
				</ul>
				<!-- script-for-menu -->
				 <script>
				   $( "span.menu" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
