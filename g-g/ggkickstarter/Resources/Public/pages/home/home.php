<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>

<?php include __ROOT__."/components/hero/hero.php"; ?>

<main>

    <div class="container position-relative">
        <?php include __ROOT__."/components/notification/notification.php"; ?>
    </div>

    <?php include __ROOT__."/components/targetgroupselect/targetgroupselect.php"; ?>

    <?php $featured = true; include __ROOT__."/components/reference/reference.php"; ?>
    
    <?php include __ROOT__."/components/fabricatorsearch/fabricatorsearch.php"; ?>

    <?php include __ROOT__."/components/news/newslist-short.php"; ?>

</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>

<?php include __ROOT__."/components/quicknav/quicknav.php"; ?>