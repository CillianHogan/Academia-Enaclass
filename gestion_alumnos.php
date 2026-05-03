<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enaclass | Gestión de Alumnos</title>
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
                <a href="#" class="boton-logout">Desconectar</a>
            </nav>
        </div>
    </header>

    <main class="contenedor-panel">
        
        <section class="bienvenida-usuario">
            <h2>Gestión de Alumnado</h2>
            <p>Selecciona una tarea para administrar la base de datos de estudiantes.</p>
            <div class="rayita-naranja"></div>
        </section>

        <div class="rejilla-opciones">

            <a href="#" class="caja-opcion color-admin-alumnos">
                <div class="contenido-caja">
                    <h3>Altas de Usuarios</h3>
                    <p>Formularios para registrar nuevos alumnos y vincular a sus padres o tutores.</p>
                </div>
            </a>

            <a href="#" class="caja-opcion color-admin-alumnos">
                <div class="contenido-caja">
                    <h3>Listado de Alumnos</h3>
                    <p>Consulta la información detallada, correos y gestión de bajas del alumnado.</p>
                </div>
            </a>

        </div>
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