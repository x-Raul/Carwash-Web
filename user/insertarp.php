<?php
include("../conexion.php");

$u_id = $_POST["us_id"];
$tipo = $_POST["tipox"];
$car = $_POST["carx"];
$fecha = $_POST["fechax"];
$tel = $_POST["telx"];
$mensaje = $_POST["menx"];


//Ver que realmente esta haciendo el codigo-----
//var_dump($_POST);

$actualizar2 = "INSERT INTO pedidos(usuario_id,tipo_ser,car,fecha,c_tel,men) VALUES ('$u_id', '$tipo','$car', '$fecha', '$tel', '$mensaje')";


$idUser = mysqli_insert_id($conexion);

$resultado2 = mysqli_query($conexion, $actualizar2);

if($resultado2){
    echo "<script> alert('Haz solicitado el servicio');
    window.location='ty.php'</script>"; 
    
}else{
   echo "<script>alert('Error #42 Al solicitar cita....'); window.history.go(1); </script>"; 
}