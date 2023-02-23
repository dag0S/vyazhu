<div class="video-cards">

    <?php

        $videocards = get_videocards_all();

        foreach ($videocards as $videocard): ?>

            <div class="video-card margin-bottom-40px">
                <a class="video-card__link" href="single.php?id=<?php echo $videocard["id"]; ?>" >
                    <div class="video-card__wrapper-preview">
                        <img class="video-card__triangle" src="./icons/btn-play.svg" alt="play">
                        <img class="video-card__img" src="<?php echo $videocard["img"]; ?>" alt="">
                    </div>
                </a>
                <div class="video-card__wrapper-text">
                    <h3 class="video-card__title"><?php echo $videocard["title"]; ?></h3>
                    <p class="video-card__text"><?php echo $str = mb_substr($videocard["text"], 0, 135); ?> . . .</p>
                </div>
            </div>

        <?php endforeach; ?>

</div>