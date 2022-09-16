<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automoviles</title>
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
        <h1>AUTOS</h1>
    </div>
    <form action="datosAutos.php">
        <div class="divtablas">
            <table>
                <tr>
                    <td>
                        <label for="nserie">Numero de serie</label>
                    </td>
                    <td>
                        <input name="nserie" type="text" class="" id="nserie" placeholder="00000000000">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="marca">Marca</label>
                    </td>
                    <td>
                        <input name="marca" type="text" class="" id="marca" placeholder="Volkswagen">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="color">Color</label>
                    </td>
                    <td>
                        <input name="color" type="text" class="" id="color" placeholder="Plata">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="km">Kilometraje</label>
                    </td>
                    <td>
                        <input name="km" type="text" class="" id="km" placeholder="000000">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="modelo">Modelo</label>
                    </td>
                    <td>
                        <input name="modelo" type="text" class="" id="modelo" placeholder="Bora">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="precio">Precio sin IVA</label>
                    </td>
                    <td>
                    $<input name="precio" type="number" class="" id="precio" placeholder="000000">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="transmision">Transmision</label>
                    </td>
                    <td>
                        <label>Manual</label><input id="transmision" name="transmision" type="radio" value="manual">
                        <label>Automatica</label><input id="transmision" name="transmision" type="radio" value="automatica">
                    </td>
                </tr>
                <td>
                    <label for="opcauto">Accion</label>
                </td>
                <td>
                    <select name="opcautos" id="">
                        <option value="">Seleccione una opcion</option>
                        <option value="R">Registrar</option>
                        <option value="E">Eliminar</option>
                        <option value="A">Actualizar</option>
                        <option value="C">Consultar</option>
                    </select>
                </td>
            </table>
        </div>
    
        <div class="divboton">
            <button type="submit" class="">EJECUTAR</button>
        </div>
    </form>
</body>
</html>