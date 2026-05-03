<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Enaclass | Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="cuerpo-web">
    <header class ="encabezado-inicio">
        <div class="contenedor">
            <a href="index.php">
                <h1 class="logo-academia">Enaclass</h1>
            </a>
            <nav class="menu-derecha">
                <button id="boton-oscuro" class="boton-modo-oscuro">Modo oscuro</button>
                <a href="index.php">Inicio</a>
                <a href="servicios.php">Servicios</a>
                <a href="#contacto" class="boton-contacto">Contacto</a>
            </nav>
        </div>
    </header>

    <main class="contenedor-panel">
        
        <section class="bienvenida-usuario">
            <h2>Bienvenido, nombre del profesor con php</h2>
            <p>¿Qué gestión necesitas realizar hoy?</p>
            <div class="rayita-naranja"></div>
        </section>

        <div class="rejilla-opciones">

        <a href="#" class="caja-opcion color-asignaturas">
            <div class="contenido-caja">
                <h3>Gestión de Alumnos</h3>
                <p>Dar de alta a alumnos, tutores y ver el listado actual.</p>
            </div>
        </a>

        <a href="#" class="caja-opcion color-asistencia">
            <div class="contenido-caja">
                <h3>Pasar Lista</h3>
                <p>Registrar la asistencia diaria de tus grupos.</p>
            </div>
        </a>

        <a href="#" class="caja-opcion color-notas">
            <div class="contenido-caja">
                <h3>Material Didáctico</h3>
                <p>Sube apuntes y recursos para tus alumnos.</p>
            </div>
        </a>

        <a href="#" class="caja-opcion color-tests">
            <div class="contenido-caja">
                <h3>Generador de Tests</h3>
                <p>Crea exámenes evaluativos para tus alumnos.</p>
            </div>
        </a>

        <a href="#" class="caja-opcion color-facturas">
            <div class="contenido-caja">
                <h3>Facturación</h3>
                <p>Genera recibos y facturas para que los alumnos las descarguen.</p>
            </div>
        </a>

        <a href="#" class="caja-opcion color-foro">
            <div class="contenido-caja">
                <h3>Foro de Dudas</h3>
                <p>Revisa y responde las consultas de tus estudiantes.</p>
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