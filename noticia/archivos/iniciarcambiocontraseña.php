<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['cambiar_contraseña'])){
    if($_POST['contrasenia']!=""){
        $con=$_POST['contrasenia'];
        $id=$_SESSION['id'];
        //$id=$_POST['id'];

        //print $noti;
        //print $alta;
        //print $prio;
        //print $_SESSION['id'];
        $hash=password_hash($con,PASSWORD_DEFAULT);

        try
        {

            $sentencia="update Usuarios set password=? where idUsuario=?";

            $filas=fnexec(fnconnect("(local)","Noticias"),$sentencia,array($hash,$id));

            echo'<script>window.location="elegir.php";</script>';

            //print $ok;
        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }


    }else{
        echo "rellena los datos";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Untitled 1</title>
</head>

<body>

</body>

</html>