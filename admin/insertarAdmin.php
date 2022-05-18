<?php
include("../conexion.php");

$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$password = $_POST["passw"];
$rol = $_POST["rol"];

//Ver que realmente esta haciendo el codigo-----
//var_dump($_POST);

$insertar = "INSERT INTO usuarios(usuario,nombre,telefono,email,passw,rol) VALUES ('$usuario','$nombre','$telefono', '$email', '$password', '$rol')";


$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script> alert('Se ha registrado el usuario con exito');
    window.location='index.php'</script>"; 
    
}else{
   echo "<script>alert('Error #1 .................. No se pudo registrar'); window.history.go(-1); </script>"; 
}