<?php
    include_once('conexion.php');
    $conexion=new ConexionDB();
    
        switch($_REQUEST['opcautos'])
        {
            case 'R':
                $conexion->registrarAuto(
                $_REQUEST['nserie'], 
                $_REQUEST['marca'],
                $_REQUEST['color'],
                $_REQUEST['km'],
                $_REQUEST['modelo'],
                $_REQUEST['precio'],
                $_REQUEST['transmision']);
            break;
            
            case 'A':
                $conexion->actualizarAuto(
                    $_REQUEST['nserie'], 
                    $_REQUEST['marca'],
                    $_REQUEST['color'],
                    $_REQUEST['km'],
                    $_REQUEST['modelo'],
                    $_REQUEST['precio'],
                    $_REQUEST['transmision']);
            break;

            case 'E':
                $conexion->eliminarAuto(
                $_REQUEST['nserie']);
            break;

            case 'C':
                $GLOBALS['registros']=$conexion->consultarAuto($_REQUEST['nserie']);
                include_once('consultaAuto.php');
            break;
        }
?>