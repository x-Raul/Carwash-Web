<?php
include("../conexion.php");

$id = $_POST["id"];
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$password = $_POST["passw"];
$rol = $_POST["rol"];

//Actualizar consulta

	$actualizar = "UPDATE usuarios SET usuario='$usuario',nombre='$nombre', telefono='$telefono', email='$email', passw='$password', rol='$rol' WHERE id_u='$id'";

 //var_dump($_POST);

    $resultado = mysqli_query($conexion, $actualizar);
    
    if($resultado){
    echo "<script> alert('Se ha ACTUALIZADO correctamente');
    window.location='index.php'</script>"; 
    }
    else{
   echo "<script>alert('Error NO se pudo ACTUALIZAR los datos'); window.history.go(-1);  </script>"; 
    }

    ?>