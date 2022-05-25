<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>

<?php include __ROOT__."/components/hero/heroSingle.php"; ?>

<main id="ww-referenzenFilterApp">
    <?php $headline = "Referenzen"; $image=false; include __ROOT__."/components/headline/headline.php"; ?>

    <div class="ww-referenzen p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <button 
                        class="ww-button ww-button--primary ww-button--square ww-button--full my-4 d-md-none"
                        type="button" data-bs-toggle="collapse" data-bs-target=".ww-reference__filter" aria-expanded="false" aria-controls="ww-reference__filter collapse"
                        >Filter <svg xmlns="http://www.w3.org/2000/svg" width="13.777" height="12.5" viewBox="0 0 13.777 12.5" fill="none" stroke="currentColor"><defs></defs><path d="M14.777,3H2L7.111,9.044v4.178L9.666,14.5V9.044Z" transform="translate(-1.5 -2.5)"/></svg></button>
                    <section class="ww-reference__filter mb-4 collapse" id="ww-reference__filter">
                        <section>
                            <h3 class="fs-4">Einsatzgebiete</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="balkon" id="filterBalkon">
                                        <label class="form-check-label" for="filterBalkon">
                                            Balkon
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="parken" id="filterParken">
                                        <label class="form-check-label" for="filterParken">
                                        Parken
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="verkehr" id="filterVerkehr">
                                        <label class="form-check-label" for="filterVerkehr">
                                        Verkehr
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="dach" id="filterDach">
                                        <label class="form-check-label" for="filterDach">
                                        Dach
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="spezial" id="filterSpezial">
                                        <label class="form-check-label" for="filterSpezial">
                                        Spezial
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="fs-4">Systeme</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="wecryl" id="filterWecryl">
                                        <label class="form-check-label" for="filterWecryl">
                                        Wecryl
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="wepox" id="filterWepox">
                                        <label class="form-check-label" for="filterWepox">
                                        Wepox
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="weproof" id="filterWeproof">
                                        <label class="form-check-label" for="filterWeproof">
                                        Weproof
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="sondersysteme" id="filterSondersysteme">
                                        <label class="form-check-label" for="filterSondersysteme">
                                        Sondersysteme
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </section>
                </div>
                <div class="ww-reference__list col-md-8 col-lg-9">
                    
                    <section>
                        <p class="h1 text-balkon">Balkon</p>
                        <?php for ($i=0; $i < 3; $i++): ?>
                        <article class="ww-reference__item ww-reference__item--short">
                            <aside>
                                <img class="img-fluid" src="https://picsum.photos/128">
                            </aside>
                            <header>
                                <h1>Komplexes Dach - einfache Sanierungslösung</h1>
                                <h2>Neuer ReferenzReport</h2>
                            </header>
                            <footer>
                                <a href="#"><span>weiterlesen</span> <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                            </footer>
                        </article>
                        <?php endfor;?>
                        <footer class="mt-4 text-center">
                            <button class="ww-button ww-button--secondary">weitere anzeigen</button>
                        </footer>
                    </section>

                    <section>
                        <header>
                            <p class="h1 text-parken">Parken</p>
                        </header>
                        <?php for ($i=0; $i < 3; $i++): ?>
                        <article class="ww-reference__item ww-reference__item--short">
                            <aside>
                                <img class="img-fluid" src="https://picsum.photos/128">
                            </aside>
                            <header>
                                <h1>Komplexes Dach - einfache Sanierungslösung</h1>
                                <h2>Neuer ReferenzReport</h2>
                            </header>
                            <footer>
                                <a href="#"><span>weiterlesen</span> <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                            </footer>
                        </article>
                        <?php endfor;?>
                        <footer class="mt-4 text-center">
                            <button class="ww-button ww-button--secondary">weitere anzeigen</button>
                        </footer>
                    </section>

                    <section>
                        <header>
                            <p class="h1 text-verkehr">Verkehr</p>
                        </header>
                        <?php for ($i=0; $i < 3; $i++): ?>
                        <article class="ww-reference__item ww-reference__item--short">
                            <aside>
                                <img class="img-fluid" src="https://picsum.photos/128">
                            </aside>
                            <header>
                                <h1>Komplexes Dach - einfache Sanierungslösung</h1>
                                <h2>Neuer ReferenzReport</h2>
                            </header>
                            <footer>
                                <a href="#"><span>weiterlesen</span> <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                            </footer>
                        </article>
                        <?php endfor;?>
                        <footer class="mt-4 text-center">
                            <button class="ww-button ww-button--secondary">weitere anzeigen</button>
                        </footer>
                    </section>

                    <section>
                        <header>
                            <p class="h1 text-dach">Dach</p>
                        </header>
                        <?php for ($i=0; $i < 3; $i++): ?>
                        <article class="ww-reference__item ww-reference__item--short">
                            <aside>
                                <img class="img-fluid" src="https://picsum.photos/128">
                            </aside>
                            <header>
                                <h1>Komplexes Dach - einfache Sanierungslösung</h1>
                                <h2>Neuer ReferenzReport</h2>
                            </header>
                            <footer>
                                <a href="#"><span>weiterlesen</span> <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                            </footer>
                        </article>
                        <?php endfor;?>
                        <footer class="mt-4 text-center">
                            <button class="ww-button ww-button--secondary">weitere anzeigen</button>
                        </footer>
                    </section>

                    <section>
                        <header>
                            <p class="h1 text-spezial">Spezial</p>
                        </header>
                        <?php for ($i=0; $i < 3; $i++): ?>
                        <article class="ww-reference__item ww-reference__item--short">
                            <aside>
                                <img class="img-fluid" src="https://picsum.photos/128">
                            </aside>
                            <header>
                                <h1>Komplexes Dach - einfache Sanierungslösung</h1>
                                <h2>Neuer ReferenzReport</h2>
                            </header>
                            <footer>
                                <a href="#"><span>weiterlesen</span> <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                            </footer>
                        </article>
                        <?php endfor;?>
                        <footer class="mt-4 text-center">
                            <button class="ww-button ww-button--secondary">weitere anzeigen</button>
                        </footer>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <?php // include __ROOT__."/components/reference/referenceList.php"; ?>


</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>