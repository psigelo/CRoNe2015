<?php $current_page = "inscriptions"; include_once('header.php'); ?>

<?php 
	$name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'none'; 

	if ($language == 'es') {
?>

<div class="prelude-registration">
	<div class="container">

		<div class="prelude-registration-grid">
			<h1>¡Inscripciones abiertas!</h1>

		 	<br />
		 	<p>Regístrate <a href="inscriptions.php?language=es">aquí</a> y realiza el pago que más te acomode dentro del plazo correspondiente. ¡Esperamos verte en el evento!</p>
		 	<br />
			<div class="datagrid">
				<table>
					<thead>
						<tr>
						<th>Tipo</th>
						<th colspan="2">Inscripción: <br/>13 Julio a 09 Octubre</th>
<!-- 						<th colspan="2">Inscripción temprana: <br/>13 Julio a 11 Septiembre</th>
						<th colspan="2">Inscripción tardía:<br/> 12 Septiembre a 09 Octubre</th> -->
						</tr>
					</thead>
					<tbody>
						<tr >
							<td></td>
							<td><b>Sin cena</b></td>
							<td><b>Con cena</b></td>
<!-- 							<td><b>Sin cena</b></td>
							<td><b>Con cena</b></td> -->
							
						</tr>
						<tr class="alt">
							<td>Estudiante</td>
							<td>15.000 clp <i>(25 usd)</i></td>
							<td>25.000 clp <i>(40 usd)</i></td>
<!-- 							<td>22.500 clp <i>(35 usd)</i></td>
							<td>32.500 clp <i>(50 usd)</i></td> -->
						</tr>
						<tr >
							<td>Profesional</td>
							<td>30.000 clp <i>(50 usd)</i></td>
							<td>40.000 clp <i>(65 usd)</i></td>
<!-- 							<td>45.000 clp <i>(75 usd)</i></td>
							<td>55.000 clp <i>(90 usd)</i></td> -->
						</tr>
					</tbody>
				</table>
			</div>
			<br />
			<br />
		<!-- 	<p>La misma tabla en dolares.</p>
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
			</div> -->
			<br />
			<br />
			<ul>
			<li><b>Almuerzo incluido</b> para los tres días del evento.</li>
			<li>Recuerda enviar una <b>copia del comprobante de depósito a <a href="mailto:contacto@crone2015.org">contacto@crone2015.org</a></b></li>
			<li>Los datos para realizar la transferencia bancaria están disponible <a href="95768_Cuentas_Corrientes_Vigentes.pdf">aquí</a>.</li>
			</ul>
		</div>

		<div class="prelude-registration-grid">
			<h1>Becas</h1>
			<p>Postula a las becas de inscripción (completa o porcentual)* al momento de registrarte.</p>
		</div>

		<div class="prelude-registration-grid">
			<h2>Procedimiento</h2>

			<ul>
				<li><b>Regístrate gratuitamente</b> <a href="inscriptions.php?language=es">aquí</a> postulando a la beca de inscripción.</li>
				<li><b>Espera los resultados</b>, daremos <b>prioridad a quienes presenten póster</b> en nuestro evento**.</li>
				<li>Con los resultados obtenidos, confirma tu inscripción o realiza el depósito según corresponda.</li>
			</ul>
		</div>
	
		<div class="prelude-registration-grid">
			<h2>Fechas importantes</h2>

			<ul>
				<li><b>Postulación hasta el </b><strike>21 de Agosto</strike> 28 de Agosto.</li>
				<li><b>Resultados: </b><strike>28 de Agosto</strike> 1 de Septiembre.</li>
			</ul>
			<br />
			<br />
			<small><p>* Las becas disponibles cubrirán 100% (completa) o 60% (porcentual) del costo de inscripción.</p>
			<p>** La siguiente prioridad la tendrán estudiantes de otras regiones y alumnos de pregrado y finalmente bajo criterio de la organización.</p></small>
		</div>

		<div class="prelude-registration-grid">
			<h2>Revisa tu estado</h2>

			<p>Revisa <a href="status.php?language=es">aquí</a> el estado actual de tu inscripción</p>
			<br />
			<br />
			<br />
			<br />
		</div>
	</div>

<?php } else { ?>

<div class="prelude-registration">
	<div class="container">

		<div class="prelude-registration-grid">

			<h1>Registration has already started!</h1>

		 	<p>Enroll <a href="inscriptions.php?language=en">here</a>, and make the payment that works best for you within the corresponding deadlines. We look forward to seeing you at the event!</p>
		 	<br />
			<div class="datagrid">
				<table>
					<thead>
						<tr>
						<th>Tipo</th>
						<th colspan="2">Early-bird: <br/>13 July to 09 Oct</th>
<!-- 						<th colspan="2">Early-bird: <br/>13 July to 11 Sept</th>
						<th colspan="2">Late: <br/>12 Sept to 09 Oct</th> -->
						</tr>
					</thead>
					<tbody>
						<tr >
							<td></td>
							<td><b>without dinner</b></td>
							<td><b>dinner included</b></td>
<!-- 							<td><b>without dinner</b></td>
							<td><b>dinner included</b></td> -->
							
						</tr>
						<tr class="alt">
							<td>Student</td>
							<td>25 usd</td>
							<td>40 usd</td>
<!-- 							<td>35 usd</td>
							<td>50 usd</td> -->
						</tr>
						<tr >
							<td>Profesional</td>
							<td>50 usd</td>
							<td>65 usd</td>
<!-- 							<td>75 usd</td>
							<td>90 usd</td> -->
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
		</div>

		<div class="prelude-registration-grid">
			<h1>Scholarships</h1>

			<p>Apply to registration scholarships (total or partial)* at the time of enrolling.</p>

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
				<li><b>Apply until </b><strike>August 21</strike> August 28.</li>
				<li><b>Results: </b><strike>August 28</strike> September 1.</li>
			</ul>
			<br />
			<br />
			<small><p>* Scholarships available cover 100% (total) or 60% (partial) of the registration price.</p>
			<p>** Next priority will be given to students from other locations and undergraduate students.</p></small>
		</div>

		<div class="prelude-registration-grid">
			<h2>Check your status</h2>

			<p>Click <a href="status.php?language=en">here</a> to see the current status of your inscription</p>
			<br />
			<br />
			<br />
			<br />
		</div>
	</div>
</div>

<?php } ?>

<?php include_once('footer.php'); ?>







