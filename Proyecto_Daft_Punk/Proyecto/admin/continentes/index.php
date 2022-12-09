<?php

// for ($i=1; $i <= 100 ; $i+1) { 
//    echo $i."<br>";
// }

// $contador =0;
// while ($contador <= 100) {
//    echo $contador."<br>";
//    $contador++;
//}

if(isset($_SESSION['perfil']) && $_SESSION['perfil'] !=1){
    header('location:' .URL_WEB);
}

require_once '../../config.php';
require_once '../../components/navbar.php';

if(isset($_SESSION['perfil']) && $_SESSION['perfil'] !=1){

require_once '../continentes/includes/conexion.php';

$servidor = "localhost";
$usuario = "root";
$clave="";
$nombre_bd = "daft_punk";

$conexion = mysqli_connect($servidor, $usuario, $clave, $nombre_bd);

if(!$conexion){
    die("Conexión fallo:". mysqli_connect_error());
}

$query_sql_continentes = "SELECT * FROM tb_paises";
$resultado_continentes = mysqli_query($conexion,$query_sql_continentes);
print_r($resultado_continentes);exit;

?>

<div class="container">
    <div class=" d-flex justify-content-between align-items-center">
    <h1 class="my-5">Administracion de continentes</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreaContinente">
            Crear continente
        </button>
    </div>


    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th colspan="2" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_object($resultado_continentes)){
            ?>
                <tr>
                    <th><?php echo $data ->id_registro ?></th>
                    <td><?php echo $data ->nombre ?></td>
                    <td colspan="2"></td>
                        <button class="btn btn-warning"><i class="fa-solid fa-pencil me-3"></i> Editar</button>
                        <button class="btn btn-danger"><i class="fa-solid fa-circle-xmark me-3"></i> Eliminar</button>
                </tr>
            <?php
            }

            ?>

        </tbody>
</table>


    <div class="modal fade" id="ModalCreaContinente" tabindex="-1" aria-labelledby="ModalCreaContinente" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalCreaContinente">Crear continente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="server.continentes.php" method="POST">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputNombreContinente" name="inputNombreContinente" placeholder="Nombre">
                                <label for="inputNombrePais">Nombre</label>
                            </div>
                        </div>
                        <button class="btn btn-dark" type="submit">Crear continente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require_once '../../components/footers.php';
}