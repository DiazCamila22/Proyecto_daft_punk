<?php
$servidor = "localhost";
$usuario = "root";
$clave="";
$nombre_bd = "daft_punk"

$conexion = mysqli_connect($servidor, $usuario, $clave, $nombre_bd);


if(!$conexion){
    die("Conexión fallo:". mysqli_connect_error());
}
// else{
//    echo "Conexión exitosa";
// }
if(empty($_POST['inputNombreContinente'])){
    echo "el nombre del continente esta vacio";
    return;
}else{
    $query_sql = "INSERT INTO tb_continentes (nombre) VALUES ('".$_POST['inputNombreContinente']."')";
    if(mysqli_query($conexion, $query_sql)){
        header('Location: index.php');
    }else{
        echo "Error:$query_sql <br>".mysqli_error($conexion);
    }









