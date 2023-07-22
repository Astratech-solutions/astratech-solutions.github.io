<?php
    if (isset($_POST['enviar'])){
        if (!empty($_POST['name'] && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']))){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $header = "From: noreply@astratechsolutionssac.com" . "\r\n";
            $header.= "Reply-To: administradoras@astratechsolutionssac.com" . "\r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email,$asunto,$mensaje,$header);
            if ($mail){
                echo "<h4>Correo enviado con éxito, te responderemos pronto</h4>";
            }
        }
    }
?>