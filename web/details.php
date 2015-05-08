
<?php $current_page="expo-details"; include_once('header.php'); ?>

<?php $name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; ?>

<!--expo-details-->
<div class="expo-details">
	<div class="container">

		<?php if (strcmp($name, "jens-kober") == 0) { ?>

			<div class="expo-details-grid" id="bio">
				<h3>Jens Kober</h3>
				<h5>Centro de Delft de Sistemas y Control, Universidad Tecnológica de Delft, Países Bajos</h5>	
				<div class="expo-details-info"> 
 					<p>Jens Kober es profesor asistente en el Centro de Sistemas y Control, en la Universidad Tecnológica Delft, Holanda. Trabajó como investigador postdoctoral en conjunto con el CoR-Lab, Universidad Bielefeld en Alemania y el Instituto de Investigación Europeo Honda, en Offenbach, Alemania. El 2012 se graduó de su Doctorado (PhD) en Ingeniería en la Universidad Tecnológica Darmstadt. Fue galardonado por su investigación de doctorado, con el premio anual Georges Giralt, por la mejor Tesis de Doctorado en Robótica, en todo Europa.</p>
 					<p>Desde el 2007 al 2012 trabajó con Jan Peters como estudiante de Magíster y luego como estudiante de Doctorado en el Robot Learning Lab, Departamento Bernhard Schölkopf, Instituto Max-Planck para Sistemas Inteligentes (inicialmente parte del MPI para Cibernética Biológica). Antes de esto, estudió en la Universidad de Stuttgart, Alemania y en la Ecole Centrale Paris, Francia. Ha realizado estadías de investigación en el Centro Avanzado de Investigación en Telecomunicaciones (ATR), Japón  y en Disney Research Pittsburgh, USA. Sus intereses de investigación incluyen robótica, aprendizaje de máquinas y control.</p>
				</div>
				<div class="expo-details-img"> 
					<img class ="img-thumbnail" src="images/expo-jens-kober.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="expo-details-grid" id="talk">
				<h3>Aprendizaje de Habilidades Motrices en Robótica</h3>
				<h5>21 de Octubre 14.00 - 14.45</h5>
				<div class="expo-details-talk"> 	
					<p>La adquisición y auto-mejora de novedosas habilidades motrices está entre los problemas más importantes en robótica. El aprendizaje por refuerzos y aprendizaje por imitación son dos diferentes pero complementarios enfoques en el aprendizaje de máquinas, comúnmente usados para aprender habilidades motrices.</p>
					<p>El aprendizaje por refuerzos intenta maximizar una recompensa y en este contexto se usa para realizar mejoras. Se presenta un marco teórico para diferentes enfoques de búsqueda de políticas, y se discutirán específicas propiedades deseables para algoritmos de aprendizaje reforzado aplicado a robótica. Los algoritmos resultantes se usan para aprender nuevas habilidades motrices y adaptarlas de acuerdo a estímulos externos.</p>
    				<p>El aprendizaje por imitación intenta imitar demostraciones humanas. De forma que el robot es capaz de generalizar los movimientos observados a través de prmación extraída a partir de propiedades estadísticas. Esta charla presenta los primeros pasos hacia el aprendizaje por imitación de habilidades con interacción de fuerza, es decir, habilidades donde la fuerza aplicada por el robot en cierto entorno juega un rol crucial, impactando también en las siguientes sub-habilidades.</p>
				</div>
			</div>

		<?php } elseif (strcmp($name, "ivan-dimov") == 0) { ?>

			<div class="expo-details-grid" id="bio">
				<h3>Ivan Dimov</h3>
				<h5>Instituto de Células Madre y Medicina Regenerativa, Universidad de Stanford, CA, EE.UU.</h5>	
				<div class="expo-details-info"> 					
					<p>
						Dr. Ivan Dimov es actualmente Instructor Visitante y Sieble Fellow en el Instituto de Células Madre 
						y Medicina  Regenerativa de la Universidad de Stanford, CA, EE.UU.
					</p>
					<p>
						Él es también Gerente científico y co-fundador de la  empresa de alta tecnología Diassess Inc. que 
						está creando el primer test rápido de ADN en el mundo para  diagnosticar enfermedades infecciosas 
						en cuestión de minutos en cualquier parte del mundo. También fue profesor  de investigación en 
						Bioingeniería en la Universidad de California en Berkeley y profesor asistente en Ingeniería  
						Biomédica en el Departamento de Ingeniería Biomédica de la Universidad de Valparaíso.
					</p>
					<p>
						Dr. Dimov obtuvo el  título de Ing. Civil  Electrónica y Magíster en Ciencias de la Ingeniería Electrónica 
						de la Universidad Técnica  Federico Santa María (UTFSM). Luego completo sus estudios doctorales en 
						biofísica aplicada en el Instituto de  Diagnostico Biomédico (BDI) de Dublin City University en Irlanda. 
						Él es co-fundador del Centro de Robótica de la  UTFSM y el Centro de Tecnología Hospitalaria (CTH) de la 
						Universidad de Valparaíso. Adicionalmente, él ha co- fundado varias empresas tecnológicas, incluyendo 
						Bio-automatización y BlobCode Ltda. Ambas empresas se basan  en nuevas tecnologías desarrolladas en el 
						Centro de Robótica, UTFSM y la Universidad de Valparaíso.
					</p>
					<p>
						Su  investigación actual esta focalizada en las áreas de micro-sistemas de análisis total (µTAS), 
						micro-fluídica y micro- dispositivos para ensayos basados en células. Dr. Dimov es autor de más de 30 
						publicaciones técnicas y 10 patentes  de invención internacionales.
					</p>
				</div>
				<div class="expo-details-img"> 
					<img class ="img-thumbnail" src="images/expo-ivan-dimov-2.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="expo-details-grid" id="talk">
				<h3>Robótica para Terapia Celular</h3>
				<h5><!-- Por confirmar --></h5>
				<div class="expo-details-talk"> 	
					<p>
						La constante miniaturización tecnológica que ha inspirado la ley de Moore y propulsado la revolución 
						informática ha creado la base para revolucionar las ciencias de la vida y el cuidado de la salud humana. 
						Conceptualizada en los ’90 y basada en las herramientas de miniaturización de la industria de los circuitos 
						integrados, la microfluídica  promete reducir los volúmenes de reacciones, acelerar la cinética de 
						reacciones bioquímicas, integrar protocolos completos en un solo dispositivo y paralelizar masivamente 
						los análisis.
					</p>
					<p>
						En esta presentación explicare como la microfluidica se está combinando con la robótica para resolver un 
						de los grandes problemas en la terapia celular, la purificación celular. 
					</p>
				</div>
			</div>

		<?php } else { ?>

			<div class="error">!</br>Lo sentimos, el nombre que usted busca no se encuentra dentro de nuestra base de datos.</div>

		<?php } ?>
	</div>
</div>
<!--//expo-details-->

<?php include_once('expositores.php'); ?>
<?php include_once('footer.php'); ?>
