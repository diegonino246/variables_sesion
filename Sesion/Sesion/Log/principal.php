<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&family=Zilla+Slab:wght@300&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <title>Portafolio</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("location:login.php");
}
?>

    <div id="inicio">
        <div class="contenedor1"><!--Contenedor principal 1-->
            <div class="contenedor2"></div>
            
            <nav><!--Barra de navegacion-->
                <a class="home" href="#inicio">INICIO</a>
                <a class="sobre" href="#sobre">ACERCA</a>
                <a class="biografia" href="#biografia">BIOGRAFIA</a>
                <a class="port" href="#portafolio">PORTAFOLIO</a>
                <a class="redes" href="#redes">REDES</a>
            </nav>
        </div>
        <h1 class="yo">Diego Barrios Soto</h1><!--titulo-->
        <h2 class="yo2">Desarrollador Web</h2><!--subtitulo-->
    </div>

    <div id="sobre">
            <h1 class="titulo-sobre">Acerca de</h1>
            <h2 class="titulo-rap">Rapidez</h2><!--titulo 1-->
            <img class="img-rapidez" src="imagenes/img. rapidez.png" alt="no se encontro imagen">
            <p class="textos-rap">Tiempos de carga rápidos e interacción sin retraso, mi máxima prioridad.</p>
<!------------------------------------------Separacion----------------------------------------------------------------->
            <h2 class="titulo-res">Resposivo</h2><!--titulo 2-->
            <img class="img-responsivo" src="imagenes/img. responsivo.png" alt="no se encontro imagen">
            <p class="textos-res">Mis diseños funcionarán en cualquier dispositivo, grande o pequeño.</p>
<!------------------------------------------Separacion----------------------------------------------------------------->
            <h2 class="titulo-int">Intuitivo</h2><!--titulo 3-->
            <img class="img-intuitivo" src="imagenes/img. intuitivo.png" alt="no se encontro imagen">
            <p class="textos-int">Fuerte preferencia por una experiencia de usuario/interfaz de usuario intuitiva y fácil de usar.</p>
<!------------------------------------------Separacion----------------------------------------------------------------->
            <h2 class="titulo-din">Dinamica</h2><!--titulo 4-->
            <img class="img-dinamica" src="imagenes/img. dinamica.png" alt="no se encontro imagen">
            <p class="textos-din">Los sitios web no tienen que ser estáticos, me encanta hacer que las páginas cobren vida.</p>
    </div>
    <div id="biografia">
        <div class="titulo-pregunta">
            <h3>¿Quién es el?</h3>
        </div>
        <div class="titulo-bio">
            <h3>Biografia</h3>
        </div>
        <img class="fondo-bio" src="imagenes/fondo3.jpg" alt="">
        <img class="foto-perfil" src="imagenes/POS_YO.jpg" alt="">
        <p class="texto-bio">
        Soy un desarrollador front-end.
        Tengo una seria pasión por los efectos de interfaz de usuario, las animaciones y la creación de experiencias de usuario intuitivas y dinámicas. En los codigos que mas manejo son HTML, CSS y PHP.
        Hagamos algo juntos.
        </p>
        <img class="imagen-html" src="imagenes/html-5.png" alt="">
        <img class="imagen-css" src="imagenes/css.png" alt="">
        <img class="imagen-php" src="imagenes/php.png" alt="">
    </div>
    <div id="portafolio">
        <div class="cuadro-portafolio">
            <h3 class="titulo-port">Portafolio</h3>
            <img class="fondo-port" src="imagenes/fondo2.jpg" alt="">
            <img class="logo-colg" src="imagenes/Rectangle 9.png" alt="">
            <p class="texto-port">
                Estudiante salido del colegio cientifico y tecnologico Blaise Pascal
            </p>
        </div>
    </div>
    <div id="redes">
        <div class="cuadro-redes">
            <h3 class="">Contactame</h3>
            <img class="fondo-redes" src="imagenes/fondo3.jpg" alt="">
            <textarea class="caja-contacto" name="comentarios" rows="10" cols="40"></textarea>
            <input class="caja-contacto2" type="button" value="enviar">
            <h2 class="titulo-redes">Redes Sociales</h2>
            <a class="img-insta" href="https://www.instagram.com"><img src="imagenes/instagram 1.png" alt=""></a>
            <a class="img-git" href="https://github.com/diegonino246"><img src="imagenes/github 1.png" alt=""></a>
            <a class="img-face" href="https://www.facebook.com/profile.php?id=100050491759565"><img src="imagenes/facebook 1.png" alt=""></a>
            <a href="cerrar_sesion.php"><button type="button" class="btn btn-danger">Cerrar sesion</button></a>
        </div>
    </div>
</body>

</html>
