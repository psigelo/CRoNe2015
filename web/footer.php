	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
		<?php
				
			echo "
			<div class=\"banner-bottom-org\">
				<h5>".(($language=='es') ? 'Organiza': 'Organize')."</h5>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/org-cr.png\" alt=\"\"/>
				</div>
				<!-- <span class=\"stretch\"></span> -->
			</div>
			<div class=\"banner-bottom-pat\">
				<h5>".(($language=='es') ? 'Patrocina': 'Support')."</h5>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/pat-utfsm-color.png\" alt=\"\"/>
				</div>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/logo_DI_UTFSM.png\" alt=\"\"/>
				</div>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/pat-robotshop.jpg\" alt=\"\"/>
				</div>
				<!-- <span class=\"stretch\"></span> -->
			</div>
			<div class=\"banner-bottom-aus\">
				<h5>".(($language=='es') ? 'Auspicia': 'Sponsor')."</h5>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/aus-feutfsm.png\" alt=\"\"/>
				</div>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/aus-sotaltim.png\" alt=\"\"/>
				</div>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/Aexa.png\" alt=\"\"/>
				</div>
				<div class=\"banner-bottom-grids\">
					<img src=\"images/mercurio.png\" alt=\"\"/>
				</div>
				<span class=\"stretch\" heigth=\"10px\"></span>
			</div>
			<div class=\"clearfix\"></div>
			";
		?>
		</div>
	</div>	
	<!--//banner-bottom-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-grids-info">
				<?php
				if($language =='es'){
					echo "
					<h5>Contáctenos</h5>
					<ul>
						<li>Avenida España 1680</li>
						<li>Valparaíso, Chile</li>
						<li>Oficina A 526</li>
						<li>+56 32 2654551</li>
						<li><a href=\"mailto:contacto@crone2015.org\">contacto@crone2015.org</a></li>
					</ul>
					";
				} else{
					echo "
					<h5>Contact us</h5>
					<ul>
						<li>Street: Avenida España 1680</li>
						<li>City: Valparaíso, Chile</li>
						<li>Office: A 526</li>
						<li>Phone: +56 32 2654551</li>
						<li>Email:<a href=\"mailto:contacto@crone2015.org\">contacto@crone2015.org</a></li>
					</ul>
					";
				}
					?>
				
				</div>
				<div class="footer-grids-info">
				<?php 
					echo "<h5>".(($language=='es') ? 'Navegación': 'Nav')."</h5>
					<ul>";
						if (strcmp($current_page, "index") == 0) {
					echo "
					<li><a href=\"#header\" class=\"scroll\">$inicio </a></li>
					<li><a href=\"#expo\" class=\"scroll\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\" >$poster</a></li> 
					<li><a href=\"#activity\" class=\"scroll\">$actividades</a></li>
					<li><a href=\"#\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\">$contacto</a></li>
					";
					 } elseif ((strcmp($current_page, "contact") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"poster.php?language=$language\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"#\">$inscripcion</a></li>
					<li><a href=\"#header\" class=\"scroll\">$contacto</a></li>
					";
					} elseif ((strcmp($current_page, "poster") == 0)) { 
					echo "
					<li><a href=\"index.php?language=$language\">$inicio </a></li>
					<li><a href=\"index.php?language=$language#expo\">$expositores</a></li> 
					<li><a href=\"#\">$poster</a></li> 
					<li><a href=\"index.php?language=$language#activity\">$actividades</a></li> 
					<li><a href=\"#\">$inscripcion</a></li>
					<li><a href=\"contact.php?language=$language\">$contacto</a></li>
					";
					} elseif ((strcmp($current_page, "expo-details") == 0)) { 
					echo "
					<li><a href=\"index.php\">$inicio </a></li>
					<li><a href=\"#bio\" class=\"scroll\">$biografia</a></li> 
					<li><a href=\"#talk\" class=\"scroll\">$charla</a></li> 
					<!-- <li><a href=\"index.php?language=$language#activity\">$actividades</a></li> -->
					<li><a href=\"#\">$inscripcion</a></li>
					<li><a href=\"contact.php\">$contacto</a></li>
					";
					} ?> 
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
