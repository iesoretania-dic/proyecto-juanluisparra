<?php
session_start();
require("sqlserver.inc");

if(!$_SESSION['inicio_sesion']){
    echo'<script>window.location="index.php";</script>';

}else{
    $id=$_SESSION['id'];
    $variable=$_GET['variable'];
    $_SESSION['idnoticia']=$variable;

    $sentencia="select *,(select prioridadUsuario from Usuarios where idUsuario=?) as prioridad from Noticias where idNoticia=?";

    $dr= fnquery(fnconnect("(local)","Noticias"),$sentencia,array("$id","$variable"));
    $array=array();
    $array2=array();
    $array3=array();
    $array4=array();

    foreach($dr as $se){
        $array[]=$se['titulo'];
        $array2[]=$se['noticia'];
        $array3[]=$se['fechaAlta'];
        $array4[]=$se['fechaFin'];

    }

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
<div id="noticia">
    <form action="iniciarmodificacion.php" method="post">


            <input id="titulo" name="titulo" type="text"  placeholder="Introduce un titulo" required>

             <p>Introduce la noticia</p>
        <textarea name="noticia" id="mytextarea"></textarea>


        <p>Introduce una fecha de alta</p>

            <input id="alta" name="alta"  type="date" readonly="true"   required>

        <p>Introduce una fecha de baja</p>

            <input id="baja" name="baja"  type="date"   required>

        <p>Seleciona la prioridad de la noticia</p>
        <select id="miSelect" name="prioridad" ></select>



        <input id="btnnoticia" name="modificar_noticia" type="submit" value="Modificar Noticia" />

    </form>
</div>
<script type="text/javascript">
    titulo =JSON.parse('<?php echo JSON_encode($array)?>');
    noticia =new Array(<?php echo JSON_encode($array2)?>);
    fechaAlta =JSON.parse('<?php echo JSON_encode($array3)?>');
    fechaFin =JSON.parse('<?php echo JSON_encode($array4)?>');

    //titulo
    document.getElementsByName("titulo")[0].value=titulo[0];

    //noticia
    document.getElementById("mytextarea").innerHTML=noticia[0][0];
    //fechaalta
    document.getElementsByName("alta")[0].value=fechaAlta[0];
    //fechabaja
    document.getElementsByName("baja")[0].value=fechaFin [0];



    //para montar el select
    var prioridad="<?php echo $_SESSION['v2']?>";


    var miSelect=document.getElementById("miSelect");

    for (i = 1; i <= prioridad; i++) {


        var miOption=document.createElement("option");

        var te = document.createTextNode(i)
        miOption.appendChild(te);

        miOption.setAttribute("value",i);

        miSelect.appendChild(miOption);
    }


</script>

</body>


</html>
