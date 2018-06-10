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

    <title>Modificar tiempo</title>
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
<form action="modificar.php" method="post">
    <div id="inicio">
        <p>Selecione la prioridad que quieres modificar</p>
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
        <p>seleciona el tiempo que quieres darle</p>
        <div class="input-group">
            <div id="tiempo" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-clock"></i></div>
            </div>
            <select id="tiempo" name="tiempo" class="form-control">
                <option value="1000">1 segundos</option>
                <option value="2000">2 segundos</option>
                <option value="3000">3 segundos</option>
                <option value="4000">4 segundos</option>
                <option value="5000">5 segundos</option>
                <option value="6000">6 segundos</option>
                <option value="7000">7 segundos</option>
                <option value="8000">8 segundos</option>
                <option value="9000">9 segundos</option>
                <option value="10000">10 segundos</option>
            </select>

        </div>


        <input id="modificar" name="modificar_tiempo" type="submit" value="Modificar tiempo" class="btn btn-success btn-block"/>
    </div>

</form>

</body>

</html>