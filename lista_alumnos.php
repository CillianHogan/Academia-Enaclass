<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enaclass | Listado de Alumnos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="cuerpo-web">

    <header class="encabezado-inicio">
        <div class="contenedor">
            <a href="index.php">
                <h1 class="logo-academia">Enaclass</h1>
            </a>
            <nav class="menu-derecha">
                <button id="boton-oscuro" class="boton-modo-oscuro">Modo oscuro</button>
                <a href="panel_profesor.php">Inicio</a>
                <a href="gestion_alumnos.php">Gestión Alumnos</a>
                <a href="logout.php" class="boton-logout">Desconectar</a>
            </nav>
        </div>
    </header>

    <main class="contenedor-panel pagina-listado">
        
        <section class="bienvenida-usuario">
            <h2>Alumnos Registrados</h2>
            <p>Visualiza y gestiona la base de datos de tus estudiantes matriculados.</p>
            <div class="rayita-naranja"></div>
        </section>

        <!-- Tarjeta del listado -->
        <section class="caja-herramienta borde-azul ancho-completo">
            <h3>Base de Datos de Alumnado</h3>
            
            <div class="tabla-scroll">
                <table class="tabla-gestion">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de fila -->
                        <tr>
                            <td>Juan Pérez González</td>
                            <td>juan.perez@enaclass.com</td>
                            <td><span class="tag-estado">Activo</span></td>
                            <td><a href="#" class="enlace-baja">Dar de Baja</a></td>
                        </tr>
                        <!-- Ejemplo de fila 2 -->
                        <tr>
                            <td>María García López</td>
                            <td>m.garcia@enaclass.com</td>
                            <td><span class="tag-estado">Activo</span></td>
                            <td><a href="#" class="enlace-baja">Dar de Baja</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <footer class="pie-pagina">
        <div class="contenedor">
            <p>Academia Enaclass - Valsequillo, Gran Canaria</p>
            <div class="rayita-naranja"></div>
            <p class="copyright">© 2026 Todos los derechos reservados</p>
        </div>
    </footer>

</body>
</html>