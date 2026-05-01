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

    <main class="zona-administracion">

        <div class="cabecera-gestion">
            <h2>Panel de Gestión Docente</h2>
            <p>Control total sobre el alumnado, contenido académico y administración financiera.</p>
            <div class="rayita-naranja"></div>
        </div>

        <div class="rejilla-admin">
            <section class="caja-herramienta borde-violeta ancho-completo">
                <h3>Dar de Alta Nuevo Alumno</h3>
                    <form action="#" method="POST" class="formulario-admin">
                        <div class="fila-input">
                            <label>Nombre completo</label>
                            <input type="text" name="nombre" required placeholder="Nombre del alumno aquí" class="input-diseño">
                        </div>

                        <div class="fila-input">
                            <label>Correo electrónico</label>
                            <input type="email" name="correo" required placeholder="Ej: alumno@enaclass.com" class="input-diseño">
                        </div>

                        <div class="fila-input">
                            <label>Contraseña temporal</label>
                            <input type="password" name="clave" required placeholder="Enaclass 2026" class="input-diseño">
                        </div>
                        <button type="submit" class="boton-accion-lila">REGISTRAR ALUMNO</button>
                    </form>
            </section>

            <section class="caja-herramienta borde-violeta ancho-completo">
                <h3>Dar de Alta a Padre</h3>
                    <form action="#" method="POST" class="formulario-admin">
                        <div class="fila-input">
                            <label>Nombre del Tutor</label>
                            <input type="text" name="nombre" required class="input-diseño">
                        </div>
                        <div class="fila-input">
                            <label>Vincular con Alumno</label>
                            <select name="id_hijo" class="input-diseño">
                                <option value="">Selecciona un alumno...</option>
                            </select>
                        </div>
                        <button type"submit" class="boton-accion-lila">VINCULAR TUTOR</button>
                    </form>
            </section>

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