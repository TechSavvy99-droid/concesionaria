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
    <title>Accesorios Ford</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el contenido ocupe al menos toda la altura de la pantalla */
        }
        header {
            background-color: #003399;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            flex: 1; /* Hace que la sección de productos ocupe el espacio restante */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .product {
            background: white;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            width: 300px;
            text-align: center;
        }
        .product:hover {
            transform: scale(1.05);
        }
        .product img {
            max-width: 100%;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .product h3 {
            color: #003399;
        }
        .product p {
            font-size: 14px;
            line-height: 1.5;
        }
        .product .price {
            font-size: 18px;
            color: #b12704;
            font-weight: bold;
        }
        .product .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background: #003399;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.2s;
        }
        .product .btn:hover {
            background: #0056cc;
        }
        footer {
            background-color: #003399;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            flex-shrink: 0; /* Evita que el footer se encoja */
        }
        .btn-regresar {
            background-color: #003399;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: background-color 0.2s;
        }
        .btn-regresar:hover {
            background-color: #0056cc;
        }
    </style>
</head>
<body>
    <header>
        <h1>Accesorios Ford</h1>
    </header>
    <button class="btn-regresar" onclick="history.back()">Regresar</button>
    <div class="container">
        <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Accesorio 1">
            <h3>TAPETE</h3>
            <p>tapetes anti derrame  .</p>
            <p class="price">$500.00</p>
            <a href="#" class="btn">Comprar Ahora</a>
        </div>
        <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Accesorio 2">
            <h3>RIN</h3>
            <p>rines de aluminio reforsado.</p>
            <p class="price">$3000.00</p>
            <a href="#" class="btn">Comprar Ahora</a>
        </div>
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkywm22WN8PPvYbBdeqyn_rqb9h9SVrkDprg&s" alt="Accesorio 3">
            <h3>NEBLINERO</h3>
            <p>neblineros amarillos.</p>
            <p class="price">$550-.00</p>
            <a href="#" class="btn">Comprar Ahora</a>
        </div>
    </div>
    <footer>
        <p>Concesionaria Ford © 2024</p>
    </footer>
</body>
</html>
