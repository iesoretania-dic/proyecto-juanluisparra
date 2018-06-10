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

    <title>Crear usuarios</title>
</head>

<body>
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input  name="cerrar_sesion" type="submit" value="Cerrar sesion" class="btn btn-danger"/>
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu" class="btn btn-primary"/>
    </form>
</div>
<form action="crearnuevo.php" method="post">

    <div id="inicio">
        <div class="input-group">
            <div id="nombre" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user"></i></div>
            </div>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduce nombre usuario" required>
        </div>
        <div class="input-group">
            <div id="password" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-key"></i></div>
            </div>
            <input id="password" name="password" type="text" class="form-control" placeholder="Introduce la contraseña" required>
        </div>
        <p>Introduce la prioridad maxima que va a tener el usuario</p>
        <div class="input-group">
            <div id="prioridad" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-sort-numeric-up"></i></div>
            </div>
            <select id="prioridad" name="prioridad" class="form-control">
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


        <input name="crear_usuario" type="submit" value="Crear Usuario" class="btn btn-success btn-block"/>
    </div>
</form>
</body>

</html>