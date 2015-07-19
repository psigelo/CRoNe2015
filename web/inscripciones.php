<?php $current_page="inscriptions"; include_once('header.php'); ?>

<?php 
	$name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'none'; 

	if ($language == 'es') {
?>
<br \>
<br \>
<div class="inscripcionDetailConteiner">

	<h1>¡Inscripciones abiertas!</h1>

 	<br />
 	<p>Realiza el registro <a href="inscriptions.php?language=es">acá</a>, y realiza el pago que más te acomode dentro del plazo correspondiente. ¡Esperamos verte en el evento !</p>
 	<br />
	<div class="datagrid">
		<table>
			<thead>
				<tr>
				<th>Tipo</th>
				<th colspan="2">Inscripción temprana: <br/>13 Julio a 11 Septiembre</th>
				<th colspan="2">Inscripción tardía:<br/> 12 Septiembre a 09 Octubre</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td></td>
					<td><b>Sin cena</b></td>
					<td><b>Con cena</b></td>
					<td><b>Sin cena</b></td>
					<td><b>Con cena</b></td>
					
				</tr>
				<tr class="alt">
					<td>Estudiante</td>
					<td>15.000 clp</td>
					<td>25.000 clp</td>
					<td>22.500 clp</td>
					<td>32.500 clp</td>
				</tr>
				<tr >
					<td>Profesional</td>
					<td>30.000 clp</td>
					<td>40.000 clp</td>
					<td>45.000 clp</td>
					<td>55.000 clp</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br />
	<br />
	<p>La misma tabla en dolares.</p>
	<div class="datagrid">
		<table>
			<thead>
				<tr>
				<th>Tipo</th>
				<th colspan="2">Inscripción temprana: <br/>13 Julio a 11 Septiembre</th>
				<th colspan="2">Inscripción tardía: <br/>12 Septiembre a 09 Octubre</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td></td>
					<td><b>Sin cena</b></td>
					<td><b>Con cena</b></td>
					<td><b>Sin cena</b></td>
					<td><b>Con cena</b></td>
					
				</tr>
				<tr class="alt">
					<td>Estudiante</td>
					<td>25 usd</td>
					<td>40 usd</td>
					<td>35 usd</td>
					<td>50 usd</td>
				</tr>
				<tr >
					<td>Profesional</td>
					<td>50 usd</td>
					<td>65 usd</td>
					<td>75 usd</td>
					<td>90 usd</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br />
	<br />
	<ul>
	<li><b>Almuerzo incluido</b> para los tres días del evento.</li>
	<li>Recuerda enviar <b>copia del comprobante de depósito a contacto@crone2015.org</b></li>
	<li>Datos para transferencia bancaria, <a href="95768_Cuentas_Corrientes_Vigentes.pdf">acá</a>.</li>
	</ul>
	<br />
	<br />
	<h1>Becas</h1>
	Postula a las becas de inscripción (completa o porcentual)* al momento de registrarte.
	<br />
	<br />
	<h2>Procedimiento</h2>

	<ul>
		<li><b>Regístrate gratuitamente</b> <a href="inscriptions.php?language=es">acá</a> postulando a la beca de inscripción.</li>
		<li><b>Espera los resultados</b>, daremos <b>prioridad a quienes presenten póster</b> en nuestro evento**.</li>
		<li>Con los resultados obtenidos, confirma tu inscripción o realiza el depósito según corresponda.</li>
	</ul>
	
	<br />
	<br />
	<h2>Fechas importantes</h2>

	<ul>
		<li><b>Postulación hasta</b> 21 de agosto.</li>
		<li><b>Resultados:</b> 28 de agosto.</li>
	</ul>
	<br />
	<br />
	<small><p>* Las becas disponibles cubrirán 100% (completa) o 60% (porcentual) del costo de inscripción.</p>
	<p>** La siguiente prioridad la tendrán estudiantes de otras regiones y alumnos de pregrado y finalmente bajo criterio de la organización.</p></small>

</div>

	<br />
	<br />
	<br />
	<br />
	<br />

<? } else { ?>


<br \>
<br \>
<div class="inscripcionDetailConteiner">

	<h1>Registration has already started!</h1>

 	<br />
 	<p>Enroll <a href="inscriptions.php?language=en">here</a>, and make the payment that works best for you within the corresponding deadlines. We look forward to seeing you at the event !</p>
 	<br />
	<div class="datagrid">
		<table>
			<thead>
				<tr>
				<th>Tipo</th>
				<th colspan="2">Early-bird: <br/>13 July to 11 Sept</th>
				<th colspan="2">Late: <br/>12 Sept to 09 Oct</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td></td>
					<td><b>without dinner</b></td>
					<td><b>dinner included</b></td>
					<td><b>without dinner</b></td>
					<td><b>dinner included</b></td>
					
				</tr>
				<tr class="alt">
					<td>Student</td>
					<td>25 usd</td>
					<td>40 usd</td>
					<td>35 usd</td>
					<td>50 usd</td>
				</tr>
				<tr >
					<td>Profesional</td>
					<td>50 usd</td>
					<td>65 usd</td>
					<td>75 usd</td>
					<td>90 usd</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br />
	<br />
	<ul>
	<li><b>Lunch included</b> for the three days of the event.</li>
	<li>Send copy of the <b>transfer receipt to contacto@crone2015.org</b></li>
	<li>Money transfer information, <a href="95768_Cuentas_Corrientes_Vigentes.pdf">here</a>.</li>
	</ul>
	<br />
	<br />
	<h1>Scholarships</h1>

Apply to registration scholarships (total or partial)* at the time of enrolling.

	<br />
	<br />
	<h2>Procedure</h2>

<ul>
	<li><b>Enroll for free</b> <a href="inscriptions.php?language=en">here</a> applying to registration scholarship..</li>
	<li><b>Wait for the results</b>, we will give <b>priority to poster authors</b> .**</li>
	<li>With the results, confirm your registration or do the money transfer if appropiate.</li>
</ul>
	
	<br />
	<br />
	<h2>Important dates</h2>

	<ul>
		<li><b>Apply until</b> August 21.</li>
		<li><b>Results:</b> August 28.</li>
	</ul>
	<br />
	<br />
	<small><p>* Scholarships available cover 100% (total) or 60% (partial) of the registration price.
</p>
	<p>** Next priority will be given to students from other locations and undergraduate students.</p></small>

</div>

	<br />
	<br />
	<br />
	<br />
	<br />



<?php } ?>

<?php include_once('footer.php'); ?>







