<section class="ww-references my-5">

    <div class="ww-references__container container-fluid">
        <div class="container p-4">
            <h1 class="ww-references__headline">Aktuelle Referenzen</h1>
        </div>

        <?php if($featured): ?>
        <div class="container">
            <article class="ww-reference ww-reference--featured row row-col-md-2">
                <aside class="col-md order-md-2">
                    <div class="ww-reference__area ww-reference__area--parken">P</div>
                    <img class="ww-reference__image" src="https://picsum.photos/300" alt="">
                </aside>

                <div class="ww-reference__content col-md order-md-1">
                    <header class="mt-md-5">
                        <h1 class="mt-md-5">Parkhaus P6 Flughafen</h1>
                        <h2 class="mt-md-5">Hamburg Fuhlsbüttel, Deutschland</h2>
                    </header>

                    <h3 class="ww-reference__teaser mt-md-5">OS 10 Parkhausabdichtung im Winter: kein Problem für PMMA</h3>
                    <p>Aufgrund der ursprünglich rissfreien Konstruktion wurde im Parkhaus P6 am Flughafen Hamburg auf die Beschichtung des Betonbodens verzichtet. Im Zuge der Nutzung traten jedoch Risse auf, in die Chloride bis zur Bewehrung eindringen konnten. Der Bauherr entschied deshalb zur Vermeidung von Folgeschäden, nachträglich das rissüberbrückende WestWood Wecryl Oberflächenschutzsystem OS 10 einzusetzen…</p>
                    
                    <footer class="mt-md-5">
                        <a href="#" class="ww-button ww-button--hollow ww-button--arrow">weiterlesen</a>
                    </footer>
                </div>

            </article>
        </div>
        <?php endif; ?>
        <div id="ww-references-slider">
            <agile :options="myOptions">
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
            </agile>
        </div>

        <div class="container p-2">
            <a href="#" class="ww-button ww-button--hollow ww-button--full my-2 my-md-4">Alle Referenzen</a>
        </div>

    </div>
</section>