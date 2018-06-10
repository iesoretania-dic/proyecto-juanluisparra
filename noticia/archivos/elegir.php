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
    <title>Elegir accion</title>
</head>

<body>
<form action="cerrar.php" method="post" >
    <input name="cerrar_sesion" type="submit" value="Cerrar sesion" class="btn btn-danger"/>
</form>
<form action="elegirpagina.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-4">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="../estilos/imagen/noticia.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="noticia.php" class="btn btn-success btn-block">Crear Noticia</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-4 col-xs-4">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="../estilos/imagen/modificar.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="modificar.php" class="btn btn-success btn-block">Modificar Noticia</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="../estilos/imagen/changepasswords.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="cambiarcontraseña.php" class="btn btn-success btn-block">Cambiar mi contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

</html>