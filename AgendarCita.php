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
    <title>Agendar Cita</title>
    <style>
        /* Estilos del formulario */
        .formulario {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .formulario h1 {
            text-align: center;
        }
        .formulario label {
            display: block;
            margin-bottom: 5px;
        }
        .formulario input[type="text"],
        .formulario input[type="email"],
        .formulario input[type="tel"],
        .formulario input[type="date"],
        .formulario textarea {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .formulario input[type="submit"],
        .formulario .btn-regresar {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #5444e6;
            color: #fff;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .formulario input[type="submit"]:hover,
        .formulario .btn-regresar:hover {
            background-color: #0056b3;
        }

        /* Estilos de la ventana emergente */
        #ventanaEmergente {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border: 2px solid #6c0a0a;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
        #ventanaEmergente h2 {
            margin-top: 0;
        }
        #ventanaEmergente p {
            margin-bottom: 0;
        }
        #ventanaEmergente button {
            background-color: #6c0a0a;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <h1>Agendar Cita</h1>
        <form id="formularioCita" action="procesar_cita.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            
            <label for="fecha">Fecha de la cita:</label>
            <input type="date" id="fecha" name="fecha" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" cols="50"></textarea>
            
            <input type="submit" value="Agendar Cita">
        </form>
        <button class="btn-regresar" onclick="history.back()">Regresar</button>
    </div>

    <!-- Ventana emergente -->
    <div id="ventanaEmergente">
        <h2>¡Cita Agendada!</h2>
        <p>Se ha agendado tu cita.</p>
        <button onclick="cerrarVentanaEmergente()">Cerrar</button>
    </div>

    <script>
        document.getElementById("formularioCita").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que el formulario se envíe

            // Aquí puedes agregar la lógica para enviar los datos del formulario al servidor si lo necesitas

            // Muestra la ventana de confirmación
            document.getElementById("ventanaEmergente").style.display = "block";
        });

        function cerrarVentanaEmergente() {
            document.getElementById("ventanaEmergente").style.display = "none";
        }
    </script>
</body>
</html>
