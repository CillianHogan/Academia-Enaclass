<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enaclass | Pasar Lista</title>
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

    <main class="contenedor-panel pagina-asistencia">
        
        <section class="bienvenida-usuario">
            <h2>Control de Asistencia</h2>
            <p>Selecciona la fecha y marca la asistencia de tus alumnos.</p>
            <div class="rayita-naranja"></div>
        </section>

        <section class="caja-herramienta borde-violeta ancho-completo">
            <h3>Pasar Lista</h3>
            
            <form action="#" method="POST" class="formulario-admin">
                <div class="fila-input selector-fecha">
                    <label>Fecha de la clase:</label>
                    <input type="date" name="fecha" class="input-diseño" value="2026-05-04">
                </div>

                <div class="tabla-scroll">
                    <table class="tabla-gestion">
                        <thead>
                            <tr>
                                <th>Alumno</th>
                                <th>Estado de Asistencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Pérez González</td>
                                <td>
                                    <select name="asistencia[1]" class="input-diseño">
                                        <option value="presente">Presente</option>
                                        <option value="falta">Falta</option>
                                        <option value="justificado">Justificado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>María García López</td>
                                <td>
                                    <select name="asistencia[2]" class="input-diseño">
                                        <option value="presente">Presente</option>
                                        <option value="falta" selected>Falta</option>
                                        <option value="justificado">Justificado</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button type="submit" class="boton-accion-lila">Guardar Asistencia</button>
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