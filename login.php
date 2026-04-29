<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Enaclass | Servicios</title>
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
                <a href="index.php#contacto" class="boton-contacto">Contacto</a>
            </nav>
        </div>
    </header>

    <main class="pagina-login">
        
        <div class="caja-entrada">
            <div class="cabecera-login">
                <h2>¡Bienvenido de nuevo!</h2>
                <p>Elige tu perfil y entra en tu área privada.</p>
            </div>

            <form action="loguear.php" method="POST" class="formulario-acceso">
                <div class="campo-grupo">
                    <label>Tipo de usuario</label>
                    <select name="rol" class="entrada-estilo">
                        <option value="alumno">Soy Alumno</option>
                        <option value="profesor">Soy Profesor</option>
                        <option value="tutor">Soy Padre / Tutor</option>
                    </select>
                </div>

                <div class="campo-grupo">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required placeholder="tu-nombre@email.com" class="entrada-estilo">
                </div>

                <div class="campo-grupo">
                    <label>Contraseña</label>
                    <input type="password" name="clave" required placeholder="••••••••" class="entrada-estilo">
                </div>

                <button type="submit" class="boton-entrar-login">
                    ENTRAR AL PANEL
                </button>
            </form>

            <div class="ayuda-login">
                <p>¿Problemas con el acceso? <a href="index.php#contacto">Soporte técnico</a></p>
            </div>
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