<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <h1>Tus Datos</h1>
    <p>Estos son los datos que nos has enviado:</p>

    <?php
    $n=$_POST["name"];
    $e=$_POST["email"];
    $c=$_POST["coment"];

    echo("Nombre: ". $_POST['name']);
    echo("</br>");
    echo("Correo Electronico: ". $_POST["email"]);
    echo("</br>");
    echo("Tu comentario: ". $_POST["message"]);
    echo("</br>");
    
    ?>
    <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
    <p>Los datos no son correctos: <a href="form.html">Enviar</a>
    <p>Los datos son correctos: <a href="enviar.html">Volver a escribirlos</a>
</body>
</html>