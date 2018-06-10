<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/boo/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/font/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="../estilos/main.css">
    <title>Inicio administrador</title>
</head>

<body>

<form action="iniciarsesionadministrador.php" method="post">
    <div id="inicio">
        <img id="logo" src="../estilos/imagen/logo.png"/>
        <div class="input-group">
            <div id="nombre" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user"></i></div>
            </div>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduce usuario" required>
        </div>
        <div class="input-group">
            <div id="password" class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-key"></i></div>
            </div>
            <input id="password" name="password" type="text" class="form-control" placeholder="Introduce contraseña" required>
        </div>

        <input name="iniciar_sesion" type="submit" value="Iniciar sesion" class="btn btn-success btn-block"/>
    </div>
</form>

</body>

</html>