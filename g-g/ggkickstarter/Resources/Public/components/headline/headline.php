<div class="ww-headline container_fluid">

    <?php if($image): ?>
    <div class="ww-headline__icon">
            <?php echo $image; ?>
    </div> 
    <?php endif; ?>
    <div class="ww-headline__text">
        <h1><?php if($headline) {echo $headline;} else { echo "Überschrift";} ?></h1>
        <?php if($subline): ?>
            <h2 class="fs-5"><?= $subline; ?></h2>
        <?php endif; ?>
    </div>

</div>