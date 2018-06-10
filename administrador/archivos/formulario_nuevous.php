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
    <title>Crear usuarios</title>
</head>

<body>
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input  name="cerrar_sesion" type="submit" value="Cerrar sesion" />
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu" />
    </form>
</div>
<form action="crearnuevo.php" method="post">

    <div id="inicio">

            <input id="nombre" name="nombre" type="text"  placeholder="Introduce nombre usuario" required>

            <input id="password" name="password" type="text" placeholder="Introduce la contraseña" required>
        </div>
        <p>Introduce la prioridad maxima que va a tener el usuario</p>

            <select id="prioridad" name="prioridad" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>


        <input name="crear_usuario" type="submit" value="Crear Usuario" />
    </div>
</form>
</body>

</html>