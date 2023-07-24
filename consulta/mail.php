<?php
    $destinatario = 'administradoras@astratechsolutionssac.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "From: noreply@midominio.com\n";
    $header = "Reply-To: adminstradoras@astratechsolutionssac.com\n";
    

    mail($destinatario, $asunto, $mensaje, $header);

    
    
?>