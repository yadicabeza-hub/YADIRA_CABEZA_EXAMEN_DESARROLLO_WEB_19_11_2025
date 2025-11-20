<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Registrados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Datos Registrados</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Contraseña</th>
        </tr>
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $correo; ?></td>
            <td><?php echo $contrasena; ?></td>
        </tr>
    </table>
</body>
</html>
