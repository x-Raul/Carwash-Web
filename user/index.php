<?php
include("../conexion.php");
session_start();
if(empty($_SESSION['active'])){
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarWash Online CIOMAR</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/TPOO_CSS.css">
    <link rel="icon" href="img/Logo.svg">
</head>
<body>
    <div class="banner">
        <h1>¡Que la contingencia no te impida mantener un auto limpio!</h1>
        <a class="derecha">Atte. CarWash Ciomar</a>
    </div>

    <header class="container">
        <figure class="logo">
            <img src="img/Logo.svg" alt="Logo">
        </figure>
        <nav>

            <a href="" class="item-options">Bienvendio,   <?php echo $_SESSION['usuario']; ?></a>

            <a href="../login.php?logout='1'" class="item-options" style="color: red;">--> Salir</a>
          <!--  <a href="" class="item-options"></a> -->
           <!-- <a href="" class="item-options"></a>  -->

        </nav>
    </header>
 


    <br>
    <h1><center><b><i>Servicios</i><b></center></h1>
        <br>
    <header>
    <section class="products">
        <!-- Fila De Servicios -->
        <div id="tablas">

            <div class="cuadro">
             <div class="name-header">
             <h3>Sencillo</h3>
             <p>Desde $100</p>
             </div>
            
            <div class="detalles">
             <p>Incluye</p>
             <p>1. Lavado Exterior</p>
             <p>2. Abrillantado de llantas</p>
             </div>
            
             </div>
            
            <div class="cuadro">
             <div class="name-header">
             <h3>Basico</h3>
             <p>Desde $200</p>
             </div>
            
            <div class="detalles">
             <p>Incluye</p>
             <p>1. Lavado Interior</p>
             <p>2. Lavado Exterior</p>
             <p>3. Abrillantado de llantas</p>
             </div>
            
    
             </div>
            
            <div class="cuadro">
             <div class="name-header">
             <h3>Completo</h3>
             <p>Desde $300</p>
             </div>
            
            <div class="detalles">
             <p>Incluye</p>
             <p>1. Encerado completo</p>
             <p>2. Lavado Interior</p>
             <p>3. Lavado Exterior</p>
             <p>4. Abrillantado de llantas</p>
             </div>
            
             </div>

            </div>

            <!-- Fila De Servicios -->
            <br>
        </section>
        <section class="content">
    <section class="main-container">
    <a>Buenos Dias <?php echo $_SESSION['nombre']; ?> Solicite su servicio de lavado aqui</a>
    <div class="header">
		<h2>Solicitar Servicio</h2>
	</div>
    <form method="post" action="insertarp.php">
<!-- name="" va en $POST_["AQUIIIII"] en el archivo insertar.php-->
    <div class="input-group">
    <input readonly type="id" name="us_id" value="<?php echo $_SESSION['id_u']; ?>">
    </div>
    <div class="input-group">
    <label>Tipo de servicio</label>
			<select name="tipox" id="user_type" >
                <option value="1">Completo</option>
                <option value="2">Basico</option>
				<option value="3">Sencillo</option>
			</select>
    </div>
    <div class="input-group">
    <label>Tipo de Vehiculo</label>
			<select name="carx" id="user_type" >
				<option value="Berlina/sedan">Berlina o sedan</option>
				<option value="Cupé">Cupé</option>
				<option value="Descapotable">Descapotable</option>
				<option value="Roadster">Roadster</option>
				<option value="Todoterreno">Todoterreno</option>
				<option value="SUV">SUV</option>
				<option value="Sin/Clasificar">S/C</option>
			</select>
    </div>
	<div class="input-group">
    <label>Fecha del servicio</label>
    <input type="datetime-local" name="fechax" id="myDatetimeField">
    </div>
    <div class="input-group">
    <label>Confirmar Telefono</label>
    <input type="number" name="telx">
    </div>
    <p style="font-size: 70%; color: red;" class="alert"> Su telefono debe ser el mismo que uso para ingresar: <?php echo $_SESSION['telefono']; ?> </p>
    <div class="input-group">
    <label>Mensajes/Comentarios (Opcional)</label>
    <input type="text" name="menx" placeholder="Podria desde las 5:00 PM">
    </div>
    <input type="hidden" name="u_idx">
    </div>
    <div class="input-group">
    <button type="submit" class="btn" name="btn" href="actualizar.php?id=<?php echo $row["usuario_id"] ?>">>Solicitar</button>
    </div>
<p>
    Dudas? <a href="contacto.php">Aqui</a>
</p>
</form>
<br><br>
       
            <h1>Nuestro Objetivo</h1>
            <p>El lavado de un auto es una actividad de la vida diaria que muchas personas no tienen tiempo de realizar por si mismos, este proyecto en conjunto con el CARWASH CIOMAR, espera lograr crear un ambiente en el que el cliente se sienta seguro de su salud e integridad, y proveer un servicio mas administrado para que el cliente no solo se sienta seguro sino tambien satisfecho, crear un ambiente seguro, tener un cliente satisfecho y dar un buen servicio es lo que conforma este CARWASH CIOMAR</p>
            <h2><center>¡Que la contingencia no te impida mantener un auto limpio!</center></h3>
            

    </section>
    </section>
    <footer>
        <!--Sin CSS AUN-->
        Ubicado en la Colonia De la Garza Melo, Calle Lic. Trinidad De la Garza Melo, en Monterrey, Nuevo León, México.
    </footer>
</body>
<script>
window.addEventListener("load", function() {
    var now = new Date();
    var offset = now.getTimezoneOffset() * 60000;
    var adjustedDate = new Date(now.getTime() - offset);
    var formattedDate = adjustedDate.toISOString().substring(0,16); // For minute precision
    var datetimeField = document.getElementById("myDatetimeField");
    datetimeField.value = formattedDate;
});
</script>
</html>