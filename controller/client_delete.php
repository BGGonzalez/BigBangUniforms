<?php

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$connector->query("DELETE from client_bbu WHERE id=$id");
    if ($sql==1) {
        echo '<div class="alert alert-danger">Datos del Cliente Eliminados de la Base de Datos</div>';
    } else {
        echo '<div class="alert alert-warning">ERROR: No se Eliminaron los Datos</div>';
    }
}

?>