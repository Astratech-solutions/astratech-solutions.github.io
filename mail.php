<?php
    // $destinatario = 'administradoras@astratechsolutionssac.com'
    $destinatario = 'nerohack1974@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = 'Consultas ASTRATECH SOLUTIONS';
    $mensajeCompleto = $mensaje . "\n\nDe: ". $nombre . "\nCorreo: " . $email;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "
    <script>
    alert('Correo enviado con éxito. Pronto te responderemos!')</script>";
    echo "<script>
    setTimeout(\"location.href='index.html'\",1000)
    </script>";
?>