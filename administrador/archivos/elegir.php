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
            <div class="col-sm-3">
                <div class="card" style="width:280px">
                    <img class="card-img-top" src="../estilos/imagen/avatar.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="formulario_nuevous.php" class="btn btn-success btn-block">Crear Usuarios</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-3">
                <div class="card" style="width:280px">
                    <img class="card-img-top" src="../estilos/imagen/x.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="formulario_borrar.php" class="btn btn-success btn-block">Borrar noticias</a>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-sm-3">
                <div class="card" style="width:280px">
                    <img class="card-img-top" src="../estilos/imagen/reloj.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="formulario_modificar.php" class="btn btn-success btn-block">Cambiar tiempo de las noticias</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width:280px">
                    <img class="card-img-top" src="../estilos/imagen/modificar.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <a href="formulario_modificar_usuarios.php" class="btn btn-success btn-block">Modificar usuarios</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
</body>

</html>