<?php
include_once("../../configuracion.php");

$datos = data_submitted();
$objProducto = new AbmProducto();

    if ($objProducto->baja($datos)) {
        echo json_encode(array('success'=>1));
    } else {
        echo json_encode(array('success'=>0));
    }
?>