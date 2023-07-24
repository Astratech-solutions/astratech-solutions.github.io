<?php
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "From: administradoras@astratechsolutionssac.com";
    $header = "Reply-To: " . $email . "\n";
    
    
    if (mail('administradoras@astratechsolutionssac.com', $asunto, $mensaje, $header)){
        echo "Correo enviado";
    }else{
        echo "Ocurrió un problemaal enviar el correo";
    }
    
?>