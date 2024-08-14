<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Cita</title>
    <style>
        /* Estilos de la ventana emergente */
        #ventanaEmergente {
            display: block;
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
    <div id="ventanaEmergente">
        <h2>¡Cita Agendada!</h2>
        <p>Se ha agendado la cita para:</p>
        <ul>
            <li><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></li>
            <li><strong>Correo electrónico:</strong> <?php echo $_POST['email']; ?></li>
            <li><strong>Teléfono:</strong> <?php echo $_POST['telefono']; ?></li>
            <li><strong>Fecha de la cita:</strong> <?php echo $_POST['fecha']; ?></li>
            <li><strong>Mensaje:</strong> <?php echo $_POST['mensaje']; ?></li>
        </ul>
        <button onclick="cerrarVentanaEmergente()">Cerrar</button>
    </div>

    <script>
        function cerrarVentanaEmergente() {
            document.getElementById("ventanaEmergente").style.display = "none";
        }
    </script>
</body>
</html>
