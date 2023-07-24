<?php
    $destinatario = 'administradoras@astratechsolutionssac.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "From: noreply@midominio.com\r\n";
    $header .= "Reply-To: adminstradoras@astratechsolutionssac.com\r\n";
    

    mail($destinatario, $asunto, $mensaje, $header);

    echo "
    <script>
    alert('Correo enviado con éxito. Pronto te responderemos!')
    </script>";
    
?>