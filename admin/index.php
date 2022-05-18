<?php

session_start();
if($_SESSION['rol'] != "Admin"){
    header("location: ../user ");
}
include("../conexion.php");
//$Variable-$sql              //Tabla SQL - usuarios
$sql = "SELECT * FROM usuarios";  
//Variable sql se utilizara en $resulado abajo
$sql2 = "SELECT * FROM pedidos";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="../img/Logo.svg">
	<style>
		.eliminaricon:before{
    content: url(css/e.png);
}
.acticon:before{
    content: url(css/a.png);
}
	</style>
    <title>Admins</title>

</head>
<body>

<!--      -->

	<div class="header">
		<h2>Credenciales - Pagina De Administracion</h2>
	</div>
	<div class="content">
		<!-- Notificacion -->
			<div class="error success" >
				<h3>
					<p>Llaveros Confirmados</p>
				</h3>
			</div>

<!-- Informacion de Administrador  -->
<div class="profile_info">
	<img src="../images/admin_profile.png"  >

	<div>
				<?php  if (isset($_SESSION['usuario'])) : ?>
					<strong><?php echo $_SESSION['nombre']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ($_SESSION['rol']);?>) (<?php echo ($_SESSION['usuario']);?>)</i> 
						<br>
						<a href="../login.php?logout='1'" style="color: red;">->Salir</a>
						&nbsp; <a href="registrarAdmin.php"> + Agregar Usuarios</a>
					</small>

				<?php endif ?>
			</div>
		</div> 
				</div>
				<!-- Informacion de Administrador  -->

	<br>
	<hr>
	<br>

<div class="colorwhite"><!-- Todo el index letras color blanco -->

		<!--   Tabla de Usuarios   -->
	<div class="center" class="header">
		<h2 class="cent">Tabla de Usuarios</h2>
	</div>
	<br>
<table class="tabla">
		<tr>
		<th>Id</th>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Telefono</th>
<!--    <th>Password (Encriptada)</th> -->
		<th>Rol</th>
		<th class="txtBlue">Actualizar</th>
		<th class="txtRojo">Eliminar</th>
		</tr>
		                          
        <!--La variable $conexion viene de conexion.php y-->
		<?php $resultado = mysqli_query($conexion, $sql);	
		//Funcion para que muestre todas las filas que hay en SQL
		while($row = mysqli_fetch_assoc($resultado)) { //--------Abrir Corchetes
		?>
		                          
		<tr>
		    <td><?php echo $row["id_u"] ?></td>
			<td><?php echo $row["usuario"] ?></td>
			<td><?php echo $row["nombre"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["telefono"] ?></td>
	<!--    <td><?php // echo $row["passw"] ?></td>   -->
			<td><?php echo $row["rol"] ?></td>
			<td><a class="acticon" href="actualizar.php?id=<?php echo $row["id_u"] ?>"></a></td>
			<td><a class="eliminaricon" href="eliminar.php?id=<?php echo $row["id_u"] ?>"></a></td>
		</tr>
		<?php } //------Cerrar Corchetes
mysqli_free_result($resultado);
//Liberar Variable por si la utilizamos en otro archivo
?>
	</table>
		<!--  Tabla de Usuarios -->


	<br>

	<br>


		<!--   Tabla de pedidos   -->
	<div class="center" class="header">
		<h2 class="cent">Tabla Pedidos</h2>
	</div>
	<br>
<table class="tabla">
		<tr>
		<th>Id Usuario</th>
		<th>Id Producto</th>
		<th>Tipo de Servicio</th>
		<th>Vehiculo</th>
		<th>Fecha y Hora</th>
		<th>Telefono (Confirmacion)</th>
		<th>Mensaje</th>
		<th class="txtRojo">Eliminar</th>
		</tr>

        <!--La variable $conexion viene de conexion.php y-->
		<?php $resultado = mysqli_query($conexion, $sql2);	
		//Funcion para que muestre todas las filas que hay en SQL
		while($row = mysqli_fetch_assoc($resultado)) { //--------Abrir Corchetes
		?>
		                          
		<tr>
		    <td><?php echo $row["usuario_id"] ?></td>
		    <td><?php echo $row["id_p"] ?></td>
			<td><?php echo $row["tipo_ser"] ?></td>
			<td><?php echo $row["car"] ?></td>
			<td><?php echo $row["fecha"] ?></td>
			<td><?php echo $row["c_tel"] ?></td>
			<td><?php echo $row["men"] ?></td>
			<td><a class="eliminaricon" href="eliminar_pe.php?id=<?php echo $row["id_p"] ?>"></a></td>
		</tr>
		<?php } //------Cerrar Corchetes
mysqli_free_result($resultado);
//Liberar Variable por si la utilizamos en otro archivo
?>

	</table>
		<!--   Tabla de pedidos   -->

<br>
<br>
<br>
		</div>
</body>
</html>