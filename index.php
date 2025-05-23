<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Expedientes - Tribunal del Servicio Civil</title>
    <link rel="stylesheet" href="styles.css">
    <style link="main.css"></style>
</head>
<body>

    <header>
        <h1>Consulta de Expedientes</h1>
    </header>

    <main>
        <section class="search-box">
            <h2>Buscar Expediente</h2>
            <form>
                <label for="expediente">Número de Expediente:</label>
                <input type="text" id="expediente" placeholder="Ingrese el número">
                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="results">
            <h2>Detalle del Expediente</h2>
            <table>
                <tr>
                    <th>Número</th>
                    <th>Estado</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <td>2025-00123</td>
                    <td>En proceso</td>
                    <td>15/03/2025</td>
                    <td><button>Ver Detalle</button></td>
                </tr>
                <tr>
                    <td>2025-00124</td>
                    <td>Finalizado</td>
                    <td>10/02/2025</td>
                    <td><button>Ver Detalle</button></td>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>© 2025 Tribunal del Servicio Civil | SERVIR Perú</p>
    </footer>

</body>
</html>
