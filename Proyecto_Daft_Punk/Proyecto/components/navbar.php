<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // este fragmento es imrimir nuestro codigo con solo php
    // if(isset($titulo_pagina)){
    //     echo "<title>$titulo_pagina</title>";
    // }else{
    //     echo "<title>Daft Punk official Site</title>";
    // }
    ?>

    <?php
    //este fragmento es para imprimir con html junto con php
    if(isset($titulo_pagina)){
        ?><title><?php echo $titulo_pagina ?></title><?php
    }else{
        ?><title>Daft Punk official site</title><?php
    }
    ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_WEB ?>Proyecto/assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>



