<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daft Punk official site</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/descarga.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/img/descarga.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img width="1366" height="657" href="#" class="bgimage" src="https://c.wallhere.com/photos/fe/74/Daft_Punk-43458.jpg!d">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Daft Punk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Sitio ofical de Daft Punk</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <button type="submit" onclick="location.href='../../index.php'"> Pagina principal</button></a>
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



    <ul class="nav flex-column text-center align-middle position-absolute bottom-50 end-50">

    <div class="iconboxmiddle">
        <div class="iconbox width300">
        <div class="icon"><a href="../Musica/albumes.php"><img src="https://preview.redd.it/7rz8j1yppei51.jpg?auto=webp&s=ac2f4a41f9402b9ca821d9d06a88710838b0709c" width="65" height="65" border="0"></a></div>
        <div class="icontext width200"><a href="../Musica/albumes.php">ALBUMES</a></div>
        </div>
        <div class="iconbox width300">
        <div class="icon"><a href="../Musica/EP.php"><img src="https://m.media-amazon.com/images/I/41jbakm8YPL._SY580_.jpg" alt="" width="65" height="65" border="0"></a></div>
        <div class="icontext width200"><a href="../Musica/EP.php">EP</a></div>
        </div>
        <div class="iconbox width300">
        <div class="icon"><a href="../Musica/sencillos.php"><img src="https://somarecords.com/media/images/recordings/125-front-420.jpg" alt="" width="65" height="65" border="0"></a></div>
            <div class="icontext width200"><a href="../Musica/sencillos.php">SENCILLOS</a></div>
        </div>

    </ul>


</body>
</html>

