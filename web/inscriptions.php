<?php //header('Location: http://www.crone2015.org/CRoNe2015/web/'); die(); 
?>

<?php $current_page="inscriptions"; include_once('header.php'); ?>

<?php 
	$name = !empty($_GET['name']) && is_string($_GET['name']) ? htmlspecialchars($_GET['name']) : 'none'; 
	$language = !empty($_GET['language']) && is_string($_GET['language']) ? htmlspecialchars($_GET['language']) : 'none';
	if ($language == 'es') { 
?>

<!--inscriptions-->
<div class="inscriptions" id="inscriptions">
	<div class="container">
		<h3>Inscripción</h3>
		<div class="inscriptions-grid">
			<form action="inscriptions_service.php?language=<?php echo $language; ?>" method="post">
			<fieldset>
			<p>
			<label for="ins_name">Nombre completo</label></br>
			<input type="text" id="ins_name" name="ins_name" value="" maxlength="100" placeholder="Frank H. Pabodie" required/>
			</p>
			<p>
			<label for="ins_rut">Cédula de identidad</label></br>
			<input type="text" id="ins_rut" name="ins_rut" value="" maxlength="15" placeholder="12.345.678-k" required/>
			</p>
			<p>
			<label for="ins_email">E-Mail</label></br>
			<input type="email" id="ins_email" name="ins_email" value="" maxlength="50" placeholder="fpabodie@miskatonic.edu" required/>
			</p>
			<p>
			<label for="ins_institution">Institución</label></br>
			<input type="text" id="ins_institution" name="ins_institution" value="" maxlength="100" placeholder="Miskatonic University" required/>
			</p>
			<p>
			<label for="ins_city">Ciudad</label></br>
			<input type="text" id="ins_city" name="ins_city" value="" maxlength="100" placeholder="Arkham, Massachusetts" required/>
			</p>
			<p>
			<label for="ins_country">País</label></br>
			<input type="text" id="ins_country" name="ins_country" value="" maxlength="100" placeholder="Estados Unidos de América" required/>
			</p>
			<p>
			<input type="radio" name="person_type" value="rdoStudent" id="rdoStudent" checked="checked" onclick="showHide(this)">
			<label for="rdoStudent">Estudiante</label></br>
       		<input type="radio" name="person_type" value="rdoProfessional" id="rdoProfessional" onclick="showHide(this)"> 
       		<label for="rdoProfessional">Profesional</label>
			</p>
			<!-- Estudiante -->
			<div id="student_section">
				<p>
				<label for="ins_career">Carrera</label></br>
				<input type="text" id="ins_career" name="ins_career" value="" maxlength="100" placeholder="Ingeniería"/>
				</p>
				<p>
				<label for="ins_admission_year">Año de ingreso</label></br>
				<input type="number" id="ins_admission_year" name="ins_admission_year" value="" min="0" max="2015" maxlength="4" placeholder="1690"/>
				</p>
				<!-- <p>
				<label for="ins_scholarships">Postular a becas de inscripción</label></br>
				<input type="radio" id="ins_apply_scholarships" name="ins_scholarships" value="yes"/>
				<label for="ins_apply_scholarships">Sí</label>
				<input type="radio" id="ins_not_apply_scholarships" checked="checked" name="ins_scholarships" value="no"/>
				<label for="ins_not_apply_scholarships">No</label>
				</p> -->
			</div>
			<!-- Profesional -->
			<div id="profesional_section">
				<p>
				<label for="ins_last_grade">Último título obtenido</label></br>
				<input type="text" id="ins_last_grade" name="ins_last_grade" value="" maxlength="100" placeholder="Ingeniería"/>
				</p>
				<p>
				<label for="ins_graduation_year">Año de obtención</label></br>
				<input type="number" id="ins_graduation_year" name="ins_graduation_year" value="" min="0" max="2015" maxlength="4" placeholder="1690"/>
				</p>
				<p>
				<label for="ins_last_institution">Institución</label></br>
				<input type="text" id="ins_last_institution" name="ins_last_institution" value="" min="0" max="2015" maxlength="4" placeholder="Miskatonic University"/>
				</p>
			</div>
			<p>
			<input type="submit" value="&rarr; Enviar" />
			</p>
			</fieldset>
			</form>
		</div>
	</div>
</div>
<!--//inscriptions-->

<?php } else { ?>

<!--inscriptions-->
<div class="inscriptions" id="inscriptions">
	<div class="container">
		<h3>Registration</h3>
		<div class="inscriptions-grid">
			<form action="inscriptions_service.php" method="post">
			<fieldset>
			<p>
			<label for="ins_name">FULL NAME</label></br>
			<input type="text" id="ins_name" name="ins_name" value="" maxlength="100" placeholder="Frank H. Pabodie" required/>
			</p>
			<p>
			<label for="ins_rut">National identification number</label></br>
			<input type="text" id="ins_rut" name="ins_rut" value="" maxlength="15" placeholder="12.345.678-k" required/>
			</p>
			<p>
			<label for="ins_email">E-Mail</label></br>
			<input type="email" id="ins_email" name="ins_email" value="" maxlength="50" placeholder="fpabodie@miskatonic.edu" required/>
			</p>
			<p>
			<label for="ins_institution">Institution</label></br>
			<input type="text" id="ins_institution" name="ins_institution" value="" maxlength="100" placeholder="Miskatonic University" required/>
			</p>
			<p>
			<label for="ins_city">City</label></br>
			<input type="text" id="ins_city" name="ins_city" value="" maxlength="100" placeholder="Arkham, Massachusetts" required/>
			</p>
			<p>
			<label for="ins_country">Country</label></br>
			<input type="text" id="ins_country" name="ins_country" value="" maxlength="100" placeholder="USA" required/>
			</p>
			<p>
			<input type="radio" name="person_type" value="rdoStudent" id="rdoStudent" checked="checked" onclick="showHide(this)">
			<label for="rdoStudent">Student</label></br>
       		<input type="radio" name="person_type" value="rdoProfessional" id="rdoProfessional" onclick="showHide(this)"> 
       		<label for="rdoProfessional">Professional</label>
			</p>
			<!-- Estudiante -->
			<div id="student_section">
				<p>
				<label for="ins_career">Degree</label></br>
				<input type="text" id="ins_career" name="ins_career" value="" maxlength="100" placeholder="Ingeniería"/>
				</p>
				<p>
				<label for="ins_admission_year">Year of enrollment</label></br>
				<input type="number" id="ins_admission_year" name="ins_admission_year" value="" min="0" max="2015" maxlength="4" placeholder="1690"/>
				</p>
				<p>
				<label for="ins_scholarships">Apply to registration scholarship?</label></br>
				<input type="radio" id="ins_apply_scholarships" name="ins_scholarships" value="yes"/>
				<label for="ins_apply_scholarships">Yes</label>
				<input type="radio" id="ins_not_apply_scholarships" checked="checked" name="ins_scholarships" value="no"/>
				<label for="ins_not_apply_scholarships">No</label>
				</p>
			</div>
			<!-- Profesional -->
			<div id="profesional_section">
				<p>
				<label for="ins_last_grade">Last Degree</label></br>
				<input type="text" id="ins_last_grade" name="ins_last_grade" value="" maxlength="100" placeholder="engineer"/>
				</p>
				<p>
				<label for="ins_graduation_year">Year of graduation</label></br>
				<input type="number" id="ins_graduation_year" name="ins_graduation_year" value="" min="0" max="2015" maxlength="4" placeholder="1690"/>
				</p>
				<p>
				<label for="ins_last_institution">Institution</label></br>
				<input type="text" id="ins_last_institution" name="ins_last_institution" value="" min="0" max="2015" maxlength="4" placeholder="Miskatonic University"/>
				</p>
			</div>
			<p>
			<input type="submit" value="&rarr; Send" />
			</p>
			</fieldset>
			</form>
		</div>
	</div>
</div>
<!--//inscriptions-->


<?php } ?>



<script type="text/javascript">

	// TODO - Ver si se puede mejorar esta parte y ver el error del 'required'

	function showHide(elm) 
	{    
	    var student = document.getElementById("student_section");
	    var profesoinal = document.getElementById("profesional_section");

	    var student_career = document.getElementById("ins_career");
	    var student_admission_year = document.getElementById("ins_admission_year");

	    var profesoinal_last_grade = document.getElementById("ins_last_grade");
	    var profesoinal_graduation_year = document.getElementById("ins_graduation_year");
	    var profesoinal_last_institution = document.getElementById("ins_last_institution");

	    if(elm.id == 'rdoStudent')
	    {
	        student.classList.remove('hide');
	        profesoinal.classList.add('hide');
	        
		    student_career.required = true;
		    student_admission_year.required = true;

		    profesoinal_last_grade.required = false;
		    profesoinal_graduation_year.required = false;
		    profesoinal_last_institution.required = false;
	    }
	    else
	    {
	        student.classList.add('hide');
	        profesoinal.classList.remove('hide');

		    student_career.required = false;
		    student_admission_year.required = false;

		    profesoinal_last_grade.required = true;
		    profesoinal_graduation_year.required = true;
		    profesoinal_last_institution.required = true;
	    }
	}

	$(window).load(function() 
	{
		document.getElementById("profesional_section").classList.add('hide');

	    document.getElementById("ins_career").required = true;
	    document.getElementById("ins_admission_year").required = true;

	    document.getElementById("ins_last_grade").required = false;
	    document.getElementById("ins_graduation_year").required = false;
	    document.getElementById("ins_last_institution").required = false;
	}); 

</script>

<?php include_once('footer.php'); ?>