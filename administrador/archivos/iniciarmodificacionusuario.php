<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['modificar_usuario'])){
    if($_POST['password']!=""){
        $password=$_POST['password'];
        $prio=$_POST['prioridad'];
        $id=$_SESSION['idusuario'];
        $hash=password_hash($password,PASSWORD_DEFAULT);

        //$idnoticia=$_SESSION['idnoticia'];

        //$id=$_POST['id'];

        //print $noti;
        //print $alta;
        //print $prio;
        //print $_SESSION['idusuario'];
        //print $_SESSION['idnoticia'];
        try
        {

            $sentencia="update Usuarios set password=?,prioridadUsuario=? where idUsuario=?";

            $filas=fnexec(fnconnect("(local)","Noticias"),$sentencia,array($hash,$prio,$id));

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
    <title></title>
</head>

<body>

</body>

</html>