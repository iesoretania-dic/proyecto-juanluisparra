<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['iniciar_sesion'])){
    if($_POST['nombre']!="" && $_POST['password']!=""){
        $no=$_POST['nombre'];
        $pas=$_POST['password'];

        //$verificar=password_verify($pas,password)
        //$hash=password_hash($pas,PASSWORD_DEFAULT);

        $sentencia="select idUsuario,prioridadUsuario,password from Usuarios where nombreUsuario=?";

        $dr= fnquery(fnconnect("(local)","Noticias"),$sentencia,array("$no"));


        foreach($dr as $se){
            $uno=$se["idUsuario"];
            $dos= $se["prioridadUsuario"];
            $tres=$se["password"];
        }

        if(empty($se)){
            //echo "esta mal";
            echo'<script>window.location="index.php";</script>';

        }else{
            if(password_verify($pas,$tres)){
                $_SESSION['inicio_sesion']='iniciar';
                $_SESSION['id']=$uno;
                $_SESSION['v2']=$dos;

                //header("location:noticia.php");
                //echo'<script>window.location="noticia.php?variable1='.$uno.'&variable2='.$dos.'";</script>';
                echo'<script>window.location="elegir.php";</script>';
                //echo "esta bien";
                exit();
            }
            else{
                //echo "mal";
                echo'<script>window.location="index.php";</script>';

            }
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