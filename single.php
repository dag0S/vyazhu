<!-- Header -->
<?php require 'header.php'; ?>

<?php $videocard = get_videocard_by_id($_GET['id']); ?>

<main>
    <section class="single">
        <img src="./img/right-plant-s.png" alt="" class="single__bg-r">
        <img src="./img/left-plant-s.png" alt="" class="single__bg-l">
        <div class="container">
            <!-- Хлебные корочки -->
            <nav class="nav-breadcrumb padding-top-40px margin-bottom-20px">
                <ol class="breadcrumb">
                    <li class="breadcrumb__item breadcrumb__without-sign margin-right-10px"><a href="index.php">Главная страница</a></li>
            </nav>
            <div class="single__wrapp-single margin-bottom-20px">
                <h2 class="single__title"><?php echo $videocard["title"]; ?></h2>
                <a class="single__link" href="<?php echo $videocard["video"]; ?>" target="_blank">YouTube
                    <img class="single__icon-link" src="./icons/external-link.svg" alt="link">
                </a>
            </div>
            <div class="single__wrapp-single-second margin-bottom-65px">
                <img class="single__youtube-icon" src="./icons/youtube-icon.svg" alt="youtube">
                <p class="single__text-youtube">YouTube</p>
                <p class="single__video-author"><span class="single__point">•</span><?php echo $videocard["author"]; ?></p>
                <p class="single__date"><span class="single__point">•</span><?php echo $videocard["date"]; ?></p>
            </div>
            <iframe class="single__video"src="<?php echo $videocard["video"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p class="single__text"><?php echo $videocard["text"]; ?></p>

        </div>

    </section>
</main>

<!-- Footer -->
<?php require 'footer.php'; ?>


