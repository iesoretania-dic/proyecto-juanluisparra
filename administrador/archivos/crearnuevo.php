<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../estilos/sweet.js"></script>

    <title>Untitled 1</title>
</head>

<body>

<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['crear_usuario'])){
    if($_POST['nombre']!=""&&$_POST['password']!=""){
        $nombre=$_POST['nombre'];
        $password=$_POST['password'];
        $prio=$_POST['prioridad'];

        $hash=password_hash($password,PASSWORD_DEFAULT);

        //print $hash;
        //comprobar que no exista el usuario
        $sentencia="select idUsuario from Usuarios where nombreUsuario=?";
        $dr= fnquery(fnconnect("(local)","Noticias"),$sentencia,array("$nombre"));
        foreach($dr as $se){
            $uno=$se["idUsuario"];
        }
        if(empty($se)){
            //comprobar que no exista el usuariFIN
            //echo "esta bien";
            $comandos=array("insert into Usuarios values ('$nombre','$hash','$prio')");
            $ok = fnexecTran(fnconnect("(local)","Noticias"),$comandos);
            echo'<script>window.location="formulario_nuevous.php";</script>';

        }else{
            echo'<script>swal("NOMBRE REPETIDO","el usuario ya existe coge otro nombre de usuario","error").then((value) => { 
					window.location="formulario_nuevous.php";
				});</script>';
            //echo'<script>swal("nombre repetido","el usuario ya existe coge otro nombre de usuario","warning");window.location="formulario_nuevous.php";</script>';
            //echo'<script>window.location="formulario_nuevous.php";</script>';
        }


        //print $ok;

    }else{
        echo "rellena los datos";

    }

}

?>

</body>

</html>