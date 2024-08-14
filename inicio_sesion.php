<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Concesionaria Ford</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Entrar como administrador</h1>
        <form id="loginForm">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Ingresar</button>
        </form>
        <div id="error-message" class="error-message"></div>
        <button class="btn-regresar" onclick="history.back()">Regresar</button>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #004080;
        }

        form label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #004080;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #003366;
        }

        .btn-regresar {
            background-color: #888;
            margin-top: 10px;
        }

        .btn-regresar:hover {
            background-color: #666;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Datos de ejemplo para validación
            const validUsername = 'admin';
            const validPassword = 'tamales123';

            if (username === validUsername && password === validPassword) {
                window.location.href = 'administrador.php';
            } else {
                document.getElementById('error-message').innerText = 'Usuario o contraseña incorrectos';
            }
        });
    </script>
</body>
</html>
