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
    <title>Cambiar contraseña</title>
</head>

<body>
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input name="cerrar_sesion" type="submit" value="Cerrar sesion" />
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu"/>
    </form>
</div>

<div id="noticia">
    <form action="iniciarcambiocontraseña.php" method="post">
            <input id="contrasenia" name="contrasenia" type="text"  placeholder="Introduce la nueva contraseña" required>

        <input id="btnnoticia" name="cambiar_contraseña" type="submit" value="Modificar mi contraseña" />
    </form>
</div>
</body>

</html>