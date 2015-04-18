
<?php $current_page="contact"; include_once('header.php'); ?>

	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="map">
				<h4>MAP</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200538.305462562!2d-82.2829565022741!3d38.429324863439504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1425628742386" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="contact-form">
				<div class="col-md-4 contact-form-left">
					<h4>CONTACT INFO</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h5>Address</h5>
					<p>Eiusmod Tempor inc</p>
					<p>9560 St Dolore Place,</p>
					<p>Telephone: +1 800 603 6035</p>
					<p>FAX: +1 800 889 9898</p>
					<a href="mailto:example@email.com">mail@example.com</a>
				</div>
				<div class="col-md-8 contact-form-right">
					<h4>CONTACT FORM</h4>
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!--//contact-->
	
<?php include_once('footer.php'); ?>