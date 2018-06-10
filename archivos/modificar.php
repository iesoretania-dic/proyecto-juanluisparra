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
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input name="cerrar_sesion" type="submit" value="Cerrar sesion" />
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu" />
    </form>
</div>
<div id="tabla">
    <table id="myTable">
        <thead>
        <tr>
            <th width="50">ID/th>
            <th width="200">Titulo</th>
            <th width="50">Fecha Alta</th>
            <th width="100">Fecha Fin</th>
            <th width="100">Modificar</th>

        </tr>
        </thead>
        <tbody>
        <?php

        require("sqlserver.inc");

        $sentencia="select * from Noticias where idUsuario=". $_SESSION['id'] ."and getdate() BETWEEN fechaAlta and fechaFin";
        $dr=fnquery(fnconnect("(local)","Noticias"),$sentencia);

        foreach ($dr as $movimiento)
        {
        ?>
        <tr>
            <td ><?php print $movimiento['idNoticia'];?></td>
            <td><?php print $movimiento['titulo'];?></td>
            <td><?php print $movimiento['fechaAlta'];?></td>
            <td><?php print $movimiento['fechaFin'];?></td>

            <td><a href="#" onclick="preguntar(<?php print $movimiento['idNoticia'];?>)" > Modificar</a></td>
            <?php }?>

        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function preguntar(id){
        if(confirm('Esta seguro que quieres modificarlo'))
         {
         window.location="modificarnoticia.php?variable=" + id;
         }


    }

</script>
</body>

</html>