	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grids-info">
					<h5>Contact us</h5>
					<ul>
						<li>Lorem Ipsu</li>
						<li>8000 Aarhus</li>
						<li>Denmark</li>
						<li>+ 45 - So Call me Maybe</li>
						<li><a href="#">Send us an e-mail</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids-info">
					<h5>Navigation</h5>
					<ul>
						<li><a href="#header" class="scroll">HOME </a></li>
						<li><a href="#method" class="scroll">METHOD</a></li>
						<li><a href="#cases" class="scroll">CASES</a></li>
						<li><a href="#services" class="scroll">SERVICES</a></li>
						<li><a href="blog.html">BLOG</a></li>
						<li><a href="contact.html">CONTACT</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids-info">
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