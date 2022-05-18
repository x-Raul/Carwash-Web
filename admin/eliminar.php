<?php
include("../conexion.php");

$id = $_GET["id"];

$eliminar = "DELETE FROM usuarios WHERE id_u = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);
    
    if($resultadoEliminar){
    header("location: index.php");
    }
    else{
    echo "<script>alert('Error No se pudo registrar'); window.history.go(-1); 
    </script>"; 
    }