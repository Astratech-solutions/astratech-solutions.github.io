<?php

    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre'])&& !empty($_POST['email'])&& !empty($_POST['asunto'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = 'consulta web'
            $asunto = $_POST['men1saje'];
            $header = "From: noreply@example.com" . "\r\n"
            $header "Reply-To: noreply@example.com" . "\r\n";
            $header "X-Mailer: PHP/". phpversion();
            $mail mail($email, $name, $asunto, $msg, $header);
            if ($mail) {
                echo "<h4>¡Mail enviado exitosamente!</h4>";
            }
        }
    }
    
    
    #$nombre = $_POST['nombre'];
    #$email = $_POST['email'];
    #$asunto = $_POST['asunto'];
    #$mensaje = $_POST['mensaje'];

    #$header = "From: administradoras@astratechsolutionssac.com";
    #$header = "Reply-To: " . $email . "\n";
    
    
    #if (mail('https://mailadmin.zoho.com/cpanel/reports.do#logs/mailLogs/deliveryLogs', $asunto, $mensaje, $header)){
        #echo "Correo enviado";
    #}else{
        #echo "Ocurrió un problemaal enviar el correo";
    #}
    
?>