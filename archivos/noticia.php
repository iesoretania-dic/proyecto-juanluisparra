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
    <title>Noticia</title>
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
    <form action="crearnoticia.php" method="post">

                <input id="titulo" name="titulo" type="text"  placeholder="Introduce un titulo" required>


            <p>Introduce la noticia</p>
            <textarea name="noticia" id="mytextarea"></textarea>


            <p>Introduce una fecha de alta</p>

                <input id="alta" name="alta"  type="date" min="<?=date('Y-m-d');?>"  required>

            <p>Introduce una fecha de baja</p>

                <input id="baja" name="baja"  type="date"  required>

            <p>Seleciona la prioridad de la noticia</p>

                <select id="miSelect" name="prioridad" ></select>


            <input id="btnnoticia" name="publicar_noticia" type="submit" value="Publicar" />
        </div>
    </form>
</div>
<script type="text/javascript">


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
