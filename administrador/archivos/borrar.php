<?php
session_start();
require("sqlserver.inc");

$v1 = $_GET['variable1'];
$comandos=array("delete from Noticias where idNoticia='$v1'");


$ok = fnexecTran(fnconnect("(local)","Noticias"),$comandos);

echo'<script>window.location="formulario_borrar.php";</script>';




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