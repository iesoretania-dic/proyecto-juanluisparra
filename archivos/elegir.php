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
    <title>Elegir accion</title>
</head>

<body>
<form action="cerrar.php" method="post" >
    <input name="cerrar_sesion" type="submit" value="Cerrar sesion" class="btn btn-danger"/>
</form>
<form action="elegirpagina.php" method="post">

    <a href="noticia.php" class="btn btn-success btn-block">Crear Noticia</a>

    <br>

    <a href="modificar.php" class="btn btn-success btn-block">Modificar Noticia</a>
    <br>
    <a href="cambiarcontraseña.php" class="btn btn-success btn-block">Cambiar mi contraseña</a>


</form>
</body>

</html>