<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
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
        <h1>VENTAS</h1>
    </div>

    <form action="datosVenta.php">
        <div class="divtablas" >
            <table>
                <tr>
                    <td>
                        <label for="rfc">RFC del cliente</label>
                    </td>
                    <td>
                        <input name="rfc" type="text" class="" id="rfc" placeholder="RFC">
                    </td>
                </tr>
                <tr>
                    <label for="nserie">No. serie del auto</label>
                </tr>
                <tr>
                    <input name="nserie" type="text" class="" id="nserie" placeholder="numero de serie">
                </tr>
            </table>
        </div>

        <div class="divboton">
            <button type="submit">Imprimir</button>
        </div>
    </form>
</body>
</html>