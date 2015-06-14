
<?php $current_page="contact"; include_once('header.php'); ?>

	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="map">
			<?php
				echo (($language =='es')?  "<h4>MAPA</h4>": "<h4>MAP</h4>");
			?>
				<!-- <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Universidad%20T%C3%A9cnica%20Federico%20Santa%20Mar%C3%ADa%2C%20Valparaiso%2C%20Chile&key=AIzaSyD2p4zjRNQSdX48rdPjHYyRAKgVlorwaIo"></iframe>  -->
				<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Universidad%20T%C3%A9cnica%20Federico%20Santa%20Mar%C3%ADa%2C%20Valpara%C3%ADso%2C%20Chile&key=AIzaSyA4ppu-MKg9ZdwpfUHPoCnPPhV1t1ZkDCA"></iframe> 
			</div>
			<div class="contact-form">
				<div class="col-md-4 contact-form-left">
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
								<li><b>Street</b>: Avenida España 1680</li>
								<li><b>City</b>: Valparaíso, Chile</li>
								<li><b>Office</b>: A 526</li>
								<li><b>Phone</b>: +56 32 2654551</li>
								<li><b>Email</b>:<a href=\"mailto:contacto@crone2015.org\">contacto@crone2015.org</a></li>
							</ul>
							";
						}
					?>
				</div>
				<div class="col-md-8 contact-form-right">
				<?php
				if($language =='es')
				{

					echo "
						<h4>FORMULARIO DE CONTACTO</h4>
						<form action=\"MAILTO:contacto@crone2015.org\" mehtod=\"GET\" enctype=\"text/plain\">
							<input type=\"text\" value=\"Nombre\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nombre';}\" required=\"\">
							<input type=\"email\" value=\"Correo electrónico\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Correo electrónico';}\" required=\"\">
							<input type=\"text\" value=\"Teléfono\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Teléfono';}\" required=\"\">
							<textarea type=\"text\"  onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mensaje...';}\" required=\"\">Mensaje...</textarea>
							<input type=\"submit\" value=\"Enviar\" >
						</form>
						";
				}
				else
				{
					echo "
						<h4>CONTACT FORM:</h4>
						<form action=\"MAILTO:contacto@crone2015.org\" mehtod=\"GET\" enctype=\"text/plain\">
							<input type=\"text\" value=\"Name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nombre';}\" required=\"\">
							<input type=\"email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Correo electrónico';}\" required=\"\">
							<input type=\"text\" value=\"Phone\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Teléfono';}\" required=\"\">
							<textarea type=\"text\"  onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mensaje...';}\" required=\"\">Message...</textarea>
							<input type=\"submit\" value=\"Send\" >
						</form>
						";
				}
				?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!--//contact-->
	
<?php include_once('footer.php'); ?>
