<?php
include("../conexion.php");
session_start();
if(empty($_SESSION['active'])){
    header('location: ../login.php');
}
$id_user = $_SESSION['id_u'];
$sql3 = "SELECT * FROM pedidos WHERE usuario_id = '$id_user'"; 
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/TPOO_CSS.css">
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

            <a href="index.php" class="item-options">  <?php echo $_SESSION['usuario']; ?></a>

            <a href="../login.php?logout='1'" class="item-options" style="color: red;">--> Salir</a>
          <!--  <a href="" class="item-options"></a> -->
           <!-- <a href="" class="item-options"></a>  -->

        </nav>
    </header>
 


        
            <br>
        </section>

        <section class="content" id="Ticket">
    <section class="main-container">

    <a>Gracias por elegirnos <?php echo $_SESSION['nombre']; ?></a>
    <br>
    <a>Tu Ticket:</a>
    <div class="header">
        
		<h2>Ticket del Servicio</h2>
	</div>
    <form method="" action="">
    <div class="input-group">
    <?php $resultado = mysqli_query($conexion, $sql3);	
		//Funcion para que muestre todas las filas que hay en SQL
//--------Abrir Corchetes
$row = mysqli_fetch_assoc($resultado);
		?>	  
    <input type="hidden" name="us_id" value="<?php echo $_SESSION['id_u']; ?>">

    <label><i>Numero de orden: </i><?php echo $row["id_p"] ?></label>
    <hr>

    <label><i>Pedido realizado por:</i> <?php echo $_SESSION['nombre']; ?><br> Usuario: (<?php echo $_SESSION['usuario']; ?>)</label>
    <hr>
    
    <label><p><i>Tipo de servicio: </i><?php echo $row["tipo_ser"] ?></p></label>
    <label style="font-size: 70%; color: red; text-align: center;"> 1 Completo <br> 2 Basico  <br> 3 Sencillo</label>
    <hr>

    <label><i>Tipo de Vehiculo: </i><?php echo $row["car"] ?></label>
    <hr>

    <label><i>Fecha: </i><?php echo $row["fecha"] ?></label>
    <hr>

    <label><i>Telefono de contacto: </i><?php echo $_SESSION['telefono']; ?></label>
    <hr>

    <label><i>Mensajes/Comentarios:</i></label>
    <label><?php echo $row["men"] ?></label>
    <hr>
    <?php  //------Cerrar Corchetes
    mysqli_free_result($resultado);
    //Liberar Variable por si la utilizamos en otro archivo
    ?>

    <p style="font-size: 70%; color: red;" class="alert"> Cualquier cambio se lo avisaremos por: <?php echo $_SESSION['email']; ?> </p>
    <br>
    <a class="btn" href="javascript:ImprimirSeleccion('Ticket')">Imprimir</a>
    </div>

<p>
    Dudas? <a href="contacto.php">Aqui</a>
</p>
</form>
</section>
</section>
<br><br>
<section class="products">
            <h1>Nuestro Objetivo</h1>
            <p>El lavado de un auto es una actividad de la vida diaria que muchas personas no tienen tiempo de realizar por si mismos, este proyecto en conjunto con el CARWASH CIOMAR, espera lograr crear un ambiente en el que el cliente se sienta seguro de su salud e integridad, y proveer un servicio mas administrado para que el cliente no solo se sienta seguro sino tambien satisfecho, crear un ambiente seguro, tener un cliente satisfecho y dar un buen servicio es lo que conforma este CARWASH CIOMAR</p>
            <h2><center>¡Que la contingencia no te impida mantener un auto limpio!</center></h3>
            
</section>
<br>
    <footer>
        <!--Sin CSS AUN-->
        Ubicado en la Colonia De la Garza Melo, Calle Lic. Trinidad De la Garza Melo, en Monterrey, Nuevo León, México.
    </footer>
</body>
<script language="Javascript">
	function ImprimirSeleccion(Ticket) {
	  var ficha = document.getElementById(Ticket);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
	</script>
</html>
