<!-- Header -->
<?php require 'header.php'; ?>

    <!-- Основные секции -->
    <main>
        <!-- Карточки с выбором уровня вязания -->
        <section class="section-main">

            <!-- Растнение на фоне -->
            <img class="planet-bg section-main__planet-bg" src="./img/plant-background.png" alt="">

            <div class="container">
                <h1 class="first-title margin-bottom-40px padding-top-80px">Выберите интересующий вас раздел</h1>
                <!-- Карточки -->
                <div class="wrapper-cards margin-bottom-20px">
                    <a href="dlya-nachinayushchikh.php" class="card">
                        <img class="card__photo" src="./img/photo-1.png" alt="photo-1">
                        <h2 class="card__title">Для начинающих</h2>
                    </a>
                    <a href="error-404.php" class="card">
                        <img class="card__photo" src="./img/photo-2.png" alt="photo-1">
                        <h2 class="card__title">Для опытных</h2>
                    </a>
                    <a href="error-404.php" class="card">
                        <img class="card__photo" src="./img/photo-3.png" alt="photo-1">
                        <h2 class="card__title">Мастер-классы</h2>
                    </a>
                </div>
                <!-- Текст под карточками -->
                <div class="wrapper-text padding-bottom-80px">
                    <p class="text">Видеоуроки для начинающих вязальщиц - отличный способ освоить искусство вязания.
                        Простые
                        и нужные техники, которые может освоить каждый. Желаем удачи!</p>
                    <p class="text">Если вы уже освоили азы вязания - этот раздел для вас! Здесь вы найдете видеоуроки с
                        различными техниками вязания декоративных узоров и оригинальных элементов разной сложности.</p>
                    <p class="text">Пошаговые видеоуроки и мастер-классы по вязанию ждут вас. Вязаная одежда, игрушки,
                        предметы интерьера - здесь вы всегда найдете вдохновляющую идею и способ ее реализовать!
                    </p>
                </div>
            </div>
        </section>

        <!-- Секция с книгами -->
        <section class="section-books">
            <div class="with-title-bg">
                <h3 class="third-title">
                    <span class="third-title__title-top margin-bottom-15px">Учиться новому никогда не поздно: лучшие
                        книги по
                        вязанию</span>
                    <span class="third-title__title-bottom">Отличный способ побороть депрессию - связать носки для всех
                        членов
                        семьи!</span>
                </h3>
            </div>
            <!-- Книги -->
            <div class="books">
                <div class="container books__container">
                    <div class="right-wrapper">
                        <div class="book-1">
                            <img class="book-photo-1" src="./img/book-1.png" alt="book-1">
                            <div class="block-with-text">
                                <h4 class="block-with-text__name-book">Азбука вязания М. Максимова</h4>
                                <p class="block-with-text__rating">Рейтинг: 5.0</p>
                                <p class="block-with-text__description">Книга была переиздана более 40 раз. Это отличная
                                    книга для тех, кто не держал вообще спицы в руках. Пошаговые уроки с понятным
                                    описанием. Можно найти ответы на любые вопросы, возникающие в процессе вязания.
                                    Настоящая находка для начинающих вязальщиц. Текст книги сопровождается большим
                                    количеством схем, узоров и моделей для вязания женской, детской и мужской одежды, а
                                    также аксессуаров для дома.</p>
                                <a class="block-with-text__link" href="#">Узнать больше &#62;</a>
                            </div>
                        </div>
                    </div>
                    <div class="left-wrapper">
                        <div class="book-2 margin-bottom-20px">
                            <img class="book-photo-2" src="./img/book-3.png" alt="book-1">
                            <div class="block-with-text">
                                <h4 class="block-with-text__name-book">Вязание без слез Э. Циммерман</h4>
                                <p class="block-with-text__rating">Рейтинг: 4.9</p>
                                <p class="block-with-text__description">Книга знакомит с понятными методами создания
                                    объемных узоров, сборок и волн.
                                </p>
                                <a class="block-with-text__link" href="#">Узнать больше &#62;</a>
                            </div>
                        </div>
                        <div class="book-3">
                            <img class="book-photo-3" src="./img/book-2.png" alt="book-1">
                            <div class="block-with-text">
                                <h4 class="block-with-text__name-book">3D Вязание на спицах Т. Перчер</h4>
                                <p class="block-with-text__rating">Рейтинг: 4.8</p>
                                <p class="block-with-text__description">Книга для тех кто немного умеет вязать и кто
                                    только начинает. Может улучшить технику, понять как правильно создавать сложные
                                    детали.</p>
                                <a class="block-with-text__link" href="#">Узнать больше &#62;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Секция с видео -->
        <section class="section-videos">
            <div class="container">
                <h5 class="first-title first-title_left margin-bottom-40px padding-top-80px">Новинки</h5>

                <?php require 'content-home.php'; ?>

                <form action="#">
                    <button class="btn-show-more">Показать ещё</button>
                </form>
            </div>
        </section>
    </main>

<!-- Footer -->
<?php require 'footer.php'; ?>