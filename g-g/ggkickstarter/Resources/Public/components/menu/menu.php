<?php 

$counter = 0;
$menu = [
    "Einsatzgebiete" => [
        "Balkon" =>"https://picsum.photos/170/120", 
        "Parken" =>"https://picsum.photos/170/120", 
        "Verkehr" =>"https://picsum.photos/170/120", 
        "Dach" =>"https://picsum.photos/170/120", 
        "Spezial" =>"https://picsum.photos/170/120"
    ],
    "Systeme" => [],
    "Produkte" => [],
    "Leistungen für ..." => [],
    "Service" => [],
];

?>

<nav class="ww-menu navbar navbar-expand-md">

    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <img class="ww-logo" width="150" src="/assets/img/WestWood_Logo_2019_RGB_quer@2x.png" alt="">
        </a>
        <div class="d-none d-md-block">
            <ul class="navbar-nav flex-row justify-content-between gap-3">
                <?php foreach($menu as $item => $subs): ?>
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?= $item; ?></a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <div class="row _g-3 row-cols-auto">
                            <?php foreach($subs as $sub => $image): ?>
                            <div class="col">
                                <div class="col-megamenu">
                                    <a href="">
                                        <img src="<?= $image;?>">
                                        <h6 class="title"><?= $sub; ?></h6>
                                    </a>
                                </div>  <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <?php endforeach; ?>
                        </div><!-- end row --> 
                    </div> <!-- dropdown-mega-menu.// -->
			    </li>

                <?php endforeach; ?>
            </ul>
        </div>
        <div class="navbar-text ms-auto me-4">
            <?php include __ROOT__."/components/search/search.php"; ?>
        </div>
        <button class="d-md-none ww-button ww-button--primary ww-button--square ww-menu__offcanvasButton" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel"></h5>
                <button type="button" class="ww-button ww-button--primary ww-button--square ww-menu__offcanvasButton ww-menu__offcanvasButton--close _btn-close _text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion accordion-flush" id="menuOffcanvas">

                    <?php
                        foreach ($menu as $item => $subs):
                            $counter++;
                    ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="menuEinsatzgebiete">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $counter ?>" aria-expanded="false" aria-controls="collapse<?= $counter;?>">
                                <?= $item; ?>
                            </button>
                        </h2>
                        <div id="collapse<?= $counter;?>" class="accordion-collapse collapse" aria-labelledby="menuEinsatzgebiete" data-bs-parent="#menuOffcanvas">
                            <div class="accordion-body">
                                <ul>
                                    <?php foreach ($subs as $sub => $image): ?>
                                    <li>
                                        <a href="#"><?= $sub; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
                <div id="metamenuOffcanvas">
                    <ul>
                        <?php 
                        $metamenu = [
                            "Referenzen",
                            "Unternehmen",
                            "Mediathek",
                            "Kontakt",
                            "Sprache"
                        ];
                        foreach ($metamenu as $item):
                       ?>
                        <li>
                            <a href="#"><?= $item; ?></a>
                        </li>
                       <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</nav>