<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 8px;
            text-align: left;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de registro usuario</h1>
        <form>
            <table>
                <tr>
                    <td><label for="nombre">Nombre</label></td>
                    <td><input type="text" id="nombre" name="nombre" value=""></td>
                </tr>
                <tr>
                    <td><label for="apellido">Apellido</label></td>
                    <td><input type="text" id="apellido" name="apellido" value=""></td>
                </tr>
                <tr>
                    <td><label for="telefono">Teléfono</label></td>
                    <td><input type="text" id="telefono" name="telefono" value=""></td>
                </tr>
                <tr>
                    <td><label for="edad">Edad</label></td>
                    <td><input type="text" id="edad" name="edad" value=""></td>
                </tr>
            </table>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
