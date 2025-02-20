<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./src/css/principal/reset.css">
    <link rel="stylesheet" href="./src/css/principal/styles.css">
    <title>
        <?php
        if (isset($titulo) && !empty($titulo)) {
            echo $titulo;
        } else {
            echo 'Principal';
        }
        ?>
    </title>
</head>

<body>
    <header class="teste">
        <nav class="container header">
            <a href="#" class="nav__logo">
                <img src="./src/img/header/Logo LunaryRoll.png" alt="">
            </a>

            <ul class="nav__menu">
                <li class="nav__menu-item">
                    <a href="#">
                        Categorias
                    </a>
                </li>
                <li class="nav__menu-item">
                    <a href="#">
                        Animes
                    </a>
                </li>
                <li class="nav__menu-item">
                    <a href="#">
                        Mangás
                    </a>
                </li>
            </ul>

            <ul class="nav__menu">
                <li class="nav__menu-search">
                    <a href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <li class="nav__menu-perfil">
                    <a href="#">
                        <img src="./src/img/header/Icon Perfil.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
    </header>