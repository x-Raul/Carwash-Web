<?php 

include "conexion.php";
$alert ='';
if(!empty($_POST)){
    if(empty($_POST['usuario']) || empty($_POST['passw'])){
        $alert = 'Ingrese su usuario y contraseña';
    }else{
        require_once "conexion.php";
        $usuario = $_POST['usuario'];
        $passw = $_POST['passw'];
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND passw = '$passw'");
        $resultado=mysqli_num_rows($query);
        if($resultado > 0){
            $data = mysqli_fetch_array($query);
            session_start();
            $_SESSION['active'] = true;
            $_SESSION['id_u'] = $data['id'];
            $_SESSION['usuario'] = $data['usuario'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['telefono'] = $data['telefono'];
            $_SESSION['rol'] = $data['rol'];
    
            header('location: admin/');
        }else{
            $alert = 'El usuario o la clave son incorrectos';
            session_destroy();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
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
        <p class="alert"><?php echo isset($alert) ? $alert :'';  ?></p>
		<p>
			Not yet a member? <a href="registrar.php">Sign up</a>
		</p>
	</form>


</body>
</html>