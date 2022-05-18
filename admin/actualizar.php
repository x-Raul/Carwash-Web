<?php
include("../conexion.php");
$id = $_GET["id"];//id es la id del codigo siempre es asi..
//$Variable-$sql              //Tabla SQL - usuarios
//id de SQL = id codigo php de index
$sql = "SELECT * FROM usuarios WHERE id_u ='$id'";  
//Variable sql se utilizara en $resulado abajo
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
        <!--La variable $conexion viene de conexion.php y-->
		<?php $resultado = mysqli_query($conexion, $sql);	
		//Funcion para que muestre el usuario seleccionado
		while($row = mysqli_fetch_assoc($resultado)) { 
			//--------Abrir Corchetes
		?>
<div class="header">
		<h2>Actualizar ID #<?php echo $row['id_u']?></h2>
	</div>

<form method="post" action="proc_act.php">

    <input type="hidden" name="id" value="<?php echo $row['id_u']?>">

    <div class="input-group">
    
    <label>Usuario</label>
    <input type="text" name="usuario" value="<?php echo $row['usuario']?>">
    
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']?>">
    
    <label>Telefono</label>
    <input type="number" name="telefono" value="<?php echo $row['telefono']?>">
    
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email']?>">
    
    <label>Contraseña</label>
    <input type="password" name="passw" value="<?php echo $row['passw']?>">
    
    <label>Tipo de Usuario</label>
			<select name="rol" id="user_type" >
                <option value="User">Usuario</option>
				<option value="Admin">Administrador</option>
			</select>
            </div>
    
    <button type="submit" class="btn">Actualizar</button>
<p>
    No era este? <a href="index.php">Atras</a>
</p>
<?php } //------Cerrar Corchetes
mysqli_free_result($resultado);
//Liberar Variable por si la utilizamos en otro archivo
?>

<form>

</body>
</html>