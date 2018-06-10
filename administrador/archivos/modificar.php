<?php
session_start();
require("sqlserver.inc");

$pri=$_POST['prioridad'];
$ti=$_POST['tiempo'];
try
{
    $sentencia="update Tiempo set tiempo=? where prioridad=?";
    $filas=fnexec(fnconnect("(local)","Noticias"),$sentencia,array($ti,$pri));

    echo'<script>window.location="elegir.php";</script>';
}
catch (Exception $e)
{
    print $e->getMessage();
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