<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Autos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
        <div class="navegador">
            <img src="" alt="">
            <nav>
                <a href="index.php">Pagina Principal</a>
                <a href="clientes.php">Registrar Cliente</a>
                <a href="autos.php">Autos</a>
                <a href="venta.php">Ventas</a>
            </nav>
        </div>
    </header>

    <h1 class="centrarTitulo">CONSULTA DE CLIENTES</h1>

    <div class="consultasClientes">
        <table class="tablasconsulta">
            <tr>
                <td>ID</td>
                <td>RFC</td>
                <td>NOMBRE</td>
                <td>DOMICILIO</td>
            </tr>
            <?php  while($regIndividual=$GLOBALS['registros']->fetch_assoc())  {  ?>
                <tr>
                    <td><?php echo $regIndividual['id']; ?></td>
                    <td><?php echo $regIndividual['rfc']; ?></td>
                    <td><?php echo $regIndividual['nombre']; ?></td>
                    <td><?php echo $regIndividual['domicilio']; ?></td>
                    <!--<td><a href="?variableIdSeleccionada= <?php //echo $regIndividual['idauto'];?>">
                    <button>Eliminar</button></a></td>-->
                </tr>
                <?php   }?> 
        </table>
    </div>
</body>
</html>