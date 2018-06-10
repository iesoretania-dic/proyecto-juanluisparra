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

    <title>Modificar tiempo</title>
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
<form action="modificar.php" method="post">
    <div id="inicio">
        <p>Selecione la prioridad que quieres modificar</p>
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
        <p>seleciona el tiempo que quieres darle</p>

            <select id="tiempo" name="tiempo">
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


        <input id="modificar" name="modificar_tiempo" type="submit" value="Modificar tiempo" />
    </div>

</form>

</body>

</html>