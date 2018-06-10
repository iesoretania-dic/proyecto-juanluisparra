<?php
session_start();
if(isset($_POST['cerrar_sesion'])){
    session_destroy();
    echo'<script>window.location="index.php";</script>';
}


?>