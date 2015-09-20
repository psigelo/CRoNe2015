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


<!--activity-->
<?php if($language=="en"){ ?>
		<div class="activity" id="activity">
			<div class="container">
				<h3>Program</h3>
				<div class="activity-grids">
					<div class="activity-header">
						<h2> October 21</h2>
						<h4> Day one </h4>
					</div>
					<div class="activity-body">
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>11.30 - 12.10</h5>
							<h3>Learning on Robotics</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-pablo-guerrero.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Pablo Guerrero</h4>
									<h5>Computer Science Department, University of Chile, Chile</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>12.15 - 13.00</h5>
							<h3>Motor Skill Learning in Robotics</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-jens-kober.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Jens Kober</h4>
									<h5>Delft Center for Systems and Control,</br>
									TU Delft, The Netherlands</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.00 - 14.00</h5>
							<h3>Lunch</h3>
						</div>
						<div class="activity-body-item">
							<h5>14.00 - 14.45</h5>
							<h3>Industrial Robotics</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-manuel-olivares.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Manuel Olivares</h4>
									<h5>Electronic Department, Federico Santa María Technical University, Chile</h5>
								</div>						
							</div>				
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>15.00 - 15.40</h5>
							<h3>Workshop : Brief introduction to C++</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Robotics Center, UTFSM</h4>
									<!-- <h5>...</h5> -->
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>15.40 - 16.10</h5>
							<h3>Coffee break &amp;</br>Centro de Robótica's projects exhibition</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>16.10 - 17.40</h5>
							<h3>Workshop : V-Rep programming</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Robotics Center, UTFSM</h4>
									<!-- <h5>...</h5> -->
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>20.00</h5>
							<h3>Inauguration Dinner</h3>
						</div>				
					</div>
				</div>
				<div class="activity-grids">
					<div class="activity-header">
						<h2>October 22</h2>
						<h4>Day two</h4>
					</div>
					<div class="activity-body">
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>11.30 - 12.10</h5>
							<h3>Talk #4</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Attendance to be confirmed</h4>
									<h5>...</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>12.15 - 13.00</h5>
							<h3>Robotics on Cell Therapy</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-ivan-dimov.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Ivan Dimov</h4>
									<h5>Institute for Stem Cell Biology and Regenerative Medicine,</br>
										Stanford University, CA, USA</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.00 - 14.00</h5>
							<h3>Lunch</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>14.00 - 14.45</h5>
							<h3>Coding in retina: what can we learn from it?</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-mariajose-escobar.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Maria José Escobar</h4>
									<h5>Electronics Department, Universidad Técnica Federico Santa María, Chile</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>14.50 - 15.35</h5>
							<h3>Graduate studies on computer science UTFSM</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-di-informatica.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h5>UTFSM</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>15.40 - 17.40</h5>
							<h3>Workshop: Real plataform programming</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Robotics Center, UTFSM</h4>
									<!-- <h5>...</h5> -->
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="activity-grids activity-grids-last">
					<div class="activity-header">
						<h2>October 23</h2>
						<h4>Day three</h4>
					</div>
					<div class="activity-body">
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>11.30 - 12.10</h5>
							<h3>Talk #8</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Attendance to be confirmed</h4>
									<h5>...</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>12.15 - 13.00</h5>
							<h3>Fighting cancer using swarms of nanorobots</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-sylvain-martel.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Sylvain Martel</h4>
									<h5>NanoRobotics Laboratory, Polytechnique Montréal, Canada</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.00 - 13.30</h5>
							<h3>Closing Ceremony</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.30 - 14.00</h5>
							<h3>Lunch</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>14.00 - 16.00</h5>
							<h3>CINV visit</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Centro Interdisciplinario de Neurociencia de Valparaíso</h4>
									<h5>www.cinv.uv.cl</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<!-- <div class="activity-body-item">
							<h5>14.00 - 16.20</h5>
							<h3>Posters Presentation</h3>
						</div> -->
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>17.00 - 18.00</h5>
							<h3>Closing Stroll</h3>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
<?php } else{ ?>

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
							<h3>Aprendizaje de Robots</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-pablo-guerrero.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Pablo Guerrero</h4>
									<h5>Departamento de Ciencias de la Computación, Universidad de Chile, Chile</h5>
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
							<h3>Robótica Industrial</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-manuel-olivares.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Manuel Olivares</h4>
									<h5>Departamento de Electrónica, Universidad Técnica Federico Santa María, Chile </h5>
								</div>						
							</div>				
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>15.00 - 15.40</h5>
							<h3>Taller : Breve introducción a C++</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Centro de Robótica, UTFSM</h4>
									<!-- <h5>...</h5> -->
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
							<h3>Taller : Programación en V-Rep</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Centro de Robótica, UTFSM</h4>
									<!-- <h5>...</h5> -->
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
							<h3>Cómputo en la Retina: ¿qué podemos aprender de ella?</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-mariajose-escobar.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Maria José Escobar</h4>
									<h5>Departamento de Electrónica, Universidad Técnica Federico Santa María, Chile</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>14.50 - 15.35</h5>
							<h3>Difusión postgrados en informática UTFSM</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-di-informatica.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									
									<h5>UTFSM</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>15.40 - 17.40</h5>
							<h3>Taller: Programación en plataforma real</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-cr.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Centro de Robótica, UTFSM</h4>
									<!-- <h5>...</h5> -->
								</div>						
							</div>
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
							<h3>Combatiendo el cáncer usando enjambres de nanorobots</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-sylvain-martel.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Sylvain Martel</h4>
									<h5>Laboratorio de Nanorobótica, Escuela Politécnica de Montreal, Canadá</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.00 - 13.30</h5>
							<h3>Ceremonia de Clausura</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>13.30 - 14.00</h5>
							<h3>Almuerzo</h3>
						</div>
						<!-- ########################### -->
						<div class="activity-body-item">
							<h5>14.00 - 16.00</h5>
							<h3>Visita CINV</h3>
							<div class="activity-body-item-description">
								<div class="activity-body-item-description-img"> 
									<img class ="img-thumbnail" src="images/expo-unknown.jpg" alt=""/>
								</div>
								<div class="activity-body-item-description-info"> 
									<h4>Centro Interdisciplinario de Neurociencia de Valparaíso</h4>
									<h5>www.cinv.uv.cl</h5>
								</div>						
							</div>
						</div>
						<!-- ########################### -->
						<!-- <div class="activity-body-item">
							<h5>14.00 - 16.20</h5>
							<h3>Presentación de Posters</h3>
						</div> -->
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
<?php } ?>

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
