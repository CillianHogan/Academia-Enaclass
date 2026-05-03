<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enaclass | Registro de Usuarios</title>
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

    <main class="contenedor-panel">
        
        <section class="bienvenida-usuario">
            <h2>Altas de Usuarios</h2>
            <p>Registra nuevos estudiantes y vincula a sus familiares al sistema.</p>
            <div class="rayita-naranja"></div>
        </section>

        <section class="caja-herramienta borde-violeta ancho-completo">
            <h3>Dar de Alta Nuevo Alumno</h3>
            <form action="#" method="POST" class="formulario-admin">
                <div class="fila-input">
                    <label>Nombre completo</label>
                    <input type="text" name="nombre_alumno" required placeholder="Nombre del alumno aquí" class="input-diseño">
                </div>

                <div class="fila-input">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo_alumno" required placeholder="Ej: alumno@enaclass.com" class="input-diseño">
                </div>

                <div class="fila-input">
                    <label>Contraseña temporal</label>
                    <input type="password" name="clave_alumno" required placeholder="Enaclass2026" class="input-diseño">
                </div>
                
                <button type="submit" class="boton-accion-lila">REGISTRAR ALUMNO</button>
            </form>
        </section>

        <section class="caja-herramienta borde-violeta ancho-completo" style="margin-top: 30px;">
            <h3>Dar de Alta a Padre / Tutor</h3>
            <form action="#" method="POST" class="formulario-admin">
                <div class="fila-input">
                    <label>Nombre del Tutor</label>
                    <input type="text" name="nombre_tutor" required class="input-diseño" placeholder="Nombre completo del tutor">
                </div>
                
                <div class="fila-input">
                    <label>Vincular con Alumno</label>
                    <select name="id_hijo" class="input-diseño">
                        <option value="">Selecciona un alumno...</option>
                        <option value="1">Carlos Sánchez</option>
                        <option value="2">David Sola</option>
                    </select>
                </div>

                <div class="fila-input">
                    <label>Correo electrónico del tutor</label>
                    <input type="email" name="correo_tutor" required placeholder="ejemplo@correo.com" class="input-diseño">
                </div>

                <div class="fila-input">
                    <label>Contraseña temporal para el tutor</label>
                    <input type="password" name="clave_tutor" required placeholder="EnaclassPadres2026" class="input-diseño">
                </div>
                
                <button type="submit" class="boton-accion-lila">VINCULAR Y REGISTRAR TUTOR</button>
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