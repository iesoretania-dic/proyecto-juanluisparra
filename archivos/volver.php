<?php
session_start();
if(isset($_POST['volver'])){
    echo'<script>window.location="elegir.php";</script>';
}


?>