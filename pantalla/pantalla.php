<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link rel="stylesheet" href="mio.css" />

    <title>Noticias</title>
</head>

<body>
<div id="cabecera">
    <form name="form_reloj">
        <input id="re" type="text" name="reloj" size="10" />
    </form>
</div>
<div id="titulo"></div>
<div id="contenedor"> </div>
<?php

require("sqlserver.inc");

$sentencia="select top 10 *,(select tiempo from Tiempo where prioridad= Noticias.prioridad )as mitiempo from Noticias where getdate() BETWEEN fechaAlta and fechaFin order by prioridad desc";

try
{
    $dr=fnquery(fnconnect("(local)","Noticias"),$sentencia);
    $array=array();
    $array2=array();
    $array3=array();


    foreach ($dr as $movimiento)
    {
        //print $movimiento['titulo'];
        //print $movimiento['mitiempo'];
        $array[]=$movimiento['titulo'];
        $array2[]=$movimiento['noticia'];
        $array3[]=$movimiento['mitiempo'];


    }

}
catch (Exception $e)
{
    print $e->getMessage();
}
?>

<script>
    window.onload = function () {
        mueveReloj();
        inicio();
        setInterval('location.reload()',60000);
    }
    var cont = 0;
    ti =JSON.parse('<?php echo JSON_encode($array)?>');
    arr =new Array(<?php echo JSON_encode($array2)?>);
    arr2 =JSON.parse('<?php echo JSON_encode($array3)?>');

    function inicio() {
        cambia();
    }

    function cambia() {

        var d = document.getElementById("contenedor");
        var titulo = document.getElementById("titulo");

        cont = cont % ti.length;
        if(ti[cont]==undefined){
            ti[cont]="No hay noticias que mostrar"
            arr[cont]="";
        }
        titulo.innerHTML = "<div class='titulo-encima'><h1 class='titulotexto'>" + ti[cont] + "</h1></div>";
        d.innerHTML = "<div class='texto-encima'>" + "" + arr[0][cont] + "" + "</div>";
        var x = arr2[cont];
        cont++;
        lla(x);
    }

    function lla(x) {
        setTimeout(cambia, x);
    }
    //para el reloj
    function mueveReloj(){
        momentoActual = new Date()
        hora = momentoActual.getHours()
        minuto = momentoActual.getMinutes()
        segundo = momentoActual.getSeconds()

        str_segundo = new String (segundo)
        if (str_segundo.length == 1)
            segundo = "0" + segundo

        str_minuto = new String (minuto)
        if (str_minuto.length == 1)
            minuto = "0" + minuto

        str_hora = new String (hora)
        if (str_hora.length == 1)
            hora = "0" + hora

        horaImprimible = hora + " : " + minuto + " : " + segundo

        document.form_reloj.reloj.value = horaImprimible

        setTimeout("mueveReloj()",1000)
    }

</script>
</body>
</html>