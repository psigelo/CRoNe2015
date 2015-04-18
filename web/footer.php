	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="footer-grids-info">
					<h5>Contact us</h5>
					<ul>
						<li>Lorem Ipsu</li>
						<li>8000 Aarhus</li>
						<li>Denmark</li>
						<li>+ 45 - So Call me Maybe</li>
						<li><a href="#">Send us an e-mail</a></li>
					</ul>
				</div>
				<div class="footer-grids-info">
					<h5>Navigation</h5>
					<ul>
						<?php if (strcmp($current_page, "index") == 0) { ?>

						<li><a href="#header" class="scroll">INICIO </a></li>
						<li><a href="#expo" class="scroll">EXPOSITORES</a></li> 
						<li><a href="#poster" class="scroll">POSTERS</a></li> 
						<li><a href="#activity" class="scroll">ACTIVIDADES</a></li>
						<li><a href="#">INSCRIPCIÓN</a></li>
						<li><a href="contact.php">CONTACT</a></li>

						<?php } elseif ((strcmp($current_page, "contact") == 0)) { ?>
						
						<li><a href="index.php">INICIO </a></li>
						<li><a href="index.php#expo">EXPOSITORES</a></li> 
						<li><a href="index.php#poster">POSTERS</a></li> 
						<li><a href="index.php#activity">ACTIVIDADES</a></li>
						<li><a href="#">INSCRIPCIÓN</a></li>
						<li><a href="#header" class="scroll">CONTACT</a></li>

						<?php } ?>
					</ul>
				</div>
				<div class="footer-grids-info">
					<h5>Submit to our news letter</h5>
					<p>Submit and get all the info about our 
						work, new positions and new blog inputs.</p>
					<form>
						<input type="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}" required="">
						<input type="email" value="Your E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-mail';}" required="">
						<input type="submit" value="Submit" >
					</form>		
				</div>
				<div class="clearfix"></div>
				<div class="social-media">
					<a href="#" class="sb no-border light-gray facebook">Facebook</a>
					<a href="#" class="sb no-border light-gray twitter">Twitter</a>
					<a href="#" class="sb no-border light-gray vimeo">Facebook</a>
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