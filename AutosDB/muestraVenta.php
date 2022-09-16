<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta Realizada</title>
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
                <a href="">Ventas</a>
            </nav>
        </div>
    </header>
    <div class="centrarTitulo">
        <h1>FACTURA VENTA</h1>
    </div>

    <div class="consultasVentas">
    <table border="1">
          <?php  $regIndividual1=$GLOBALS['registros1']->fetch_assoc()   ?>
            <tr>
                <th>RFC</th>
                <th>NOMBRE</th>
                <th>DOMICILIO</th>
            </tr>
            <tr>
                <td><?php echo $regIndividual1['rfc']; ?></td>
                <td><?php echo $regIndividual1['nombre']; ?></td>
                <td><?php echo $regIndividual1['domicilio']; ?></td>
            </tr>
             <?php   ?> 

             <?php  $regIndividual2=$GLOBALS['registros2']->fetch_assoc()  ?>

             <tr>
                 <th>NUMERO DE SERIE</th>
                 <th>MARCA</th>
                 <th>MODELO</th>
            </tr>
            <tr>
                <td><?php echo $regIndividual2['nserie']; ?></td>
                <td><?php echo $regIndividual2['marca']; ?></td>
                <td><?php echo $regIndividual2['modelo']; ?></td>
            </tr>
            <tr>
                <th colspan="3">PRECIO</th>
            </tr>
            <tr>
                <td colspan="2"><label for="">SUBTOTAL</label></td>
                <td><?php echo $regIndividual2['precio']; ?></td>
            </tr>
            <tr>
                <td colspan="2"><label for="">IVA 16%</label></td>
                <td><?php 
                $sub=$regIndividual2['precio'];
                $iva=$sub * 16 / 100;
                //$iva=round($iva, 0); 
                echo $iva;
                ?></td>
            </tr>
            <tr>
                <th colspan="2"><label for="">TOTAL</label></th>
                <td><?php 
                $sub=$regIndividual2['precio'];
                $iva=$sub * 16 / 100;
                //$iva=round($iva, 0); 
                echo $sub+$iva;
                ?></td>
            </tr>
            <?php   ?> 
    </table>
    </div>
</body>
</html>