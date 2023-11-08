<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shanti&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="css/img/logo_SMART.png" type="image/x-icon">
    <title>SMART | Ingresar</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-usuario">
                    <h3>Ingresa como usuario</h3>
                    <p>Inicia sesion o registrate como usuario</p>
                    <button id="btn__iniciar-usuario">Usuario</button>
                </div>
                <div class="caja__trasera-ayudante">
                    <h3>Ingresa como ayudante</h3>
                    <p>Inicia sesion o registrate como ayudante</p>
                    <button id="btn__iniciar-ayudante">Ayudante</button>
                </div>
            </div>
            <div class="contenedor__usuario-ayudante">
                <form action="php/registro_be.php" method="POST"  class="formulario__usuario">
                    <h2>Usuario</h2>
                    <input id="reg__usuario" type="text" name="nombre_usuario" placeholder="Nombre completo">
                    <input id="reg__usuario" type="number" name="edad_usuario" placeholder="Edad">
                    <input type="email" name="correo__usuario" placeholder="Correo">
                    <input type="password" name="contrasena__usuario" placeholder="Contraseña">
                    <input id="reg__usuario" type="password" name="verificar-contraseña__usuario" placeholder="Verifique su contraseña">
                    <button id="iniciar__sesion-usuario" class="boton">Iniciar Sesion</button>
                    <button id="reg__usuario" class="boton">Registrarme</button>                
                    <h3 id="imp__text" class="texto__usuario">No tienes una cuenta aún?</h3>
                    <button type="button" id="log-reg__usuario" class="log-reg__bt">Registrate <i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <form class="formulario__ayudante">
                    <h2>Ayudante</h2>
                    <input id="reg__ayudante" type="text" name="name__ayudante" placeholder="Nombre completo">
                    <input id="reg__ayudante" type="date" class="place__holder">
                    <input type="email" name="email__ayudante" placeholder="Correo">
                    <input type="password" name="contraseña__ayudante" placeholder="Contraseña">
                    <input id="reg__ayudante" type="password" name="verificar-contraseña__ayudante" placeholder="Verifique su contraseña">
                    <div class="cnt__botones">
                        <button id="iniciar__sesion-ayudante"  class="boton">Iniciar Sesion</button>
                        <button id="reg__ayudante" class="boton">Registrarme</button>
                    </div>
                    <h3 id="imp__text" class="texto__ayudante">Quieres convertirte en ayudante?</h3>
                    <button type="button" id="log-reg__ayudante" class="log-reg__bt">Enviar Solicitud <i class="fa-solid fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/851977426b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>