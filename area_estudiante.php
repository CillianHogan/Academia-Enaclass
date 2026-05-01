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
            <h2>Buenas, nombre de alumno con php</h2>
            <p>Ponte al día de tu perfil académico:</p>
            <div class="rayita-naranja"></div>
        </section>

        <div class="rejilla-opciones">

            <a href="#" class="caja-opcion color-asignaturas">
                <div class="contenido-caja">
                    <h3>Mis Asignaturas</h3>
                    <p>Apuntes y los tests de clase.</p>
                </div>
            </a>

            <a href="#" class="caja-opcion color-notas">
                <div class="contenido-caja">
                    <h3>Mis Notas</h3>
                    <p>Haz clic aquí para ver las notas que has sacado.</p>
                </div>
            </a>

            <a href="#" class="caja-opcion color-asistencia">
                <div class="contenido-caja">
                    <h3>Asistencia</h3>
                    <p>Consulta tu historial de presencia y faltas.</p>
                </div>
            </a>

            <a href="#" class="caja-opcion color-facturas">
                <div class="contenido-caja">
                    <h3>Mis Facturas</h3>
                    <p>Historial de pagos y descarga de facturas.</p>
                </div>
            </a>

            <a href="#" class="caja-opcion color-foro ancho-total">
                <div class="contenido-caja">
                    <h3>Foro de Dudas</h3>
                    <p>Pregunta lo que quieras a los profesores.</p>
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