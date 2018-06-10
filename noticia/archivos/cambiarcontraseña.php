<?php
session_start();

if(!$_SESSION['inicio_sesion']){
    echo'<script>window.location="index.php";</script>';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/boo/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/font/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="../estilos/main.css">
    <title>Cambiar contraseña</title>
</head>

<body>
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input name="cerrar_sesion" type="submit" value="Cerrar sesion" class="btn btn-danger"/>
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu" class="btn btn-primary"/>
    </form>
</div>

<div id="noticia">
    <form action="iniciarcambiocontraseña.php" method="post">
        <div class="input-group">
            <div id="contrasenia" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-key"></i></div>
            </div>
            <input id="contrasenia" name="contrasenia" type="text" class="form-control" placeholder="Introduce la nueva contraseña" required>
        </div>

        <input id="btnnoticia" name="cambiar_contraseña" type="submit" value="Modificar mi contraseña" class="btn btn-success btn-block"/>
    </form>
</div>
</body>

</html>