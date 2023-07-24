<?php
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "From: noreply@astratechsolutionssac.com";
    $header = "Reply-To: " . $email . "\n";
    
    mail('administradoras@astratechsolutionssac.com', $asunto, $mensaje, $header)
    
    if (mail($destinatario, $asunto, $mensaje, $header)){
        echo "Correo enviado";
    }else{
        echo "Ocurrió un problemaal enviar el correo";
    }
    
?>