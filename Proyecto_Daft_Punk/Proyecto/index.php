<?php
///session_start();
/// if($_SESSION['correo']) {
/// echo "Bienvenido";
$titulo_pagina = 'Daft Punk official site';
require_once 'config.php';
require_once 'components/navbar.php';
?>

<?php
if (isset($_SESSION['nombre_usuario'])){
?>
    <section class="container">
    <h5 class="mt-5 text-end">Bienvenido <?php echo $_SESSION['nombre_usuario']?></h5>
</section>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daft Punk official site</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/descarga.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Daft Punk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Sitio oficial de Daft Punk</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <button type="submit" onclick="location.href='../Proyecto/index.php'"> Pagina principal</button></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <button type= "submit"> Club de fans</button></a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?php echo URL_WEB ?>/login">Ingresar a mi cuenta</a></li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="<?php echo URL_WEB ?>/registro.php">Registrarse</a></li>
                </ul>
                </li>
            </ul>
        </div>
        </div>
        </div>
    </nav>
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
        &nbsp; &nbsp; &nbsp;

    </div>
    <ul class="nav flex-column text-center align-middle position-absolute bottom-50 end-50">
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-compact-disc"></i>
        <button type= "submit" onclick="location.href= 'Contenido/Musica/Discografia.php'">M??sica</button></a>
        </li>
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-landmark"></i>
        <button type= "submit" onclick="location.href= 'Contenido/Historia/index.php'"> Historia</button></a>
        </li>
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-camera-retro"></i>
        <button type="submit" onclick="location.href='Contenido/Dise??os/'"> Dise??os </button></a>
        </li>
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-sharp fa-solid fa-music"></i>
        <button type="submit" onclick="location.href='Contenido/Streaming/index.php'"> Streaming </button></a>
        </li>
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-heart"></i>
        <button type="submit" onclick="location.href='Contenido/Redes/index.php'"> Redes Sociales </button></a>
        </li>
        <li class="nav-item img-fluid">
        <a class="nav-link active" aria-current="page" href="#"><i class="fa-brands fa-cc-diners-club"></i>
        <button type="submit" onclick="location.href='Contenido/Club de fans/index.php'"> Club de fans </button></a>
        </li>
        </li>
    </ul>
</body>
</html>
</body>
</html>
