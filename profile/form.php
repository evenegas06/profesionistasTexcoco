<?php

if ( isset($_POST['btn-submit-date']) || isset($_POST['btn-submit-service'])) {
    $principal = 'carlosarturomt@gmail.com';

    $asunto = '';
    $carta = '';
    $destino = $principal . ', ' . test_input($_POST['destino']);

<<<<<<< HEAD
=======
    $asunto = "Agendar Cita de ProfesionistasDeTexcoco";

    $profesionista = test_input($_POST['profesionista']);

    $mensaje = test_input($_POST['mensaje']);
    $numero = test_input($_POST['numero']);
>>>>>>> 01cf520824235426838ee163b50ca1e6bc861cd0
    $nombre = test_input($_POST['nombre']);
    $correo = test_input($_POST['correo']);
    $numero = test_input($_POST['numero']);
    $mensaje = test_input($_POST['mensaje']);

    $header = 'From: profesionistasmexico@gmail.com' . "\r\n" .
        'Reply-To: noreply' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
}
// D A T E - S E R V I C E
if (isset($_POST['btn-submit-date'])) {

    $asunto = "Agendar Cita de ProfesionistasDeTexcoco";

    $carta = "Para: $profesionista \n";
    $carta .= "Mensaje: $mensaje \n";
    $carta .= "Tel. de contacto: $numero \n";
    $carta .= "Nombre del contacto: $nombre \n";
    $carta .= "Correo de contacto: $correo \n";

    // S E R V I C E S
} elseif (isset($_POST['btn-submit-service'])) {

    $asunto = "Agendar Servicio de ProfesionistasDeTexcoco";
<<<<<<< HEAD
    
=======

    $profesionista = test_input($_POST['profesionista']);

>>>>>>> 01cf520824235426838ee163b50ca1e6bc861cd0
    $servicio = test_input($_POST['servicio']);
    $edad = test_input($_POST['edad']);
    $sexo = test_input($_POST['sexo']);
    $fecha = test_input($_POST['fecha']);

    $carta = "Para: $profesionista \n";
    $carta .= "Servicio: $servicio \n";
    $carta .= "Nombre del cliente: $nombre \n";
    $carta .= "Edad del cliente: $edad \n";
    $carta .= "Sexo del cliente: $sexo \n";
    $carta .= "Tel. del cliente: $numero \n";
    $carta .= "Correo del cliente: $correo \n";
    $carta .= "Fecha Tentativa: $fecha \n";
    $carta .= "Mensaje: $mensaje \n";
}

$mail = mail($destino, $asunto, $carta, $header);

if ($mail) {
    echo "<h2>Mensaje enviado, gracias por contactarnos.</h2>";
    echo "<meta http-equiv='refresh' content='1,url=/index'>";
} else {
    echo "No se ha podido enviar tu mensaje, intentalo mas tarde";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
