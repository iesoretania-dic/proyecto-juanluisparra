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
    <script src="../recursos/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="../recursos/mio.js"></script>
    <title>Noticia</title>
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
<div id="noticia">
    <form action="crearnoticia.php" method="post">
        <div id="noticia">
            <div class="input-group">
                <div id="titulo" class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-align-justify"></i></div>
                </div>
                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Introduce un titulo" required>
            </div>

            <p>Introduce la noticia</p>
            <textarea name="noticia" id="mytextarea"></textarea>


            <p>Introduce una fecha de alta</p>
            <div class="input-group">
                <div id="alta" class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-calendar-alt"></i></div>
                </div>

                <input id="alta" name="alta"  type="date" min="<?=date('Y-m-d');?>" class="form-control"  required>
            </div>
            <p>Introduce una fecha de baja</p>
            <div class="input-group">

                <div id="baja" class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-calendar-times"></i></div>
                </div>

                <input id="baja" name="baja"  type="date" class="form-control"  required>
            </div>
            <p>Seleciona la prioridad de la noticia</p>
            <div class="input-group">

                <div id="select" class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-sort-numeric-up"></i></div>
                </div>

                <select id="miSelect" name="prioridad" class="form-control"></select>
            </div>


            <input id="btnnoticia" name="publicar_noticia" type="submit" value="Publicar" class="btn btn-success btn-block"/>
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
