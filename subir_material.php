<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enaclass | Subir Material</title>
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
                <a href="logout.php" class="boton-logout">Desconectar</a>
            </nav>
        </div>
    </header>

    <main class="contenedor-panel pagina-material">
        
        <section class="bienvenida-usuario">
            <h2>Gestión de Contenido</h2>
            <p>Sube archivos didácticos y compártelos con tus alumnos de forma directa.</p>
            <div class="rayita-naranja"></div>
        </section>

        <section class="caja-herramienta borde-azul ancho-completo">
            <h3>Subir Material Didáctico</h3>
            <form action="#" method="POST" enctype="multipart/form-data" class="formulario-admin">
                
                <div class="fila-input">
                    <label>Título del archivo</label>
                    <input type="text" class="input-diseño" placeholder="Ej: Tema 1 - Verbo To Be" required>
                </div>

                <div class="fila-input">
                    <label>Elige a los destinatarios:</label>
                    <div class="selector-multi-alumnos">
                        <label class="opcion-alumno">
                            <input type="checkbox" name="alumnos_destino[]" value="1"> 
                            <span>Carlos Sánchez</span>
                        </label>
                        <label class="opcion-alumno">
                            <input type="checkbox" name="alumnos_destino[]" value="2"> 
                            <span>David Sola</span>
                        </label>
                        <label class="opcion-alumno">
                            <input type="checkbox" name="alumnos_destino[]" value="3"> 
                            <span>David Jiménez</span>
                        </label>
                        <label class="opcion-alumno">
                            <input type="checkbox" name="alumnos_destino[]" value="4"> 
                            <span>Carmelo Navarro</span>
                        </label>
                    </div>
                    <small class="ayuda-formulario">Los alumnos seleccionados recibirán una notificación.</small>
                </div>

                <div class="fila-input">
                    <label>Seleccionar archivo (PDF, Word, Imagen...)</label>
                    <input type="file" class="input-diseño">
                </div>

                <button type="submit" class="boton-accion-lila">Publicar Material</button>
            </form>
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