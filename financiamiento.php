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
    <title>Financiamiento de Compra - Concesionaria Ford</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        h1 {
            color: #003399;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
        input, select, textarea {
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 15px;
            margin-top: 20px;
            background-color: #003399;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #002266;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        @media (min-width: 768px) {
            .form-group {
                flex-direction: row;
                align-items: center;
            }
            .form-group label {
                flex: 1;
                margin-top: 0;
                margin-right: 20px;
                text-align: right;
            }
            .form-group input,
            .form-group select,
            .form-group textarea {
                flex: 2;
            }
        }
        .btn-regresar {
            background-color: #888;
            margin-top: 10px;
        }
        .btn-regresar:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Financiamiento de Compra</h1>
        <p>Complete el formulario a continuación para solicitar financiamiento para su compra de un vehículo Ford.</p>
        <form action="confirmacion.html" method="POST">
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Número de Teléfono:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="vehicle">Vehículo de Interés:</label>
                <select id="vehicle" name="vehicle" required>
                    <option value="">Seleccione un vehículo</option>
                    <option value="ford-mustang">Ford Mustang</option>
                    <option value="ford-f150">Ford F-150</option>
                    <option value="ford-explorer">Ford Explorer</option>
                    <option value="ford-escape">Ford Escape</option>
                </select>
            </div>
            <div class="form-group">
                <label for="income">Ingresos Mensuales:</label>
                <input type="number" id="income" name="income" required>
            </div>
            <div class="form-group">
                <label for="loan-amount">Monto del Préstamo Solicitado:</label>
                <input type="number" id="loan-amount" name="loan-amount" required>
            </div>
            <div class="form-group">
                <label for="comments">Comentarios Adicionales:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>
            <button type="submit">Enviar Solicitud</button> 
        </form>
        <button class="btn-regresar" onclick="history.back()">Regresar</button>
    </div>
</body>
</html>
