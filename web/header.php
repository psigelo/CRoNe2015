<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'es'; 
	$inicio = ($language=='es') ? 'INICIO': 'HOME';
	$expositores= ($language=='es') ? 'EXPOSITORES': 'SPEAKERS';
	$poster= ($language=='es') ? 'POSTER': 'POSTER';
	$actividades=($language=='es') ? 'ACTIVIDADES': 'ACTIVITIES';
	$contacto =($language=='es') ? 'CONTACTO': 'CONTACT';
	$biografia =($language=='es') ? 'BIOGRAFÍA': 'BIOGRAPHY';
	$charla  =($language=='es') ? 'CHARLA': 'TALK';
	$inscripcion = ($language=='es') ? 'INSCRIPCIÓN': 'REGISTRATION';
?>

<!doctype html>
<html>
<head>
	<title>CRoNe 2015</title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">

	<script type="text/javascript" src="js/modernizr.custom.41045.js"></script>

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
	<!-- <script src="js/jquery.min.js"></script> -->
	<!-- <script src="js/jquery-1.9.1.min.js"></script> -->
	<script src="js/jquery-1.11.3.js"></script>
	<!-- <script src="js/modernizr.custom.js"></script> -->
	<script src="js/owl-carousel/owl.carousel.js"></script>
	<!-- <script src="js/carrusel.js"></script> -->
	<!-- //js -->	

	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<!-- <script type="text/javascript" src="js/modernizr.custom.53451.js"></script> -->
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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M3LCKG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3LCKG');</script>
<!-- End Google Tag Manager -->


	<div class="header" id="header">
		<div class="container">
			<div class="header-logo">
				<a href="index.php"><img src="images/logo-2.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu-icon.png" alt=""/></span>
				<ul class="nav1">
					<?php if (strcmp($current_page, "index") == 0) {
					echo "
					<li><a href=\"#header\" class=\"scroll\">$inicio </a></li>
					<li><a href=\"#expo\" class=\"scroll\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\" >$poster</a></li> 
					<li><a href=\"#activity\" class=\"scroll\">$actividades</a></li>
					<li><a href=\"inscripciones.php?language=$language\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\">$contacto</a></li>
					";
					 } elseif ((strcmp($current_page, "contact") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"inscripciones.php?language=$language\">$inscripcion</a></li>
					<li><a href=\"#header\" class=\"scroll\">$contacto</a></li>
					";
					} elseif ((strcmp($current_page, "poster") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"#\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"inscripciones.php?language=$language\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\">$contacto</a></li>
					";
					} elseif ((strcmp($current_page, "expo-details") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"#bio\" class=\"scroll\">$biografia</a></li> 
					<li><a href=\"#talk\" class=\"scroll\">$charla</a></li> 
					<!-- <li><a href=\"index.php?language=$language#activity\">$actividades</a></li> -->
					<li><a href=\"inscripciones.php?language=$language\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\">$contacto</a></li>
					";
					} elseif ((strcmp($current_page, "inscriptions") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"#inscripciones\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\" class=\"scroll\">$contacto</a></li>
					";
					// } elseif ((strcmp($current_page, "inscriptions_service") == 0) || (strcmp($current_page, "status_service") == 0)) { 
					} else {
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"inscripciones.php?language=$language\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\" class=\"scroll\">$contacto</a></li>
					";
					} ?>
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
			<div class="top-lang">
				<a href="index.php?language=en"><img src="images/flag-great-britain.png" alt=""/></a>
				<a href="index.php?language=es"><img src="images/flag-spain.png" alt=""/></a>
			</div>
		</div>	
	</div>
