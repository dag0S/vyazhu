<!-- Header -->
<?php require 'header.php'; ?>

    <!-- Основные секции -->
    <main>
        <section class="section-error container">

            <!-- Хлебные корочки -->
            <nav class="nav-breadcrumb padding-top-40px margin-bottom-65px">
                <ol class="breadcrumb">
                    <li class="breadcrumb__item breadcrumb__without-sign margin-right-10px"><a href="index.php">Главная
                            страница</a></li>
                </ol>
            </nav>

            <!-- Ошибка 404 -->
            <div class="section-error__wrapper">
                <img class="section-error__img margin-bottom-40px padding-top-90px" src="./img/error-404.png"
                    alt="Ошибка 404">
                <h3 class="section-error__title margin-bottom-40px">Такой страницы нет</h3>
                <p class="section-error__text margin-bottom-40px">Но есть много других полезных страниц</p>
                <div class="btn-wrapper">
                    <a class="btn-wrapper__btn" href="spitsy.php">Спицы</a>
                    <a class="btn-wrapper__btn" href="kryuchok.php">Крючок</a>
                    <a class="btn-wrapper__btn" href="ruki.php">Руки</a>
                </div>
            </div>

        </section>
    </main>

<!-- Footer -->
<?php require 'footer.php'; ?>