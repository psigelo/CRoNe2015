
<?php

$current_page="inscriptions_service";

/*** check if all the input were filled ***/
if(!isset( $_POST['ins_name'] )) 
{
    $message = 'Por favor ingrese el campo "Nombre completo".';
}
elseif(!isset( $_POST['ins_rut'] )) 
{
    $message = 'Por favor ingrese el campo "Cédula de identidad".';
}
elseif(!isset( $_POST['ins_email'] )) 
{
    $message = 'Por favor ingrese el campo "E-mail".';
}
elseif(!isset( $_POST['ins_institution'] )) 
{
    $message = 'Por favor ingrese el campo "Institución".';
}
elseif(!isset( $_POST['ins_city'] )) 
{
    $message = 'Por favor ingrese el campo "Ciudad".';
}
elseif(!isset( $_POST['ins_country'])) 
{
    $message = 'Por favor ingrese el campo "País".';
}
elseif(!isset( $_POST['person_type'] )) 
{
    $radio_button = $_POST['person_type'];

    if($radio_button == 'rdoStudent')
    {
        if(!isset( $_POST['ins_career'] )) 
        {
            $message = 'Por favor ingrese el campo "Carrera".';
        }
        elseif(!isset( $_POST['ins_admission_year'] )) 
        {
            $message = 'Por favor ingrese el campo "Año de ingreso".';
        }
        elseif(!isset( $_POST['ins_scholarships'] )) 
        {
            $message = 'Por favor seleccione si se encuentra becado o no.';
        }
    }
    elseif($radio_button == 'rdoProfessional')
    {
        if(!isset( $_POST['ins_last_grade'] )) 
        {
            $message = 'Por favor ingrese el campo "Último título obtenido".';
        }
        elseif(!isset( $_POST['ins_graduation_year'] )) 
        {
            $message = 'Por favor ingrese el campo "Año de obtención".';
        }
        elseif(!isset( $_POST['ins_last_institution'] )) 
        {
            $message = 'Por favor ingrese el campo "Institución".';
        }
    } 
}
/*** check correct lengths of inputs ***/
elseif (strlen( $_POST['ins_name']) > 70)
{
    $message = 'Largo del campo "Nombre completo" fuera de los límites.';
}
elseif (strlen( $_POST['ins_rut']) > 15)
{
    $message = 'Largo del campo "Cédula de identidad" fuera de los límites.';
}
elseif (strlen( $_POST['ins_email']) > 70)
{
    $message = 'Largo del campo "E-mail" fuera de los límites.';
}
elseif (strlen( $_POST['ins_institution']) > 100)
{
    $message = 'Largo del campo "Institución" fuera de los límites.';
}
elseif (strlen( $_POST['ins_city']) > 40)
{
    $message = 'Largo del campo "Ciudad" fuera de los límites.';
}
elseif (strlen( $_POST['ins_country']) > 40)
{
    $message = 'Largo del campo "País" fuera de los límites.';
}
elseif(!isset( $_POST['person_type'] )) 
{
    $radio_button = $_POST['person_type'];

    if($radio_button == 'rdoStudent')
    {
        if (strlen( $_POST['ins_career']) > 40)
        {
            $message = 'Largo del campo "Carrera" fuera de los límites.';
        }
        elseif (strlen( $_POST['ins_admission_year']) > 4)
        {
            $message = 'Largo del campo "Año de ingreso" fuera de los límites.';
        }
    }
    elseif($radio_button == 'rdoProfessional')
    {
        if (strlen( $_POST['ins_last_grade']) > 40)
        {
            $message = 'Largo del campo "Último título obtenido" fuera de los límites.';
        }
        elseif (strlen( $_POST['ins_graduation_year']) > 4)
        {
            $message = 'Largo del campo "Año de obtención" fuera de los límites.';
        }
        elseif (strlen( $_POST['ins_last_institution']) > 100)
        {
            $message = 'Largo del campo "Institución" fuera de los límites.';
        }
    } 
}
else
{
    /*** let's add some filters ***/
    $ins_name = filter_var(strtolower($_POST['ins_name']), FILTER_SANITIZE_STRING);
    $ins_rut = filter_var($_POST['ins_rut'], FILTER_SANITIZE_NUMBER_INT);
    $ins_email = filter_var(strtolower($_POST['ins_email']), FILTER_SANITIZE_EMAIL);
    $ins_institution = filter_var(strtolower($_POST['ins_institution']), FILTER_SANITIZE_STRING);
    $ins_city = filter_var(strtolower($_POST['ins_city']), FILTER_SANITIZE_STRING);
    $ins_country = filter_var(strtolower($_POST['ins_country']), FILTER_SANITIZE_STRING);

    $radio_button = $_POST['person_type'];

    if($radio_button == 'rdoStudent')
    {
        $ins_career = filter_var(strtolower($_POST['ins_career']), FILTER_SANITIZE_STRING);
        $ins_admission_year = filter_var($_POST['ins_admission_year'], FILTER_SANITIZE_NUMBER_INT);
    }
    elseif($radio_button == 'rdoProfessional')
    {
        $ins_last_grade = filter_var(strtolower($_POST['ins_last_grade']), FILTER_SANITIZE_STRING);
        $ins_graduation_year = filter_var($_POST['ins_graduation_year'], FILTER_SANITIZE_NUMBER_INT);
        $ins_last_institution = filter_var(strtolower($_POST['ins_last_institution']), FILTER_SANITIZE_STRING);
    }
    
    /*** connect to database ***/
    /*** mysql hostname ***/

    include_once('mysql_config.php');

    $mysql_hostname = $mysql_hostname_config;

    /*** mysql username ***/
    $mysql_username = $mysql_username_config;

    /*** mysql password ***/

    $mysql_password = $mysql_password_config;

    /*** database name ***/
    $mysql_dbname = $mysql_dbname_config;

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt_general = $dbh->prepare("INSERT INTO general (name, run, email, institution, city, country, status ) 
        VALUES (:ins_name, :ins_rut, :ins_email, :ins_institution, :ins_city, :ins_country, :ins_status)");

        $ins_status = 0;

        /*** bind the parameters ***/
        $stmt_general->bindParam(':ins_name', $ins_name, PDO::PARAM_STR);
        $stmt_general->bindParam(':ins_rut', $ins_rut, PDO::PARAM_INT);
        $stmt_general->bindParam(':ins_email', $ins_email, PDO::PARAM_STR);
        $stmt_general->bindParam(':ins_institution', $ins_institution, PDO::PARAM_STR);
        $stmt_general->bindParam(':ins_city', $ins_city, PDO::PARAM_STR);
        $stmt_general->bindParam(':ins_country', $ins_country, PDO::PARAM_STR);
        $stmt_general->bindParam(':ins_status', $ins_status, PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt_general->execute();

        /*** get the current primary id ***/
        $user_id = $dbh->lastInsertId();

        if($radio_button == 'rdoStudent')
        {
            $ins_scholarship = ($_POST['ins_scholarships'] == 'yes');

            /*** prepare the insert ***/
            $stmt_student = $dbh->prepare("INSERT INTO student ( user_id, career, year, scholarship ) 
            VALUES (:user_id, :ins_career, :ins_admission_year, :ins_scholarship)");

            /*** bind the parameters ***/
            $stmt_student->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt_student->bindParam(':ins_career', $ins_career, PDO::PARAM_STR);
            $stmt_student->bindParam(':ins_admission_year', $ins_admission_year, PDO::PARAM_INT);
            $stmt_student->bindParam(':ins_scholarship', $ins_scholarship, PDO::PARAM_BOOL);

            /*** execute the prepared statement ***/
            $stmt_student->execute();
        }
        elseif($radio_button == 'rdoProfessional')
        {
            /*** prepare the insert ***/
            $stmt_profesional = $dbh->prepare("INSERT INTO profesional ( user_id, degree, year, institution ) 
            VALUES (:user_id, :ins_last_grade, :ins_graduation_year, :ins_last_institution)");

            /*** bind the parameters ***/
            $stmt_profesional->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt_profesional->bindParam(':ins_last_grade', $ins_last_grade, PDO::PARAM_STR);
            $stmt_profesional->bindParam(':ins_graduation_year', $ins_graduation_year, PDO::PARAM_INT);
            $stmt_profesional->bindParam(':ins_last_institution', $ins_last_institution, PDO::PARAM_STR);

            /*** execute the prepared statement ***/
            $stmt_profesional->execute();
        }

        /*** if all is done, say thanks ***/
        $message = '&#161;Sus datos fueron ingresados con &#233;xito!';
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = '&#161;Usuario existente!';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = '&#161;Ups! Creo que algo se rompió :s' . $e;
        }
    }
}
?>

<?php include_once('header.php'); ?>

<div class="inscription" id="inscription">
    <div class="container">
        <h3><?php echo $message; ?></h3>
    </div>
</div>

<?php include_once('footer.php'); ?>
