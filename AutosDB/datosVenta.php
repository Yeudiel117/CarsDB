<?php
include_once('conexion.php');
$conexion=new ConexionDB();

    if($_REQUEST['rfc'] && $_REQUEST['nserie'] != null){
        $GLOBALS['registros1']=$conexion->consultaCliente($_REQUEST['rfc']);
        $GLOBALS['registros2']=$conexion->consultarAuto($_REQUEST['nserie']);
        include_once('muestraVenta.php');
    }else{
        echo "<script>alert('INGRESE LOS DATOS SOLICITADOS PARA REALIZAR LA VENTA');</script>";
    }
?>