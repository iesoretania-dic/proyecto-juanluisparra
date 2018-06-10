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

    <title>Modificar Usuarios</title>
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
<div id="tabla">


    <table id="myTable">
        <thead>
        <tr class="table-primary">
            <th width="80">Nombre Usuario</th>
            <th width="20">Password</th>
            <th width="60">Prioridad Usuario</th>
            <th width="100">Borrar</th>

        </tr>
        </thead>
        <tbody>
        <?php

        require("sqlserver.inc");

        $sentencia="select * from Usuarios";
        $dr=fnquery(fnconnect("(local)","Noticias"),$sentencia);

        foreach ($dr as $movimiento)
        {
        ?>
        <tr class="table-success">
            <td ><?php print $movimiento['nombreUsuario'];?></td>
            <td><?php print $movimiento['password'];?></td>
            <td><?php print $movimiento['prioridadUsuario'];?></td>

            <td><a href="#" onclick="preguntar(<?php print $movimiento['idUsuario'];?>)" > Modificar</a></td>
            <?php }?>

        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function preguntar(id){
        if(confirm('Esta seguro que quieres modificarlo'))
         {
         window.location="modificarusuario.php?variable1=" + id;
         }


    }

</script>
</body>

</html>