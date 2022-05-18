<?php
include("../conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="../img/Logo.svg">
    <title>Registrarse</title>
</head>
<body>

<div class="header">
		<h2>Agregar Usuario</h2>
	</div>

<form method="post" action="insertarAdmin.php">
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
    <div class="input-group">
    <div class="input-group">
    <label>Tipo de Usuario</label>
			<select name="rol" id="user_type" >
                <option value="User">Usuario</option>
				<option value="Admin">Administrador</option>
			</select>
    </div>
    <div class="input-group">
    <button type="submit" class="btn" name="register_btn">Agregar Nuevo Usuario</button>
    </div>
<p>
    No quieres agragar un nuevo usuario? <a href="index.php">Cancelar</a>
</p>
</form>
<br>
    
</body>
</html>