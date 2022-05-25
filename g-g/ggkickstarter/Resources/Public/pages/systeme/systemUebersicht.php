<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>

<main class="ww-systems">
    <div class="container p-5">
        <h1 class="text-primary text-center mb-4">Wecryl Systeme</h1>
        <div class="row">
            <div class="col-md-8">
                <h2 class="fs-5">Wecryl sind hochreaktive Produkte auf Basis von Polymethylmethacrylaten (PMMA).</h2>
                <p>
                    Sie bieten ein breites Anwendungsspektrum und den neuesten Entwicklungsstand. Rohstoffe, Produktionsabläufe und Fertigprodukte unterliegen laufend umfassenden Qualitätskontrollen. Neue Produkte und Systeme werden vor der Markteinführung intensiv getestet und von erfahrenen Fachverlegern im Praxiseinsatz erprobt. Selbstverständlich liegen für die Abdichtungs- und Beschichtungssysteme Prüfzeugnisse vor.
                </p>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <img class="img-fluid" src="https://picsum.photos/380" alt="">
            </div>
        </div>
    </div>

    <div class="container ww-systems__grid">
        <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-4">

            <?php for ($i=0; $i < 16; $i++): ?>
            <div class="col">
                <div class="ww-systems__griditem">
                    <img class="img-fluid" src="https://picsum.photos/260" alt="">
                    <div class="ww-systems__griditem__title">
                        <p>Wecryl</p>
                        <p>Abdichtungssystem unter Fremdbelägen</p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

        </div>
    </div>


</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>