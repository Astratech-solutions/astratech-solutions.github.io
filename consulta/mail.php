<?php
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre'])&& !empty($_POST['email'])&& !empty($_POST['asunto'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = 'consulta web';
            $header = "From: noreply@example.com" . "\r\n"
            $header = "Reply-To: noreply@example.com" . "\r\n";
            $header = "X-Mailer: PHP/". phpversion();
            $mail mail("administradoras@astratechsolutionssac.com", $name, $asunto, $msg, $header);
            if ($mail) {
                echo "<h4>¡Mail enviado exitosamente!</h4>";
            }
        }
    }
    
?>