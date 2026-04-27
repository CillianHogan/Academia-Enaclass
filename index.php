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

    <main>
        <section class ="portada-bienvenida">
            <div class="contenedor contenido-portada">
                <h2>Academia Enaclass Online</h2>
                <p>Tu plataforma para gestionar clases, materiales y recibos sin complicaciones</p>
                <a href="login.php" class="boton-entrar">ENTRAR A MI PANEL</a>
            </div>
        </section>

        <section class="servicios-academia">
            <div class="contenedor rejilla-servicios">
                <article class="tarjeta-servicio">
                    <h4>Asistencias</h4>
                    <p>Controla tu presencia en clase día a día</p>
                </article>
                <article class="tarjeta-servicio">
                    <h4>Facturación</h4>
                    <p>Tus recibos siempre disponibles y organizados</p>
                </article>
                <article class="tarjeta-servicio">
                    <h4>Dudas online</h4>
                    <p>Contacta con tus profesores cuando lo necesites</p>
                </article>
            </div>
        </section>

        <section class="barra-estadisticas">
            <div class="contenedor caja-datos">
                <div class="estadistica-item">
                    <span class="cifra">+100</span>
                    <p>Alumnos</p>
                </div>
                <div class="estadistica-item">
                    <span class="cifra">+5</span>
                    <p>Años</p>
                </div>
                <div class="estadistica-item">
                    <span class="cifra">100%</span>
                    <p>Resultados</p>
                </div>
            </div>
        </section>

        <section id="contacto" class="seccion-contacto">
            <div>
                <div class="info-contacto">
                    <h3>¿Dónde estamos?</h3>
                    <ul class="datos-lista">
                        <li>C. Isla de el Hierro 8, Valsequillo</li>
                        <li>+34 600 00 00 00</li>
                        <li>info@enaclass.com</li>
                    </ul>
                </div>
                <div class="botones-contacto">
                    <a href="mailto:info@enaclass.com" class="boton-blanco">Enviar Email</a>
                    <a href="tel:+34600000000" class="boton-llamada">Llamar ahora</a>
                </div>
                <div mapa-marco>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d880.7664066750513!2d-15.497188499999968!3d27.991888500000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc40974add61f355%3A0x1ed0d13f5fac8407!2sCentro%20de%20estudios%20Enaclas!5e0!3m2!1ses!2ses!4v1777294621680!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
</body>
</html>