<?php //header('Location: http://www.crone2015.org/CRoNe2015/web/'); die(); 
?>

<?php $current_page="status"; include_once('header.php'); ?>

<?php 
	$name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'none';
	
	if ($language == 'es') { 
?>

<!--status-->
<div class="status" id="status">
	<div class="container">
		<h3>Estado de la Inscripción</h3>
		<div class="status-grid">
			<form action="status_service.php?language=<?php echo $language; ?>" method="post">
			<fieldset>
			<p>
			<label for="ins_rut">Cédula de identidad</label></br>
			<input type="text" id="ins_rut" name="ins_rut" value="" maxlength="15" placeholder="12.345.678-k" required/>
			</p>
			<p>
			<input type="submit" value="&rarr; Enviar" />
			</p>
			</fieldset>
			</form>
		</div>
	</div>
</div>
<!--//status-->

<?php } else { ?>

<!--status-->
<div class="status" id="status">
	<div class="container">
		<h3>Registration Status</h3>
		<div class="status-grid">
			<form action="status_service.php?language=<?php echo $language; ?>" method="post">
			<fieldset>
			<p>
			<label for="ins_rut">National identification number</label></br>
			<input type="text" id="ins_rut" name="ins_rut" value="" maxlength="15" placeholder="12.345.678-k" required/>
			</p>
			<p>
			<input type="submit" value="&rarr; Send" />
			</p>
			</fieldset>
			</form>
		</div>
	</div>
</div>
<!--//status-->


<?php } ?>

<?php include_once('footer.php'); ?>