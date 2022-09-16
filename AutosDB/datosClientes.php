<?php
    include_once('conexion.php');
    $conexion=new ConexionDB();
    
        switch($_REQUEST['opccliente'])
        {
            case 'R':
                $conexion->altaCliente(
                    $_REQUEST['rfc'],
                    $_REQUEST['nombre'],
                    $_REQUEST['domicilio']);
            break;

            case 'C':
                $GLOBALS['registros']=$conexion->consultaCliente($_REQUEST['rfc']);
                include_once('consultaCliente.php');
            break;
        }
?>