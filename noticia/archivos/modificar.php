<?php
session_start();

if(!$_SESSION['inicio_sesion']){
    echo'<script>window.location="index.php";</script>';

}else{
    //$v1 = $_GET['variable1'];
    //print $v1;
    //$v2 = $_GET['variable2'];
    //print $v2;

    //$_SESSION['id'] = $v1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/boo/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/font/web-fonts-with-css/css/fontawesome-all.css">
    <script type="text/javascript" src="../recursos/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../recursos/js/tablesorter-master/js/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="../recursos/js/tablesorter-master/js/jquery.tablesorter.widgets.js"></script>
    <link href="../recursos/js/tablesorter-master/addons/pager/jquery.tablesorter.pager.css" rel="stylesheet">
    <script src="../recursos/js/tablesorter-master/js/widgets/widget-pager.js"></script>
    <script type="text/javascript" src="../recursos/js/main.js"></script>
    <script type="text/javascript" src="../recursos/sweet.js"></script>
    <link rel="stylesheet" href="../estilos/main.css">
    <title>Elegir accion</title>
</head>

<body>
<div id="cabecera">
    <form id="cerrar" action="cerrar.php" method="post" >
        <input name="cerrar_sesion" type="submit" value="Cerrar sesion" class="btn btn-danger"/>
    </form>
    <form action="volver.php" method="post" >
        <input id ="volver" name="volver" type="submit" value="Volver al menu" class="btn btn-primary"/>
    </form>
</div>
<div id="tabla">
    <div id="pager" class="pager">
        <form>
            <img src="../estilos/imagen/first.png" class="first"/>
            <img src="../estilos/imagen/prev.png" class="prev"/>
            <!-- the "pagedisplay" can be any element, including an input -->
            <span class="pagedisplay" data-pager-output-filtered="{startRow:input} &ndash; {endRow} / {filteredRows} of {totalRows} total rows"></span>
            <img src="../estilos/imagen/next.png" class="next"/>
            <img src="../estilos/imagen/last.png" class="last"/>
            <select class="pagesize">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="all">Mostrar todos</option>
            </select>
        </form>
    </div>

    <table id="myTable" class="table tablesorter">
        <thead>
        <tr class="table-primary">
            <th width="50">ID<i class="fas fa-arrows-alt-v"></i></th>
            <th width="200">Titulo<i class="fas fa-arrows-alt-v"></i></th>
            <th width="50">Fecha Alta<i class="fas fa-arrows-alt-v"></i></th>
            <th width="100">Fecha Fin<i class="fas fa-arrows-alt-v"></i></th>
            <th width="100" id="borrar">Modificar</th>

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
        <tr class="table-success">
            <td ><?php print $movimiento['idNoticia'];?></td>
            <td><?php print $movimiento['titulo'];?></td>
            <td><?php print $movimiento['fechaAlta'];?></td>
            <td><?php print $movimiento['fechaFin'];?></td>

            <td><a href="#" onclick="preguntar(<?php print $movimiento['idNoticia'];?>)" class="btn btn-warning"> Modificar</a></td>
            <?php }?>

        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function preguntar(id){
        /*if(confirm('Esta seguro que quieres modificarlo'))
         {
         window.location="modificarnoticia.php?variable=" + id;
         }*/
        swal({
            title: "Estas seguro que quieres modificar la noticia",
            icon: "warning",
            buttons: ["No", "Si"],
            dangerMode: true,
        })
            .then((willDelete) => {
            if (willDelete) {
                window.location="modificarnoticia.php?variable=" + id;

            }

        });


    }

</script>
</body>

</html>