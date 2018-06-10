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

    <title>Borrar noticias</title>
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
<div id="tabla">

    <table id="myTable" >
        <thead>
        <tr class="table-primary">
            <th width="50">ID</th>
            <th width="200">Titulo/th>
            <th width="50">IDUsuario</th>
            <th width="100">Nombre Usuario/th>
            <th width="100" id="borrar">Borrar</th>

        </tr>
        </thead>
        <tbody>
        <?php

        require("sqlserver.inc");

        $sentencia="select *,(select nombreUsuario from Usuarios where idUsuario= Noticias.idUsuario)as usu from Noticias order by idNoticia desc";
        $dr=fnquery(fnconnect("(local)","Noticias"),$sentencia);

        foreach ($dr as $movimiento)
        {
        ?>
        <tr class="table-success">
            <td ><?php print $movimiento['idNoticia'];?></td>
            <td><?php print $movimiento['titulo'];?></td>
            <td><?php print $movimiento['idUsuario'];?></td>
            <td><?php print $movimiento['usu'];?></td>

            <td><a href="#" onclick="preguntar(<?php print $movimiento['idNoticia'];?>)" > Eliminar</a></td>
            <?php }?>

        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function preguntar(id){
        if(confirm('Esta seguro que quieres eliminarlo'))
         {
         window.location="borrar.php?variable1=" + id;
         }

    }

</script>
</body>

</html>