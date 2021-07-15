<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Inicio Sesion </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="static/css/index.css">
    
        
    </head>
    <!--PROFE EL PINCHI TEAMS ME CAMBIO EL NOMBRE DE LA BASE DE DATOS Y LE PUSO UN 2 DE MAS AL NOMBRE EN LA TAREA
    SOLO LE DIGO POR SI LE TIRA UN ERROR XD-->
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form method="POST" action="validar.php" id="loginform">
                        <label for="usuario">Correo</label>
                        <input type="email" name="correo" id="usuario">
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="contra" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="recordar.php">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="#">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
<!--
<form method="POST" action="validar.php" class="col-12" ">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="correo"/> <br> 
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <i class="fas fa-dragon"></i><input type="password" class="form-control" placeholder="Contrasena" name="contra"/>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-sign-in-alt"></i>   Ingresar </button>
                    <div class="forgot">
                        <a href="#">Recordar contraseña </a>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Asegurate de eescribir bien tus datos amigo. </strong>JAJAJ na mentira no sirve
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    
                        </button>
                        </div>
                </form>
-->
