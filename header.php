<!-- DataBase -->
<?php require 'bd.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВяЖу</title>
    <!-- шрифт -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- стили -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./icons/favicons">
    <link rel="apple-touch-icon" sizes="60x60" href="./icons/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./icons/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./icons/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./icons/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./icons/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./icons/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./icons/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./icons/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./icons/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./icons/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicons/favicon-16x16.png">
    <link rel="manifest" href="./icons/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./icons/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Header Nav -->
    <header class="header padding-top-12px">

        <div class="while">
            <nav class="nav container">
                <a href="index.php"><img class="nav__logo" src="./icons/new-logo-vector.svg" alt=""></a>
                <ul class="nav__menu">
                    <li><a class="nav__menu-item margin-right-100px" href="spitsy.php">Спицы</a></li>
                    <li><a class="nav__menu-item margin-right-100px" href="kryuchok.php">Крючок</a></li>
                    <li><a class="nav__menu-item" href="ruki.php">Руки</a></li>
                </ul>
                <form class="nav__box-search" action="#">
                    <input class="nav__search " placeholder="Поиск" type="search">
                    <button class="nav__btn-search">
                        <img class="nav__lupa" src="./icons/lupa.svg" alt="lupa">
                    </button>
                </form>
                <a class="nav__entry" href="#popup">Войти</a>
        
                <!-- Гамбургер меню -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>

    <!-- Popup -->
    <?php require 'popup.php'; ?>


    </header>