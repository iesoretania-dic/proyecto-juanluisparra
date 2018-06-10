<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio sesion</title>
</head>

<body>

<form action="iniciarsesion.php" method="post">
    <div id="inicio">
        <img id="logo" src="../estilos/imagen/logo.png"/>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduce usuario" required>
            <input id="password" name="password" type="password" class="form-control" placeholder="Introduce contraseña" required>

        <input name="iniciar_sesion" type="submit" value="Iniciar sesion" class="btn btn-success btn-block"/>
    </div>
</form>

</body>

</html>