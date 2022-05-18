<?php 

include "conexion.php";
$alert ='';
if(!empty($_POST)){
    if(empty($_POST['usuario']) || empty($_POST['passw'])){
        $alert = 'Ingrese su usuario y contraseña';
    }else{
        require_once "conexion.php";
        $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
        $passw = mysqli_real_escape_string($conexion, $_POST['passw']);
       // $rol = mysqli_real_escape_string($conexion, $_POST['rol']);

        //echo $usuario ; exit;
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND passw = '$passw'");
        $resultado=mysqli_num_rows($query);
        if($resultado > 0){
            $data = mysqli_fetch_array($query);
            session_start();
            $_SESSION['active'] = true;

            $_SESSION['usuario'] = $data['usuario'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['telefono'] = $data['telefono'];
            $_SESSION['rol'] = $data['rol'];
            $_SESSION['id_u'] = $data['id_u'];
    
            header('location: admin/');
        }else{
            $alert = 'El usuario o la clave son incorrectos';
          //  session_destroy();
        }
    }
}
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
            <a href="registrar.php" class="item-options">Registrarse</a>
            <a href="contacto.php" class="item-options">Contacto</a>
        </nav>
    </header>
    <section class="content">
    <h2 style="text-align: center;">Ingresa tu cuenta</h2>
    <section class="main-container">
	<div class="header">
		<h2>Iniciar Sesion</h2>
	</div>
	
	<form method="post" action="">
  
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="usuario" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="passw">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
        </div>
        <p></p>
        <p style="font-size: 70%; color: red;" class="alert"><?php echo isset($alert) ? $alert :'';  ?></p>
		<p>
            <br>
			No eres miembro aun? <a href="registrar.php">Crear Cuenta</a>
		</p>
    </form>
    <br><br>
        </div>

            <h1>¿De que me sirve registrarme?</h1>
            <p>¡Al registrarte con nosotros obtienes un 10% de descuento en el primer lavado de coche de cualquier tipo! Encima nos ayuda a mantener un registro para poder administrar los tiempos y horas para que tu no tengas que preocuparte por tu seguridad al realizar una actividad comun de la vida diaria tal como lo es lavar tu coche</p>
            <br>
            <h1>¿De que me sirve iniciar sesion?</h1>
            <p>¡Iniciar sesion esta lleno de ventajas!, el tener una cuenta e iniciar sesion te permite escoger la hora de tu preferencia (dentro del horario del CARWASH CIOMAR) te permite escoger tu metodo de pago ya sea en linea o en efectivo, y te brinda un ticket al haber realizado tu cita para el lavado de tu automovil</p>
</section>
    </section>
</body>
</html>