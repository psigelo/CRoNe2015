
<?php

$current_page="status_service";

/*** check if all the input were filled ***/
if(!isset( $_POST['ins_rut'] )) 
{
    $message = '<h3>Por favor ingrese el campo "Cédula de identidad".</h3>';
}
/*** check correct lengths of inputs ***/
elseif (strlen( $_POST['ins_rut']) > 15)
{
    $message = '<h3>Largo del campo "Cédula de identidad" fuera de los límites.</h3>';
}
else
{
    /*** let's add some filters ***/
    $ins_rut = filter_var($_POST['ins_rut'], FILTER_SANITIZE_NUMBER_INT);
   
    /*** connect to database ***/
    
    include_once('mysql_config.php');

    /*** mysql hostname ***/
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

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt_general = $dbh->prepare("SELECT status, name, type FROM general WHERE run = :ins_run");

        /*** bind the parameters ***/
        $stmt_general->bindParam(':ins_run', $ins_rut, PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt_general->execute();

        $user = $stmt_general->fetch();

        if (!empty($user)) 
        {
            $query_name = $user['name'];
            $query_rut = substr_replace($ins_rut, '-', strlen($ins_rut) - 1, 0);
            if ($language == 'es')
            {
                $query_type = ( $user['type'] == 0 ? "Estudiante" : "Profesional" );
            }
            else
            {
                $query_type = ( $user['type'] == 0 ? "Student" : "Professional" );
            }
            
            $query_status = $user['status'];

            switch (query_status) 
            {
                case 0:
                    $query_scholarship = "no";
                    $query_amount_clp = 15000 * ($user['type'] + 1);
                    $query_amount_usd = 25 * ($user['type'] + 1);
                    $query_bill = ( $language == 'es' ? "no cancelado" : "payment required"); 
                    break;
                case 1:
                    $query_scholarship = "no";
                    $query_amount_clp = 15000 * ($user['type'] + 1);
                    $query_amount_usd = 25 * ($user['type'] + 1);
                    $query_bill = ( $language == 'es' ? "cancelado" : "payment done"); 
                    break;
                case 2:
                    $query_scholarship = "60%";
                    $query_amount_clp = 6000 * ($user['type'] + 1);
                    $query_amount_usd = 10 * ($user['type'] + 1);
                    $query_bill = ( $language == 'es' ? "no cancelado" : "payment required"); 
                    break;
                case 3:
                    $query_scholarship = "60%";
                    $query_amount_clp = 6000 * ($user['type'] + 1);
                    $query_amount_usd = 10 * ($user['type'] + 1);
                    $query_bill = ( $language == 'es' ? "cancelado" : "payment done"); 
                    break;
                case 4:
                    $query_scholarship = "100%";
                    $query_amount_clp = 0;
                    $query_amount_usd = 0;
                    $query_bill = "OK";
                    break;
                default:
                    $query_scholarship = " ";
                    $query_amount_clp = " ";
                    $query_amount_usd = " ";
                    $query_bill = " "; 
                    break;
            }

            if ($language == 'es')
            {
                $message = '
                <h3>Estado de la inscripción</h3>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>RUN</th>
                        <th>Tipo</th>
                        <th>Beca</th>
                        <th>Monto CLP (USD)</th>
                        <th>Estado</th>
                    </tr>
                    <tr >
                        <td>' . $query_name . '</td>
                        <td>' . $query_rut . '</td>
                        <td>' . $query_type . '</td>
                        <td>' . $query_scholarship . '</td>
                        <td>' . $query_amount_clp . '(' . $query_amount_usd . ')</td>
                        <td>' . $query_bill . '</td>   
                    </tr>
                </table>';
            }
            else 
            {
                $message = '
                <h3>Registration status</h3>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>RUN</th>
                        <th>Type</th>
                        <th>Scholarship</th>
                        <th>Amount USD</th>
                        <th>Status</th>
                    </tr>
                    <tr >
                        <td>' . $query_name . '</td>
                        <td>' . $query_rut . '</td>
                        <td>' . $query_type . '</td>
                        <td>' . $query_scholarship . '</td>
                        <td>' . $query_amount_usd . '</td>
                        <td>' . $query_bill . '</td>   
                    </tr>
                </table>';
            }
            
        } 
        else 
        {
            $message = '<h3>El RUN provisto no se encuentra en nuestra base de datos</h3>'; 
        }
    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = '<h3>&#161;Ups! Creo que algo se rompió :s ' .$e . '</h3>';
    }
}
?>

<?php include_once('header.php'); ?>

<div class="status" id="status">
    <div class="container">
        <?php echo $message; ?>
    </div>
</div>

<?php include_once('footer.php'); ?>
