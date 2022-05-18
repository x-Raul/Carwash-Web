<?php
include("conexion.php");
session_start();
if(empty($_SESSION['active'])){
    header('location: ');
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
   
 
            <!-- Fila De Servicios -->
            <br>
   
        <section class="content">
    <section class="main-container">
    <a>Buenos Dias  Solicite su servicio de lavado aqui</a>
    <div class="header">
		<h2>Solicitar Servicio</h2>
	</div>

<form method="post" action="user/insertarp.php">
<!-- name="" va en $POST_["AQUIIIII"] en el archivo insertar.php-->
    <div class="input-group">

    <label>Serv</label>
    <input type="number" name="tipox">

    <label>Car</label>
    <input type="text" name="carx">

    <label>Fecha</label>
    <input type="date" name="fechax">

    <label>Tel</label>
    <input type="number" name="telx">

 
    <label>Mensaje</label>
    <input type="text" name="menx">

    <button type="submit" class="btn" name="register2_btn">Registrarse</button>
    </div>
<p>
    Already a member? <a href="login.php">Sign in</a>
</p>
</form>

       
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
</html>