<?php
include_once("../../configuracion.php");

$datos=data_submitted();
$objMenu=new AbmMenu();
$menuDeshabilitado=$objMenu->deshabilitar($datos);
if($menuDeshabilitado){
    echo json_encode(array('success'=>1));
}else{
    echo json_encode(array('success'=>0));
}
?>