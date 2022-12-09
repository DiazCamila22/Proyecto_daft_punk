<?php
require_once '../config.php';
require_once '../admin/continentes/includes/conexion.php';
$formulario_valido = true;

if(empty($_POST['inputCorreoLogin'])){
    $formulario_valido = false;
    echo "El correo es obligatorio";
    return;
}

if (empty($_POST['inputClaveLogin'])){
    $formulario_valido = false;
    echo "El correo es obligatorio";
    return;
}

if($formulario_valido) {

    $direccion_acceso_invalido = URL_WEB. 'login/?accesoInvalido = 1';
    $correo = $_POST['inputCorreoLogin'];
    $clave = $_POST['inputClaveLogin'];
    $sql = "SELECT * FROM tb_usuarios WHERE correo ='$correo' LIMIT 1";
    $resultado = mysqli_query($conexion, $sql);
    print_r($sql);
    $resultado = mysqli_fetch_object($resultado);
    if($correo == $resultado->correo) { 
        if($clave == $resultado ->clave)
        (password_verify($clave, $resultado->clave)){
            session_start(); 
            $url_redireccion = URL_WEB. '/?acceso=true';
            $_SESSION['correo'] = $resultado->correo;
            $_SESSION['perfil'] = $resultado->id_perfil;
            $_SESSION['nombre_usuario'] = $resultado->nombre .' '.$resultado->id_usuario->apellido;
            header('location: '. $url_redireccion);
        }else{
            header('location: '. $direccion_acceso_invalido);
        }
    }else{
        header('location: '. $direccion_acceso_invalido);
    }
}