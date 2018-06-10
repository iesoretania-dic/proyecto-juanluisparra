<?php
session_start();

if(!$_SESSION['inicio_sesion']){
    echo'<script>window.location="index.php";</script>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elegir accion</title>
</head>

<body>
<form action="cerrar.php" method="post" >
    <input name="cerrar_sesion" type="submit" value="Cerrar sesion" />
</form>
<form action="elegirpagina.php" method="post">
    <div class="container">
        <div class="row">

                        <a href="formulario_nuevous.php" >Crear Usuarios</a>

            <br>

                        <a href="formulario_borrar.php" >Borrar noticias</a>

            <br>


                        <a href="formulario_modificar.php" >Cambiar tiempo de las noticias</a>



                        <a href="formulario_modificar_usuarios.php" >Modificar usuarios</a>

        </div>
    </div>
</form>
</body>

</html>