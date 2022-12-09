
<?php
$estilos_adicionales= ['assets/css/login.css'];
require_once '../config.php';
require_once '../components/navbar.php';
require_once '../admin/continentes/includes/conexion.php';

?>

<link rel="shortcut icon" href="../assets/img/descarga.png" type="image/x-icon">

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        <h2 class="my-5">Ingresar a mi cuenta</h2>
        <form action="login.server.php" method= "POST">
                <div class="mb-3">
                    <label for="inputCorreoLogin" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputCorreoLogin" name="inputCorreoLogin">
                </div>
                <div class="mb-3">
                    <label for="inputClaveLogin" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="inputClaveLogin" name="inputClaveLogin">
                </div>
                <?php
                if(isset($_GET['accesoInvalido'])){
                    ?>
                    <p class="text-danger fw-bold text-center">Datos de acceso invalido, intentelo nuevamente</p>
                    <?php
                }
                ?>
                <h6 class="text-center">
                    <a href="olvido-clave.php" class="fw-bold">Olvido su contraseña?</a>
                </h6>
                <div class= "d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary fw-bold">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require_once '../components/footers.php';
?> 