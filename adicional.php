<?php
// Parámetros de conexión
$host = 'localhost';
$db   = 'concesionario_ford';
$user = 'root';
$pass = '';

// Crear una conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

echo "Conexión exitosa";

// Cerrar la conexión (opcional, ya que PHP lo hace automáticamente al final del script)
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Financiamiento - Concesionaria Ford</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            padding: 20px;
        }
        h1 {
            color: #003399;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        .info-section {
            text-align: left;
            margin-top: 30px;
        }
        .info-section a {
            color: #003399;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Opciones de Financiamiento</h1>
        <div class="info-section">
            <p>Descubre nuestras opciones de financiamiento para adquirir tu vehículo Ford:</p>
            <ul>
                <li><a href="#">Tasas de Interés</a></li>
                <li><a href="#">Terminos y Condiciones</a></li>
                <li><a href="#">Calculadora de Pagos</a></li>
            </ul>
        </div>
        <p><a href="index.html">&larr; Volver a la página principal</a></p>
    </div>
</body>
</html>