<?php 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'es'; 
	$current_page="index";
	include_once('header.php'); 
?>


<!--banner-->
<div class="banner">
	<div id="owl-demo" class="owl-carousel owl-theme">
		<!-- <div class="item">
			<img src="images/banner-crabot.jpg" alt="Crabot">
			<div class="banner-title" id="banner-crabot"> 
				<h4>1<sup>er</sup> Congreso de Robótica y Neurociencia</h4>
				<p>CRoNe es un punto de encuentro para estudiantes de pregrado y postgrado, junto con algunos de los expertos mundiales en Robótica y Neurociencia. Este evento tomará lugar del <b><i>21 al 23 de Octubre</i></b>, en la UTFSM. Revisa esta web para mantenerte actualizado acerca de nuestros expositores invitados.</p>
			</div>
		</div>
		<div class="item">
			<img src="images/banner-poster.png" alt="Posters">

			<div class="banner-title" id="banner-poster"> 
				<h4>Se inicia llamado a pósters</h4>
				<p>Envía tu resumen extendido a <b>poster@crone2015.org</b></br>Plazo hasta el <b><i>07 de Agosto</i></b></br></br>Para mayor información visite la sección <a href="poster.php">Posters</a></p>
			</div>
		</div>
		<div class="item">
			<img src="images/banner-utfsm-inscriptions.png" alt="Inscripciones">

			<div class="banner-title" id="banner-inscriptions"> 
				<h4>¡Inscripción Temprana!</h4>
				<p>Mantente actualizado sobre las fechas de inscripción.</br></br> Inscripción temprana: <b><i>13 de Julio</i></b> al <b><i>11 de Septiembre</i></b></p>
			</div>
		</div> -->
	</div>
</div>
<!--//banner-->

<!--expo-->
<div class="expo" id="expo"></div>
<!--//expo-->

<!--posters-->
<div class="poster" id="poster" >
	<div class="container">
		<h3>   <?php if ($language=="es") {echo "Llamado a Posters";}else{echo "Call for poster presentation";} ?></h3>
		<div class="poster-grids"></div> 
	</div>
	<div class="poster-img">
	 	<a href="poster.php">
			<img src="images/banner-poster-square.png" alt=""/>
		
			<div class="poster-title"> 
				<?php 
				if($language=="es"){
					echo"
					<h4>¡Ven y presenta tu trabajo!</h4>
					<p>Muestra tu trabajo de investigación o desarrollo en robótica y/o neurociencia, un comité de expositores te darán excelente retroalimentación. </br></br> Envía tu resumen extendido a <b>poster@crone2015.org</b> </br></br> Plazo hasta el <b>07 de Agosto</b></p>";
				}
				else{
					echo"
					<h4>-------------------------------</h4>
					<p>........................ </br></br> -------------------------------------- <b>poster@crone2015.org</b> </br></br> :::::::::::: <b>07 de Agosto</b></p>";
				}
				
				?>
			</div>
		</a>
	</div>
	<div class="poster-button">
		<a href="poster.php">
			<button type="button"><?php if ($language=="es") {echo "Ver Más información";}else{echo "See more information";} ?> </button> 
		</a>
	</div>
</div>
<!--//posters-->

<!--activity-->
<div class="activity" id="activity">
	<div class="container">
		<h3>Actividades</h3>
		<div class="activity-grids">
			<div class="activity-header">
				<h2>21 de Octubre</h2>
				<h4>Día uno</h4>
			</div>
			<div class="activity-body">
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>11.30 - 12.10</h5>
					<h3>Charla #1</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>12.15 - 13.00</h5>
					<h3>Aprendizaje de habilidades motrices en Robótica</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-jens-kober.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Jens Kober</h4>
							<h5>Centro de Delft de Sistemas y Control, </br>
						Universidad Tecnológica de Delft, Países Bajos</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>13.00 - 14.00</h5>
					<h3>Almuerzo</h3>
				</div>
				<div class="activity-body-item">
					<h5>14.00 - 14.45</h5>
					<h3>Charla #3</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>				
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>15.00 - 15.40</h5>
					<h3>Taller : Parte A</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>15.40 - 16.10</h5>
					<h3>Coffee break &amp;</br>Muestra Proyectos Centro de Robótica</h3>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>16.10 - 17.40</h5>
					<h3>Taller : Parte B</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>20.00</h5>
					<h3>Cena Inauguración</h3>
				</div>				
			</div>
		</div>
		<div class="activity-grids">
			<div class="activity-header">
				<h2>22 de Octubre</h2>
				<h4>Día dos</h4>
			</div>
			<div class="activity-body">
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>11.30 - 12.10</h5>
					<h3>Charla #4</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>12.15 - 13.00</h5>
					<h3>Robótica para Terapia Celular</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-ivan-dimov.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Ivan Dimov</h4>
							<h5>Instituto de Células Madre y Medicina Regenerativa, </br>
								Universidad de Stanford, CA, EE.UU.</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>13.00 - 14.00</h5>
					<h3>Almuerzo</h3>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>14.00 - 14.45</h5>
					<h3>Charla #6</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>14.50 - 15.35</h5>
					<h3>Charla #7</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>15.40 - 17.40</h5>
					<h3>Visita CINV</h3>
					<!-- <div class="activity-body-item-description">
						<div class="activity-body-item-description-info"> 
							<h4>Visita Centro Interdisciplinario de Neurociencia de Valparaíso</h4>
							<h5></h5>
						</div>						
					</div> -->
				</div>
			</div>
		</div>
		<div class="activity-grids activity-grids-last">
			<div class="activity-header">
				<h2>23 de Octubre</h2>
				<h4>Día tres</h4>
			</div>
			<div class="activity-body">
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>11.30 - 12.10</h5>
					<h3>Charla #8</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>12.15 - 13.00</h5>
					<h3>Charla #9</h3>
					<div class="activity-body-item-description">
						<div class="activity-body-item-description-img"> 
							<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
						</div>
						<div class="activity-body-item-description-info"> 
							<h4>Por confirmar</h4>
							<h5>...</h5>
						</div>						
					</div>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>13.00 - 14.00</h5>
					<h3>Almuerzo</h3>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>14.00 - 16.20</h5>
					<h3>Presentación de Posters</h3>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>16.30 - 17.00</h5>
					<h3>Ceremonia de Clausura</h3>
				</div>
				<!-- ########################### -->
				<div class="activity-body-item">
					<h5>17.00 - 18.00</h5>
					<h3>Paseo de Cierre</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>	
<!--//activity-->






<?php
	echo "
	<script>
		createBanner(\"$language\");

		$(document).ready(function() {
	   		createSpeakersGrid(\"$language\");
			
		});
	</script>
	"
?>

<?php include_once('footer.php'); ?>
