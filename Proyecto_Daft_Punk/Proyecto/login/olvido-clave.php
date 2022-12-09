<?php
require_once '../config.php';
require_once '../components/navbar.php';
require_once '../admin/continentes/includes/conexion.php';
?>
<link rel="shortcut icon" href="../assets/img/descarga.png" type="image/x-icon">

<section class="container">
    <h1 class="text-center my-5">Recuperar contraseña</h1>
    <div class="row">
        <div class="col-6 offset-3">
        <p>Escriba el correo registrado, para enviar las instrucciones de recuperación de contraseña</p>
            <form action="Proceso-recuperacion.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputRecuperacionCorreo" name="inputRecuperacionCorreo" placeholder="name@example.com">
                    <label for="inputRecuperacionCorreo">Correo electronico</label>
                </div>
                <?php
                if (isset($_GET['errorFormulario']) && $_GET ['errorFormulario'] == 'true'){
                ?>
                    <div class= my-3>
                        <h6 class="text-center fw-bold text-danger">Ingrese el correo de su cuenta</h6>
                    </div>
                <?php
                }

                if(isset($_GET['errorFormulario']) && $_GET['errorFormulario'] = "1"){
                    ?>
                    <?php
                }
                ?>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark" type="submit">Recuperar contraseña</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once '../components/footers.php';
?> 