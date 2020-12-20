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
    <title>Comentarios</title>

</head>
    <body>
        <div class="container">
            <!-- navegacion -->
            <nav class="nav-main">
                <!-- logo -->
                <img src="./image/logo.jpg" class="nav-logo">
                <!--menu de navegacion -->
                <ul class="nav-menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="acerca.html">Acerca</a></li>
                    <li><a href="Portafolio.html">Portafolio</a></li>
                    <li><a href="Contacto.html">Contacto</a></li>
                    <li><a href="comentarios.php">Comunidad</a></li>
                </ul>
            </nav>
        <hr>

        <!-- Comentarios conexion con bd -->
        <div class="form-contact-coment">
            <h1>Comentarios</h1>
        <?php

        $conexion = mysqli_connect('localhost', 'root', '', 'comentario');
        $resultado = mysqli_query($conexion, 'SELECT * FROM usuario');

        while ($usuario = mysqli_fetch_object($resultado))
        {
            ?>
            <b><?php echo($usuario->Nombre); ?></b> <?php echo($usuario->email); ?> (<?php echo($usuario->fecha); ?>) dijo:
            <br />
            <?php echo($usuario->comentario); ?>
            <br />
            <hr />
            <?php
        }
        ?>
        <div>
        <br>
        <br>
        <br>
      </div>
          <!-- Footer -->
        <footer class="footer">
          <section class="social">
            <p>Sigueme en mis Redes</p>
            <div class="links">
              <a href="https://facebook.com">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://linkdin.com">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fab fa-discord"></i>
              </a>
              <a href="#">
                <i class="fab fa-telegram"></i>
              </a>
            </div>
          </section>
            <h3>copyright©2020 Todos Los Derechos Reservados</h3>
        </footer>
    </body>
</html>