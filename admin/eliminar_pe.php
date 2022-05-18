<?php
include("../conexion.php");

$id = $_GET["id"];

$eliminarP = "DELETE FROM pedidos WHERE id_p = '$id'";

$resultadoEliminarP = mysqli_query($conexion, $eliminarP);
    
    if($resultadoEliminarP){
        echo "<script>alert('Eliminado CORRECTAMENTE'); </script>"; 
    header("location: index.php");
    }
    else{
    echo "<script>alert('Error No se pudo registrar'); window.history.go(-1); 
    </script>"; 
    }