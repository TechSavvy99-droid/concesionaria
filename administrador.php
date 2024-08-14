<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Concesionaria Ford</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="admin-container">
        <header>
            <h1>Panel de Administración - Concesionaria Ford</h1>
            <nav>
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#vehicles">Gestión de Vehículos</a></li>
                    <li><a href="#users">Gestión de Usuarios</a></li>
                    <li><a href="#media">Gestión de Medios</a></li>
                    <li><a href="#site-settings">Configuraciones del Sitio</a></li>
                    <li><a href="#ecommerce">Comercio Electrónico</a></li>
                    <li><a href="#comments">Comentarios y Reseñas</a></li>
                    <li><a href="#analytics">Análisis y Reportes</a></li>
                    <li><a href="#security">Seguridad</a></li>
                    <li><a href="#support">Soporte y Mantenimiento</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section id="dashboard">
                <h2>Dashboard</h2>
                <div class="dashboard-stats">
                    <div class="stat">Visitas al sitio: 12345</div>
                    <div class="stat">Consultas de vehículos: 678</div>
                    <div class="stat">Solicitudes de prueba de manejo: 45</div>
                    <div class="stat">Ventas realizadas: 12</div>
                </div>
                <div class="quick-access">
                    <button>Añadir nuevo vehículo</button>
                    <button>Ver solicitudes de prueba de manejo</button>
                    <button>Ver estadísticas de ventas</button>
                </div>
            </section>

            <section id="vehicles">
                <h2>Gestión de Vehículos</h2>
                <button>Añadir nuevo vehículo</button>
                <table>
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Filas de vehículos se agregarían aquí -->
                    </tbody>
                </table>
            </section>

            <section id="users">
                <h2>Gestión de Usuarios</h2>
                <button>Crear nuevo usuario</button>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Filas de usuarios se agregarían aquí -->
                    </tbody>
                </table>
            </section>

            <section id="media">
                <h2>Gestión de Medios</h2>
                <button>Subir archivos</button>
                <div class="media-gallery">
                    <!-- Archivos multimedia se agregarían aquí -->
                </div>
            </section>

            <section id="site-settings">
                <h2>Configuraciones del Sitio</h2>
                <form>
                    <label for="site-name">Nombre de la concesionaria:</label>
                    <input type="text" id="site-name" name="site-name">

                    <label for="site-description">Descripción:</label>
                    <textarea id="site-description" name="site-description"></textarea>

                    <label for="contact-email">Correo electrónico de contacto:</label>
                    <input type="email" id="contact-email" name="contact-email">

                    <button type="submit">Guardar cambios</button>
                </form>
            </section>

            <section id="ecommerce">
                <h2>Comercio Electrónico</h2>
                <div class="ecommerce-section">
                    <button>Gestionar productos</button>
                    <button>Gestionar pedidos</button>
                    <button>Configurar métodos de pago y envío</button>
                </div>
            </section>

            <section id="comments">
                <h2>Comentarios y Reseñas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Comentario</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Filas de comentarios se agregarían aquí -->
                    </tbody>
                </table>
            </section>

            <section id="analytics">
                <h2>Análisis y Reportes</h2>
                <div class="analytics-reports">
                    <button>Generar reporte de ventas</button>
                    <button>Generar reporte de visitas</button>
                </div>
            </section>

            <section id="security">
                <h2>Seguridad</h2>
                <div class="security-options">
                    <button>Gestionar copias de seguridad</button>
                    <button>Escanear en busca de malware</button>
                    <button>Configurar accesos y contraseñas</button>
                </div>
            </section>

            <section id="support">
                <h2>Soporte y Mantenimiento</h2>
                <div class="support-options">
                    <button>Acceder a documentación</button>
                    <button>Solicitar soporte técnico</button>
                    <button>Realizar actualizaciones</button>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Concesionaria Ford. Todos los derechos reservados.</p>
        </footer>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .admin-container {
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #004080;
            color: #fff;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            color: #004080;
            border-bottom: 2px solid #004080;
            padding-bottom: 10px;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-around;
        }

        .dashboard-stats .stat {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            flex: 1;
            margin: 5px;
        }

        .quick-access {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        button {
            background-color: #004080;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #003366;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            background-color: #004080;
            color: #fff;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #004080;
            color: #fff;
        }
    </style>
</body>
</html>
