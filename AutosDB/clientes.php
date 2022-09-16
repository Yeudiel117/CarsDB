<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Clientes</title>
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

    <div class="centrarTitulo">
        <h1>REGISTRAR CLIENTES</h1>
    </div>
    
    <form  action="datosClientes.php" method="post">
        <div class="divtablas">
            <table>
                <tr>
                    <td>
                        <label for="rfc">RFC</label>
                    </td>
                    <td>
                        <input name="rfc" type="text" class="" id="rfc" placeholder="RFC">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre">NOMBRE</label>
                    </td>
                    <td>
                        <input name="nombre" type="text" class="" id="nombre" placeholder="Nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="domicilio">Domicilio</label>
                    </td>
                    <td>
                        <input name="domicilio" type="text" class="" id="domicilio" placeholder="Domicilio">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="opccliente">Accion</label>
                    </td>
                    <td>
                        <select name="opccliente" id="">
                            <option value="">Seleccione una opcion</option>
                            <option value="R">Registrar</option>
                            <option value="C">Consultar</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="divboton">
            <button type="submit">EJECUTAR</button>
        </div>
    </form>
</body>
</html>