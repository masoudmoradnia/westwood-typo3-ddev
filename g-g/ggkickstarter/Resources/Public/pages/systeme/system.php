<?php 
    // Prepare Slider for demo
    $slides = [
        "https://images.unsplash.com/photo-1453831362806-3d5577f014a4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1496412705862-e0088f16f791?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1472926373053-51b220987527?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
        "https://images.unsplash.com/photo-1497534547324-0ebb3f052e88?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ",
      ]
?>


<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>

<main class="ww-systems" id="ww-systems__detail">
    <div class="container p-5">
        <h1 class="text-primary text-center mb-4">Wecryl Abdichtungssystem</h1>
    </div>

    <div class="container">
        <div class="row g-5">
            <div class="col-md-4 col-xl-3">
                <!-- Systemübersicht -->
                <section class="ww-systems__toggle">
                    <button 
                        class="ww-systems__toggleButton"
                        type="button" data-bs-toggle="collapse" data-bs-target="#ww-systems__systemuebersicht" aria-expanded="false" aria-controls="ww-systems__systemuebersicht"
                        >Systemübersicht</button>
                        <div class="show collapse ww-systems__toggleContent" id="ww-systems__systemuebersicht">
                            <ul class="list-unstyled">
                                <li><a class="active" href="">Wecryl-Systeme</a></li>
                                <li><a href="">Wepox-Systeme</a></li>
                                <li><a href="">Weproof-Systeme</a></li>
                                <li><a href="">Sondersysteme</a></li>
                            </ul>
                        </div>
                </section>

                <!-- Einsatz in -->
                <section class="ww-systems__toggle">
                    <button 
                        class="ww-systems__toggleButton"
                        type="button" data-bs-toggle="collapse" data-bs-target="#ww-systems__areas" aria-expanded="false" aria-controls="ww-systems__areas"
                        >Einsatz des Systems in</button>
                        <div class="show collapse ww-systems__toggleContent" id="ww-systems__areas">
                            <ul class="list-unstyled">
                                <li><a href="">Balkon <span class="area-icon bg-balkon">B</span></a></li>
                                <li><a href="">Parken <span class="area-icon bg-parken">P</span></a></li>
                            </ul>
                        </div>
                </section>

                <!-- Verwendete Produkte -->
                <section class="ww-systems__toggle">
                    <button 
                        class="ww-systems__toggleButton"
                        type="button" data-bs-toggle="collapse" data-bs-target="#ww-systems__products" aria-expanded="false" aria-controls="ww-systems__products"
                        >Verwendete Produkte</button>
                        <div class="show collapse ww-systems__toggleContent" id="ww-systems__products">
                            <ul class="list-unstyled">
                                <li><a href="">Wecryl 110</a></li>
                                <li><a href="">Wecryl 178</a></li>
                                <li><a href="">Wecryl 276</a></li>
                                <li><a href="">Wecryl 276 K</a></li>
                                <li><a href="">WMP 713</a></li>
                                <li><a href="">WMP 174 S</a></li>
                                <li><a href="">Wecryl R 230 /-thix /-thix HT /-TT</a></li>
                                <li><a href="">Wecryl 233 /-thix 10 /-thix 20 /-Wi</a></li>
                                <li><a href="">Wecryl 337 /-thix 10 /-thix 20</a></li>
                                <li><a href="">Wecryl 288</a></li>
                                <li><a href="">Wecryl 489</a></li>
                                <li><a href="">Wecryl 410</a></li>
                                <li><a href="">Wecryl 420</a></li>
                                <li><a href="">Weplus Chips</a></li>
                                <li><a href="">WeVlies</a></li>
                                <li><a href="">WeVlies (perforiert)</a></li>
                            </ul>
                        </div>
                </section>

            </div>
            <div class="col-md-8 col-xl-9">

                <!-- Systemdetails -->
                <section class="mb-5 row">
                    <div class="col-lg-6">
                        <div class="fs-5">
                            <p>Das Wecryl Abdichtungssystem ist ein nahtloses, mechanisch belastbares, riss- und fugenüberbrückendes Abdichtungssystem.</p>
                        </div>
                        <div>
                            <p>Es enthält eine hochflexible und vliesarmierte Abdichtungsebene sowie abriebfeste Systemschichten für Fahrzeug- und Personenverkehr. Die flüssige Verarbeitung und der hohe Haftverbund zu fast allen Untergründen ermöglichen zudem die sichere und nahtlose Einbindung von Durchbrüchen und Anschlüssen in die Abdichtung. Diese Eigenschaften machen das System, speziell im Sanierungsbereich, zu einer wirtschaftlichen Lösung für Balkone, Terrassen, Laubengänge und Parkobjekte.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ww-systems__imageslide">
                            <agile class="main" ref="main" :options="options1" :as-nav-for="asNavFor1">
                                
                                <?php for($i=0; $i<count($slides);$i++):?>
                                <div class="slide" class="slide--<?=$i;?>"><img src="<?= $slides[$i]; ?>"/></div>
                                <?php endfor; ?>

                            </agile>
                            <agile class="thumbnails" ref="thumbnails" :options="options2" :as-nav-for="asNavFor2">
                                
                                <?php for($i=0; $i<count($slides);$i++):?>
                                <div class="slide slide--thumbnail" class="slide--<?= $i; ?>" @click="$refs.thumbnails.goTo(<?=$i;?>)"><img src="<?= $slides[$i];?>"/></div>
                                <?php endfor; ?>
                                
                            </agile>
                        </div>
                    </div>
                </section>

                <!-- Systembeschreibung -->
                <section class="my-5">
                    <div class="accordion accordion-flush" id="ww-systems__description">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Anwendungsbereiche
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#ww-systems__description">
                            <div class="accordion-body">
                                <p>Das Wecryl Abdichtungssystem ist durch seine vliesarmierte Abdichtungsebene speziell für alle stark rissgefährdeten oder Fugen enthaltenden Flächen geeignet. Die mechanisch beständige Nutzebene, die einstellbare Rutschfestigkeit und die freie Gestaltbarkeit der Oberfläche geben die notwendige Flexibilität zur Anpassung an die individuellen Anforderungen von Park- und Balkonobjekten.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Eigenschaften und Vorteile
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#ww-systems__description">
                            <div class="accordion-body">

                                    <ul class="ww-list">
                                    <li>nahtlose Abdichtungsebene mit Vliesarmierung</li>
                                    <li>CE-zertifiziert nach ETAG 005 in den höchstmöglichen Leistungsstufen</li>
                                    <li>baurechtlich zugelassen nach DIN 18531 und Flachdachrichtlinie (ZVDH)</li>
                                    <li>schwer entflammbare Variante (Cfl - s1 gemäß DIN EN 13501-1) erhältlich</li>
                                    <li>mechanisch hoch belastbare Nutzebene für Fahrzeug- und Personenverkehr</li>
                                    <li>vollflächig haftend, keine Hinterläufigkeit</li>
                                    <li>anwendbar auf fast allen Untergründen</li>
                                    <li>nahtlose Einbindung und sichere Abdichtung der komplexesten Anschlussformen durch flüssige Verarbeitung</li>
                                    <li>dauerhaft flexibel und rissüberbrückend, auch bei extremen Frosttemperaturen</li>
                                    <li>dauerhaft witterungsbeständig (temperatur-, UV-, hydrolysebeständig)</li>
                                    <li>beständig gegen die meisten gängigen Säuren und Laugen</li>
                                    <li>frei gestaltbar (farbliche Flächen, Fliesenoptik, …)</li>
                                    <li>leichte und schnelle Verarbeitung</li>
                                    <li>ganzjährig verarbeitbar</li>
                                    </ul>

                            </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Dokumente & Downloads
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#ww-systems__description">
                            <div class="accordion-body">
                                <div class="row row-cols-1 row-cols-lg-2">
                                    <div class="col">
                                        Systembroschüren
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Systembroschüre</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        Verlegerichtlinien
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Verlegerichtlinien</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        Detailzeichnungen
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Detailzeichnungen</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Detailzeichnungen</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Detailzeichnungen</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        Leistungserklärungen
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Leistungserklärungen 1</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        Prüfzeugnisse
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Prüfzeugnis 1</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Prüfzeugnis 2</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Prüfzeugnis 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        Leistungsverzeichnisse
                                        <ul class="ww-list ww-list--download mt-2">
                                            <li>
                                                <a href="">PDF | Leistungsverzeichnis 1</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Leistungsverzeichnis 2</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Leistungsverzeichnis 3</a>
                                            </li>
                                            <li>
                                                <a href="">PDF | Leistungsverzeichnis 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                </section>

                <!-- Call to action button -->
                <section class="my-5">
                    <button class="ww-button ww-button--square ww-button--full ww-button--lg">Lorem Ipsum: www.ausschreiben.de</button>
                </section>

                <!-- Einsatz in Referenzen -->
                <section class="my-5">
                    <h1 class="fs-4 text-primary my-3">Einsatz des Systems in Referenzen</h1>

                    <agile :options="options3">
                        <div class="px-2">
                            <article class="ww-reference">
                                <aside>
                                    <div class="ww-reference__area ww-reference__area--balkon">B</div>
                                    <img class="ww-reference__image" src="https://picsum.photos/300" alt="">
                                </aside>
                                <header>
                                    <div class="ww-reference__area ww-reference__area--balkon">Balkon</div>
                                    <h1>Wohnanlage Am Stutenanger</h1>
                                    <h2>Oberschleißheim, Deutschland</h2>
                                </header>
                                <footer>
                                    <a href="#" class="ww-button ww-button--hollow ww-button--arrow">weiterlesen</a>
                                </footer>
                            </article>
                        </div>


                        <div class="px-2">
                            <article class="ww-reference">
                                <aside>
                                    <div class="ww-reference__area ww-reference__area--balkon">B</div>
                                    <img class="ww-reference__image" src="https://picsum.photos/300" alt="">
                                </aside>
                                <header>
                                    <div class="ww-reference__area ww-reference__area--balkon">Balkon</div>
                                    <h1>Wohnanlage Am Stutenanger</h1>
                                    <h2>Oberschleißheim, Deutschland</h2>
                                </header>
                                <footer>
                                    <a href="#" class="ww-button ww-button--hollow ww-button--arrow">weiterlesen</a>
                                </footer>
                            </article>
                        </div>

                        <div class="px-2">
                            <article class="ww-reference">
                                <aside>
                                    <div class="ww-reference__area ww-reference__area--balkon">B</div>
                                    <img class="ww-reference__image" src="https://picsum.photos/300" alt="">
                                </aside>
                                <header>
                                    <div class="ww-reference__area ww-reference__area--balkon">Balkon</div>
                                    <h1>Wohnanlage Am Stutenanger</h1>
                                    <h2>Oberschleißheim, Deutschland</h2>
                                </header>
                                <footer>
                                    <a href="#" class="ww-button ww-button--hollow ww-button--arrow">weiterlesen</a>
                                </footer>
                            </article>
                        </div>
                    </agile>

                    <div class="my-5 container-fluid">
                        <button class="ww-button ww-button--secondary ww-button--full">Alle Referenzen</button>
                    </div>

                </section>

                <!-- Digitaler Inhalt. Wenn vorhanden. -->
                <section class="my-5">
                    <h1 class="fs-4 text-primary my-3">Digitaler Inhalt. Wenn vorhanden.</h1>
                    <div class="demo-digitaler-inhalt">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-video" class="svg-inline--fa fa-file-video fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M384 121.941V128H256V0h6.059c6.365 0 12.47 2.529 16.971 7.029l97.941 97.941A24.005 24.005 0 0 1 384 121.941zM224 136V0H24C10.745 0 0 10.745 0 24v464c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V160H248c-13.2 0-24-10.8-24-24zm96 144.016v111.963c0 21.445-25.943 31.998-40.971 16.971L224 353.941V392c0 13.255-10.745 24-24 24H88c-13.255 0-24-10.745-24-24V280c0-13.255 10.745-24 24-24h112c13.255 0 24 10.745 24 24v38.059l55.029-55.013c15.011-15.01 40.971-4.491 40.971 16.97z"></path></svg>
                    </div>
                </section>

            </div>
        </div>
    </div>

</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>