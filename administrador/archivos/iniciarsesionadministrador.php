<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['iniciar_sesion'])){
    if($_POST['nombre']!="" && $_POST['password']!=""){
        $no=$_POST['nombre'];
        $pas=$_POST['password'];


        $cnx = new PDO("sqlsrv:server=(local);Database = Noticias");
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sentencia="select idUsuarioAdministrador from AdministradorUsuarios where nombreUsuarioAdministrador=? and passwordAdministrador=?";

        $cmd=$cnx->prepare($sentencia);
        $cmd->bindParam(1,$no);
        $cmd->bindParam(2,$pas);
        $cmd->execute();

        $dr=$cmd->fetchcolumn();

        if($dr!=Null){
            $_SESSION['inicio_sesion']='inicio';
            //header("location:noticia.php");
            echo'<script>window.location="elegir.php?variable1='.$dr.'";</script>';
            //echo "esta bien";
            exit();

        }else{
            //echo "esta mal";
            echo'<script>window.location="index.php";</script>';
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