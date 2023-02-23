<!-- Header -->
<?php require 'header.php'; ?>

<?php $videocard = get_videocard_by_id($_GET['id']); ?>

<main>
    <section class="single">

        <div class="container">

            <h2 class="single__title padding-top-80px margin-bottom-40px"><?php echo $videocard["title"]; ?></h2>
            <video class="single__video"  controls="controls" src="<?php echo $videocard["video"]; ?>"></video>
            <p class="single__text"><?php echo $videocard["text"]; ?></p>

        </div>

    </section>
</main>

<!-- Footer -->
<?php require 'footer.php'; ?>


