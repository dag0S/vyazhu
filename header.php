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
        <nav class="nav">
            <a href="index.php"><img class="nav__logo margin-right-100px" src="./icons/new-logo-vector.svg" alt=""></a>
            <ul class="nav__menu">
                <li><a class="nav__menu-item margin-right-100px" href="spitsy.php">Спицы</a></li>
                <li><a class="nav__menu-item margin-right-100px" href="kryuchok.php">Крючок</a></li>
                <li><a class="nav__menu-item margin-right-100px" href="ruki.php">Руки</a></li>
            </ul>
            <form class="nav__box-search margin-right-100px" action="#">
                <input class="nav__search " placeholder="Поиск" type="search">
                <button class="nav__btn-search">
                    <img src="./icons/lupa.svg" alt="">
                </button>
            </form>
            <p class="nav__entry">Войти</p>
        </nav>

        <!-- Темный фон popup'а -->
        <div class="popup-bg"></div>

        <!-- Форма входа -->
        <div class="registration-popup authorization">
            <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
            <div class="registration-popup__wrapper">
                <img class="registration-popup__exit" src="./icons/x.svg" alt="">
                <div class="title margin-bottom-18px">
                    <h2 class="title__authorization title__authorization_activated">Вход</h2>
                    <h2 class="title__registration title__registration_deactivated">Регистрация</h2>
                </div>
                <form class="form" action="#">
                    <label class="form__text margin-bottom-12px" for="">Логин</label>
                    <input class="form__input margin-bottom-18px" type="email" placeholder="e-mail">
                    <label class="form__text margin-bottom-12px" for="">Пароль</label>
                    <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •">
                    <div class="form__wrapp">
                        <p class="form__text3 margin-bottom-30px"><input class="form__checkbox"
                                type="checkbox">Запомнить меня</p>
                        <p class="form__forgot-password form__text3 pointer">Забыли пароль?</p>
                    </div>
                    <button class="form__btn form__btn_authorization margin-bottom-30px">Войти</button>
                    <div class="form__icon-wrapper">
                        <p class="form__text3 margin-bottom-30px">Войти с помощью</p>
                        <a href="#" class="form__icon">
                            <img class="form__img" src="./icons/vk-icon.svg" alt="Вк"></a>
                        <a href="#" class="form__icon">
                            <img class="form__img" src="./icons/google-icon.svg" alt="Google"></a>
                        <a href="#" class="form__icon">
                            <img class="form__img" src="./icons/facebook-icon.svg" alt="facebook"></a>
                        <a href="#" class="form__icon">
                            <img class="form__img" src="./icons/twitter-icon.svg" alt=""></a>
                        <a href="#" class="form__icon">
                            <img class="form__img" src="./icons/instagram-icon.svg" alt="instagram"></a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Форма регистрации -->
        <div class="registration-popup registration">
            <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
            <div class="registration-popup__wrapper">
                <img class="registration-popup__exit close-registration" src="./icons/x.svg" alt="">
                <div class="title margin-bottom-18px">
                    <h2 class="title__authorization open">Вход</h2>
                    <h2 class="title__registration">Регистрация</h2>
                </div>
                <form class="form" action="#">
                    <label class="form__text margin-bottom-12px" for="">Логин</label>
                    <input class="form__input margin-bottom-18px" type="email" placeholder="e-mail">
                    <label class="form__text margin-bottom-12px" for="">Пароль</label>
                    <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •">
                    <label class="form__text margin-bottom-12px" for="">Повторите пароль</label>
                    <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •">
                    <p class="form__text2 margin-bottom-30px"><input class="form__checkbox" type="checkbox">Я согласен с
                        политикой
                        конфиденциальности</p>
                    <button class="form__btn">Зарегистрироваться</button>
                </form>
            </div>
        </div>

        <!-- Форма востановления пароля -->
        <div class="registration-popup restore-password">
            <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
            <div class="registration-popup__wrapper">
                <img class="registration-popup__exit close-restore-password" src="./icons/x.svg" alt="">
                <div class="title margin-bottom-40px">
                    <h2 class="title__registration title__registration_password-recovery">Восстановление пароля</h2>
                </div>
                <form class="form" action="#">
                    <p class="form__text margin-bottom-40px">Пожалуйста, введите адрес электронной почты, указанный в
                        параметрах вашей учетной записи. На него будет отправлен специальный код. После его получения вы
                        сможете ввести новый пароль для вашей учетной записи. </p>
                    <label class="form__text margin-bottom-12px" for="">Адрес электронной почты </label>
                    <input class="form__input margin-bottom-40px" type="email" placeholder="e-mail">
                    <button class="form__btn form__btn_send">Отправить</button>
                </form>
            </div>
        </div>

    </header>