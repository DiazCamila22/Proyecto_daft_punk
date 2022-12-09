<?php
$servidor = "localhost";
$usuario = "root";
$clave="";
$nombre_bd = "daft_punk";

$conexion = mysqli_connect($servidor, $usuario, $clave, $nombre_bd);


if(!$conexion){
    die("Conexión fallo:". mysqli_connect_error());
}
// else{
//    echo "Conexión exitosa";
// }