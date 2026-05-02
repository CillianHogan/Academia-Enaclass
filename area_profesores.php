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
                        <button type="submit" class="boton-accion-lila">VINCULAR TUTOR</button>
                    </form>
            </section>

            <section class="caja-herramienta borde-azul ancho-completo">
                <h3>Alumnos Registrados</h3>
                <div class="tabla-scroll">
                    <table class="tabla-gestion">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre de ejemplo</td>
                                <td>ejemplo@enaclass.com</td>
                                <td><a href="#" class="enlace-baja">Baja</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="caja-herramienta borde-violeta">
                <h3>Pasar Lista</h3>
                <form action="#" method="POST">
                    <div class="fila-input">
                        <label>Fecha:</label>
                        <input type="date" nombre="fecha" class="input-diseño">
                    </div>
                    <table class="tabla-gestion">
                        <thead><tr><th>Alumno</th><th>Estado</th></tr></thead>
                        <tbody>
                            <tr>
                                <td>Alumno de prueba</td>
                                <td><select class="input-diseño"><option>Presente</option><option>Falta</option></select></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="boton-accion-lila">Guardar Asistencia</button>
                </form>
            </section>

            <section class="caja-herramienta borde azul">
                <h3>Subir Material Didáctico</h3>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="fila-input">
                        <label>Título del archivo</label>
                        <input type="text" class="input-diseño" placeholder="Ej: Tema 1 - Verbo To Be">
                    </div>

                    <div class="fila-input">
                        <label>Elige a que alumnos enviar el material:</label>
                            <div class="selector-multi-almunos">
                                <label class="opcion-alumno">
                                    <input type="checkbox" name="alumnos_destino[]" value="1"> Carlos Sánchez
                                </label>
                                <label class="opcion-alumno">
                                    <input type="checkbox" name="alumnos_destino[]" value="2"> David Sola
                                </label>
                                <label class="opcion-alumno">
                                    <input type="checkbox" name="alumnos_destino[]" value="3"> David Jiménez
                                </label>
                                <label class="opcion-alumno">
                                    <input type="checkbox" name="alumnos_destino[]" value="4"> Carmelo Navarro
                                </label>
                            </div>
                        <small class="ayuda-formulario">Marca los alumnos que recibirán el archivo.</small>
                    </div>

                    <div class="fila-input">
                        <label>Seleccionar archivo</label>
                        <input type="file" class="input-diseño">
                    </div>
                    <button type="submit" class="boton-accion-lila">Publicar Material</button>
                </form>
            </section>

            <section class="caja-herramienta borde-azul ancho-completo">
                <h3>Foro: Responder Consultas</h3>
                <div class="tabla-scroll">
                    <table class="tabla-gestion">
                        <thead>
                            <tr>
                                <th>Alumno y Pregunta</th>
                                <th>Tu respuesta</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Paco Díaz</strong>
                                    <p>¿Hay clase el lunes?</p>
                                </td>
                                <td>
                                    <input type="text" placeholder="Escribe tu respuesta..." class="input-diseño">
                                </td>
                                <td>
                                    <button type="submit" class="boton-responder">Enviar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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