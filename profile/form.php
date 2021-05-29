<?php
// D A T E - S E R V I C E
if (isset($_POST['btn-submit'])) {
    function añadir_algo(&$cadena)
    {
        $cadena .= test_input($_POST['destino1']);
    }

    $cad = 'carlosarturomt@gmail.com, ';
    añadir_algo($cad);
    echo $cad;

    $asunto = "Agendar Cita de ProfesionistasDeTexcoco";
    $mensaje = test_input($_POST['mensaje']);
    $numero = test_input($_POST['numero']);
    $nombre = test_input($_POST['nombre']);
    $correo = test_input($_POST['correo']);

    $destino1 = test_input($_POST['destino1']);

    $header = 'From: profesionistasmexico@gmail.com' . "\r\n" .
    'Reply-To: noreply' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $carta = "Mensaje: $mensaje \n";
    $carta .= "Tel. de contacto: $numero \n";
    $carta .= "Nombre del contacto: $nombre \n";
    $carta .= "Correo de contacto: $correo \n";

    $mail1 = mail($cad, $asunto, $carta, $header);

    if ($mail1) {

        echo "<h2>Mensaje enviado, gracias por contactarnos.</h2>";
        echo "<meta http-equiv='refresh' content='1,url=/index'>";
    } else {
        echo "No se ha podido enviar tu mensaje, intentalo mas tarde";
    }
}

// S E R V I C E S
if (isset($_POST['btn-submit1'])) {
    function añadir_algo(&$cadena)
    {
        $cadena .= test_input($_POST['destino1']);
    }

    $cad = 'carlosarturomt@gmail.com, ';
    añadir_algo($cad);
    echo $cad;

    $asunto = "Agendar Servicio de ProfesionistasDeTexcoco";
    $servicio = test_input($_POST['servicio']);
    $nombre = test_input($_POST['nombre']);
    $edad = test_input($_POST['edad']);
    $sexo = test_input($_POST['sexo']);
    $numero = test_input($_POST['numero']);
    $correo = test_input($_POST['correo']);
    $fecha = test_input($_POST['fecha']);
    $mensaje = test_input($_POST['mensaje']);

    $destino1 = test_input($_POST['destino1']);

    $header = 'From: profesionistasmexico@gmail.com' . "\r\n" .
    'Reply-To: noreply' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $carta = "Servicio: $servicio \n";
    $carta .= "Nombre del cliente: $nombre \n";
    $carta .= "Edad del cliente: $edad \n";
    $carta .= "Sexo del cliente: $sexo \n";
    $carta .= "Tel. del cliente: $numero \n";
    $carta .= "Correo del cliente: $correo \n";
    $carta .= "Fecha Tentativa: $fecha \n";
    $carta .= "Mensaje: $mensaje \n";

    $mail2 = mail($cad, $asunto, $carta, $header);

    if ($mail2) {
        echo "<h2>Mensaje enviado, gracias por contactarnos.</h2>";
        echo "<meta http-equiv='refresh' content='1,url=/index'>";
    } else {
        echo "No se ha podido enviar tu mensaje, intentalo mas tarde";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
