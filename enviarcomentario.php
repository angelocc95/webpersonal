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
    <?php
    $Nombre = $_POST['name'];
    $email = $_POST['email'];
    $comentario = $_POST['message'];

    $conexion = mysqli_connect('localhost', 'root', '', 'comentario');
    
    $resultado = mysqli_query($conexion, 'INSERT INTO usuario(Nombre, email, comentario) VALUES("' . $Nombre . '", "' . $email . '", "' . $comentario . '")');


    if($resultado)
        echo '<a  href="enviar.html"> Click here</a> Todo Correcto.';
    else
        echo('Error al enviar comentario');
    mysqli_close($conexion);
    ?>
    </section>
</body>

<!-- <script languaje="javascript">
$("enviar").click(function()){

}
</script> -->
</html>
