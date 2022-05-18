<?php
    //Servidor //Usuario  //Contraseña  //Base de datos
    // $host = 'localhost';
    // $user = 'root';
    // $password = 'localhost';
    // $db = 'basedd';

    //$conexion = @mysqli_connect($host, $user, $password, $db);

$conexion = mysqli_connect("localhost", "root", "", "POODB");
mysqli_set_charset($conexion,"utf8");

if(!$conexion){
    echo "Error en la conexion";
}else{
    //echo "<br>CONEXION realizada con EXITO a la BASE DE DATOS";
}
?>