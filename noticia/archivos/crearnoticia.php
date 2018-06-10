<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['publicar_noticia'])){
    if($_POST['noticia']!=""&&$_POST['alta']!=""){
        $titu=$_POST['titulo'];
        $noti=$_POST['noticia'];
        //para quitar los r y n de los espacios
        $order   = array("\r\n", "\n", "\r");
        $replace = '<br />';
        $xx = str_replace($order, $replace, $noti);
        $alta=$_POST['alta'];
        $baja=$_POST['baja'];
        $prio=$_POST['prioridad'];
        $id=$_SESSION['id'];
        //$id=$_POST['id'];

        //print $noti;
        //print $alta;
        //print $prio;
        //print $_SESSION['id'];

        $comandos=array("insert into Noticias values ('$titu','$xx','$alta','$baja','$prio','$id')");


        $ok = fnexecTran(fnconnect("(local)","Noticias"),$comandos);

        echo'<script>window.location="noticia.php";</script>';

        //print $ok;


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