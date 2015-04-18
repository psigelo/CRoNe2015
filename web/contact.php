
<?php $current_page="contact"; include_once('header.php'); ?>

	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="map">
				<h4>MAPA</h4>
				<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Universidad%20T%C3%A9cnica%20Federico%20Santa%20Mar%C3%ADa%2C%20Valparaiso%2C%20Chile&key=AIzaSyD2p4zjRNQSdX48rdPjHYyRAKgVlorwaIo"></iframe> 
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200538.305462562!2d-82.2829565022741!3d38.429324863439504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1425628742386" frameborder="0" style="border:0"></iframe> -->
			</div>
			<div class="contact-form">
				<div class="col-md-4 contact-form-left">
					<h4>INFORMACIÓN DE CONTACTO</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h5>Dirección</h5>
					<p>Avenida España 1680,</p>
					<p>Valparaíso, Chile</p>
					<p>Oficina A 526</p>
					<p>Teléfono: +56 32 2654551</p>
					<!-- <p>FAX: +1 800 889 9898</p> -->
					<a href="mailto:correo@correo.com">correo@correo.com</a>
				</div>
				<div class="col-md-8 contact-form-right">
					<h4>FORMULARIO DE CONTACTO</h4>
					<form>
						<input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" required="">
						<input type="email" value="Correo electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo electrónico';}" required="">
						<input type="text" value="Teléfono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Teléfono';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Mensaje...</textarea>
						<input type="submit" value="Enviar" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!--//contact-->
	
<?php include_once('footer.php'); ?>