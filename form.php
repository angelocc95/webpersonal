<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="my web">
    <meta name="keywords" content="HTML5,CSS3, JavaScript">
    <!-- fonst awesome iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- font oswald -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap"> 
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Datos</title>
</head> 
<body>
    <section class="titulo-form">
    <h1>Tus Datos</h1>
    <p>Estos son los datos que nos has enviado:</p>
    <br>
    <?php

    echo("Nombre: ". $_POST['name']);echo("</br>");
    echo("Correo Electronico: ". $_POST["email"]);echo("</br>");
    echo("Tu comentario: ". $_POST["message"]);echo("</br>");
    
    ?>
    <br>
    <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p><br>
    <p>Los datos no son correctos: <a href="Contacto.html">Volver a escribirlos</a>
    <p>Los datos son correctos: <a href="enviar.html">Enviar</a>
    </section>
</body>
</html>