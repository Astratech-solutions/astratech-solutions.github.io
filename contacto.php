<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style-contact.css">
    <link rel="stylesheet" href="style-form.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://chi01pap002files.storage.live.com/y4mQ71Hn1U5aAWRU7hci6mwactc7niOAqlr-1ZzSn6ktKa09AjHBr_l9BaFjMaWTx06zCh3VrL6PHClCa44y_Z_S5jRkJGvwuvjfhN9Vq2iUgengw_UGUmeCIz_VyXCDQo8YKQgSC3aNp-3p1rTNU03tpsLDaTCemQg659pYFigDkVjzq6XiD8dCkl90he6tzpR?width=850&height=852&cropmode=none">

    <title>Contacto</title>
</head>

<?php
    include("mail.php")
?>

<body>
    <div class="interior">
        <div class="top-logo">
            <img src="https://chi01pap002files.storage.live.com/y4m5gMySIbi3qj51XbPutTt_guzcFTLZm49QWOqUuzu3VdHLUwr7VeGc7RPw9sRf6LPQF9IqsX6vHhx8igjtbWirUS0SWZoKB9MUww7_ouVFnSwQeBW0XItT4kS-YSkbqDhT-MQ9rf2sWm3fbj9viYrV8WC6eXl7LUiQ-jgXzN6blKP8LHB0PK8DgaEOF6xybC-?width=660&height=158&cropmode=none">
        </div>
        <nav class="navi-bar">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="details.html">Detalles</a></li>
                <li><a href="services.html">Nuestros Servicios</a></li>
                <li><a href="queries.html">Consultas</a></li>
            </ul>
        </nav>
    </div>

    <div class="form-container">
        <form class="formulario" method="post">

            <h2>Ponte en contacto con nosotros!</h2>
            <input type="text" placeholder="Ingrese su nombre" name="name">
            <input type="email" placeholder="Ingrese su e-mail" name="email">
            <input type="text" placeholder="Asunto" name="asunto">
            <textarea placeholder="Ingrese su consulta" name="mensaje"></textarea>
            <input type="submit">
        </form>

    </div>
    

</body>
</html>