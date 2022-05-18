<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion - CarWash Online CIOMAR</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/TPOO_CSS.css">
    <link rel="icon" href="img/Logo.svg">
</head>
<body>

    <header class="container">
        <figure class="logo">
            <img href="index.html" src="img/Logo.svg" alt="Logo">
        </figure>
        <nav>
            <a href="index.php" class="item-options">Inicio</a>
            <a href="login.php" class="item-options">Iniciar Sesion</a>
            <a href="contacto.php" class="item-options">Contacto</a>
        </nav>
    </header>

    <section class="main-container">
    <div class="header">
		<h2>Register</h2>
	</div>

<form method="post" action="insertar.php">
<!-- name="" va en $POST_["AQUIIIII"] en el archivo insertar.php-->
    <div class="input-group">
    <label>Usuario</label>
    <input type="text" name="usuario">
    </div>
    <div class="input-group">
    <label>Nombre</label>
    <input type="text" name="nombre">
    </div>
    <div class="input-group">
    <label>Telefono</label>
    <input type="number" name="telefono">
    </div>
    <div class="input-group">
    <label>Email</label>
    <input type="email" name="email">
    </div>
    <div class="input-group">
    <label>Contraseña</label>
    <input type="password" name="passw">
    </div>
    <input type="hidden" name="rol">
    <div class="input-group">
    <button type="submit" class="btn" name="register_btn">Registrarse</button>
    </div>
<p>
    Ya eres miembro? <a href="login.php">Iniciar Sesion</a>
</p>
</form>
</selection>
<br><br>
<section class="content">
    <section class="main-container">
            <h1>¿De que me sirve registrarme?</h1>
            <p>¡Al registrarte con nosotros obtienes un 10% de descuento en el primer lavado de coche de cualquier tipo! Encima nos ayuda a mantener un registro para poder administrar los tiempos y horas para que tu no tengas que preocuparte por tu seguridad al realizar una actividad comun de la vida diaria tal como lo es lavar tu coche</p>
            <h1>¿De que me sirve iniciar sesion?</h1>
            <p>¡Iniciar sesion esta lleno de ventajas!, el tener una cuenta e iniciar sesion te permite escoger la hora de tu preferencia (dentro del horario del CARWASH CIOMAR) te permite escoger tu metodo de pago ya sea en linea o en efectivo, y te brinda un ticket al haber realizado tu cita para el lavado de tu automovil</p>
</section>

</body>
</html>

  