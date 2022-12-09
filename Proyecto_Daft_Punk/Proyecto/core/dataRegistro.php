<!-- <pre> -->
<?php
require_once '../config.php';
require_once '../admin/continentes/includes/conexion.php';
$formulario_valido = true;

/*
Array
(
    [inputNombreRegistro] => Officia excepteur be
    [inputApellidoRegistro] => Aut veniam quod lab
    [inputCorreoRegistro] => lizixe@mailinator.com
    [inputEdadRegistro] => 59
    [selectContinenteRegistro] => 3
    [inputPassRegistro] => Pa$$w0rd!
    [inputVerPassRegistro] => Pa$$w0rd!
)

*/


if(empty($_POST['inputNombreRegistro'])){
    echo "el nombre esta vacio";
    $formulario_valido = false;
    return;
}

if(empty($_POST['inputApellidoRegistro'])){
    echo "el apellido es obligatorio";
    $formulario_valido = false;
    return;
}

if(empty($_POST['inputCorreoRegistro'])){
    echo "el correo es obligatorio";
    $formulario_valido = false;
    return;
}

if(empty($_POST['inputEdadRegistro'])){
    echo "la edad es obligatoria";
    $formulario_valido = false;
    return;
}

if(empty($_POST['inputContinenteRegistro']) || !isset($_POST['inputContinenteRegistro'])){
    echo "el El continente es obligatorio";
    $formulario_valido = false;
    return;
}


if(empty($_POST['inputPassRegistro'])){
    echo "La contraseña es obligatoria";
    $formulario_valido = false;
    return;
}

if(empty($_POST['inputVerPassRegistro'])){
    echo "Verifique su contraseña";
    $formulario_valido = false;
    return;
}

if($_POST['inputPassRegistro'] != $_POST['inputVerPassRegistro']){
    echo "Sus contraseñas no coinciden";
    $formulario_valido = false;
    return;
}

if(!isset($_POST['checkTYC'])){
    echo "Tiene que aceptar terminos y condiciones";
    $formulario_valido = false;
    return;
}


/// $nombres = ['miguel', 'duvan', 'kevin', 86, 96, 32, true, false];
// echo $nombres[3];



if($formulario_valido) {
    $nombre = $_POST['inputNombreRegistro'];
    $apellido = $_POST['inputApellidoRegistro'];
    $correo = $_POST['inputCorreoRegistro'];
    $edad = $_POST['inputEdadRegistro'];
    $continente = $_POST['inputContinenteRegistro']; 
    $clave = password_hash($_POST['inputPassRegistro'], PASSWORD_DEFAULT);   
    $tycCheck  = true; 


    $sql ="INSERT INTO tb_usuarios(nombre, apellido, correo, edad, id_continente, clave) VALUES ('$nombre', '$apellido', '$correo', '$edad', '$pais', '$clave')";
    if(mysqli_query($conexion, $sql)){
        header('Location: '.URL_WEB.'../login');
    }else{
        echo "Error: $sql <br>".mysqli_error($conexion);
    }
    // print_r($clave);
}

