	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-org">
				<h5>Organiza</h5>
				<div class="banner-bottom-grids">
					<img src="images/org-cr.png" alt=""/>
				</div>
				<!-- <span class="stretch"></span> -->
			</div>
			<div class="banner-bottom-pat">
				<h5>Patrocina</h5>
				<div class="banner-bottom-grids">
					<img src="images/pat-utfsm-color.png" alt=""/>
				</div>
				<!-- <span class="stretch"></span> -->
			</div>
			<div class="banner-bottom-aus">
				<h5>Auspician</h5>
				<div class="banner-bottom-grids">
					<img src="images/aus-feutfsm.png" alt=""/>
				</div>
				<div class="banner-bottom-grids">
					<img src="images/aus-sotaltim.png" alt=""/>
				</div>
				<span class="stretch"></span>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<!--//banner-bottom-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-grids-info">
					<h5>Contáctenos</h5>
					<ul>
						<li>Avenida España 1680</li>
						<li>Valparaíso, Chile</li>
						<li>Oficina A 526</li>
						<li>+56 32 2654551</li>
						<li><a href="mailto:contacto@crone2015.org">contacto@crone2015.org</a></li>
					</ul>
				</div>
				<div class="footer-grids-info">
					<h5>Navegación</h5>
					<ul>
						<?php if (strcmp($current_page, "index") == 0) { ?>

						<li><a href="#header" class="scroll">INICIO </a></li>
						<li><a href="#expo" class="scroll">EXPOSITORES</a></li> 
						<li><a href="#poster" class="scroll">POSTERS</a></li> 
						<li><a href="#activity" class="scroll">ACTIVIDADES</a></li>
						<li><a href="#">INSCRIPCIÓN</a></li>
						<li><a href="contact.php">CONTACTO</a></li>

						<?php } elseif ((strcmp($current_page, "contact") == 0)) { ?>
						
						<li><a href="index.php">INICIO </a></li>
						<li><a href="index.php#expo">EXPOSITORES</a></li> 
						<li><a href="index.php#poster">POSTERS</a></li> 
						<li><a href="index.php#activity">ACTIVIDADES</a></li>
						<li><a href="#">INSCRIPCIÓN</a></li>
						<li><a href="#header" class="scroll">CONTACTO</a></li>

						<?php } elseif ((strcmp($current_page, "expo-details") == 0)) { ?>
						
						<li><a href="index.php">INICIO </a></li>
						<li><a href="#bio">BIOGRAFÍA</a></li> 
						<li><a href="#talk">CHARLA</a></li> 
						<li><a href="#">INSCRIPCIÓN</a></li>
						<li><a href="contact.php">CONTACTO</a></li>

						<?php } ?>
					</ul>
				</div>
				<div class="footer-grids-info hide">
					<h5>¡Suscríbete!</h5>
					<p>Suscríbete y obtén información acerca de las distintas actividades.</p>
					<form>
						<input type="text" value="Tu nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu nombre';}" required="">
						<input type="email" value="Tu correo electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu correo electrónico';}" required="">
						<input type="submit" value="Suscribirme" >
					</form>		
				</div>
				<div class="clearfix"></div>
				<div class="social-media">
					<a href="https://www.facebook.com/Escueladeinvierno" target="_blank" class="sb facebook">Facebook</a>
					<a href="#" target="_blank" class="sb twitter">Twitter</a>
					<a href="#" target="_blank" class="sb vimeo">Facebook</a>
				</div>
			</div>	
			<div class="copy-right">
				<p>© 2015 All rights reserved | Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
		</div>
	</div>	
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });	
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
</body>
</html>	
