<?php
session_start();
require("sqlserver.inc");

if(isset($_POST['modificar_noticia'])){
    if($_POST['noticia']!=""&&$_POST['alta']!=""){
        $titu=$_POST['titulo'];
        $noti=$_POST['noticia'];
        $order   = array("\r\n", "\n", "\r");
        $replace = '<br />';
        $xx = str_replace($order, $replace, $noti);
        $alta=$_POST['alta'];
        $baja=$_POST['baja'];
        $prio=$_POST['prioridad'];
        $id=$_SESSION['id'];
        $idnoticia=$_SESSION['idnoticia'];

        //$id=$_POST['id'];

        //print $noti;
        //print $alta;
        //print $prio;
        //print $_SESSION['id'];
        //print $_SESSION['idnoticia'];
        try
        {

            $sentencia="update Noticias set titulo=?,noticia=?,fechaAlta=?,fechaFin=?,prioridad=? where idNoticia=?";

            $filas=fnexec(fnconnect("(local)","Noticias"),$sentencia,array($titu,$xx,$alta,$baja,$prio,$idnoticia));

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