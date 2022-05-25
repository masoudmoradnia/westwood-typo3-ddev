<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>

<?php include __ROOT__."/components/hero/heroSingle.php"; ?>

<div class="ww-notification">
    <div class="ww-notification__title">
        WestWood Kunststofftechnik GmbH
    </div>
    <div class="ww-notification__content">
        <p>An der Wandlung 20, <br>
        32469 Petershagen (OT Lahde) <br>
        Postfach 1102, <br>
        32458 Petershagen <br>
        Tel.: +49 5702 8392-0 <br>
        Fax +49 5702 8392-22 <br>
        info@westwood.de</p>
        <button class="ww-button ww-button--secondary ww-button--negative">Route planen</button>
    </div>
</div>

<main class="ww-area--primary">
    <?php $headline = "Kontakt"; $image=false; include __ROOT__."/components/headline/headline.php"; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1 class="text-primary">Kompetente Beratung vor Ort</h1>
                <p>Jedes Projekt ist einzigartig und erfordert eine individuelle Beratung. WestWood ist dabei für wirtschaftlich sinnvolle und durchdachte Lösungen bekannt. Für die qualitativ hochwertige und langlebige Ausführung sorgen ausgewählte Verarbeiter, die vom WestWood Team umfassend geschult werden.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11">

                <div class="row g-4">

                    <div class="col-lg-6">
                        <div class="ww-contactBox gap-2 gap-lg-0 d-flex flex-column flex-sm-row">
                            <div class="ww-contactBox__image">
                                <img src="https://picsum.photos/220" alt="">
                            </div>
                            <div class="ww-contactBox__content">
                                <p class="fs-5 text-primary">Thomas Menzel</p>
                                <p class="fw-bold">Vertriebsleiter Deutschland</p>
                                <p>WestWood Kunststofftechnik GmbH An der Wandlung 20 32469 Petershagen Tel.: +49 57 02 / 83 92 -0 vertrieb@westwood.de</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ww-contactBox gap-2 gap-lg-0 d-flex flex-column flex-sm-row">
                            <div class="ww-contactBox__image">
                                <img src="https://picsum.photos/220" alt="">
                            </div>
                            <div class="ww-contactBox__content">
                                <p class="fs-5 text-primary">Andreas Lomitschka</p>
                                <p class="fw-bold">Vertrieb und Technik Balkon, Laubengang, Treppe</p>
                                <p>Mobil: +49 151 / 52 55 39 81 <br>alomitschka@westwood.de</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ww-contactBox gap-2 gap-lg-0 d-flex flex-column flex-sm-row">
                            <div class="ww-contactBox__image">
                                <img src="https://picsum.photos/220" alt="">
                            </div>
                            <div class="ww-contactBox__content">
                                <p class="fs-5 text-primary">Dennis Weitz, B.A. BWL (FH)</p>
                                <p class="fw-bold">Key-Account-Management Straße, Brücke, Verkehr</p>
                                <p>Mobil: +49 170 / 70 17 036 <br> dweitz@westwood.de</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ww-contactBox gap-2 gap-lg-0 d-flex flex-column flex-sm-row">
                            <div class="ww-contactBox__image">
                                <img src="https://picsum.photos/220" alt="">
                            </div>
                            <div class="ww-contactBox__content">
                                <p class="fs-5 text-primary">Sebastian Lücke, M. Eng.</p>
                                <p class="fw-bold">Vertrieb und Technik Parken</p>
                                <p>Mobil: +49 171 / 56 25 906 sluecke@westwood.de</p>
                            </div>
                        </div>
                    </div>



                </div>

                
            </div>
        </div>
    </div>

    <section class="ww-contact__national">
        <div class="container">
            <div class="row gap-2">
                <div class="col-lg">
                    <h1 class="text-primary mb-3">Vertrieb national</h1>
                    <p>Die Fachberater aus dem Bereich Vertrieb und Technik stehen Ihnen bei Fragen jederzeit gern zur Verfügung und stellen bei Bedarf den Kontakt zur WestWood-Anwendungstechnik her.</p>
                    <p class="fw-bold">
                        <img class="h-6 me-2" src="/assets/img/mouse-pointer-solid.svg" alt="">
                        Bitte wählen Sie ihre Region auf der Karte.
                    </p>

                    <!-- TODO: If corresponding area is selected on map, show contact information -->
                    <div class="d-inline-block bg-primary text-white p-3">
                        <p class="fs-5 mb-0">Claus Bossel</p>
                        <p class="fw-bold mb-0">Vertrieb und Technik Region Nord</p>
                        <p>Mobil: +49 171 / 76 72 378 <br> cbossel@westwood.de</p>
                    </div>
                </div>
                <div class="col-lg">
                    <!-- TODO: Implement SVG Map -->
                    <img class="ww-contact__map" src="/assets/img/516551_AD_Karte_2019_GRUEN.svg" alt="">
                    <!-- <div class="demo-map"></div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="ww-contact__international my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-primary mb-3">Vertrieb international</h1>
                </div>
                <div class="col-sm">
                    <p>WestWood Kunststofftechnik GmbH</p>
                    <p>An der Wandlung 20 <br>
                    32469 Petershagen <br>
                    Tel.: +49 57 02 / 83 92 -0 <br>
                    Fax: +49 57 02 / 735 98 -29</p>
                </div>
                <div class="col-sm">
                    <p class="fw-bold">International Sales Manager / Vertriebsleiter</p>
                    <p>Thomas Menzel <br>
                    international@westwood.de<br>
                    Tel.: +49 57 02 / 83 92 -0 <br>
                    Fax: +49 57 02 / 73 598 -29</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ww-contactform">
        <aside>
            <img class="img-cover" src="https://picsum.photos/1600/750" alt="">
        </aside>
        <div class="container p-5">
            <div>
                <h1 class="text-primary">Kontaktformular</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco poriti laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in uienply voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <form action="">
            <div class="row g-4">
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Vor- und Nachname">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Straße">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="PLZ">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Ort">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="E-Mail Adresse*">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Telefonnummer*">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Firma">
                </div>
                <div class="col-sm-6 col-md-4">
                    <input type="text" placeholder="Funktion">
                </div>
                <div class="col-md-8">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Ihre Nachricht*"></textarea>
                </div>
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <label class="d-flex gap-2">
                        <input type="checkbox" class="mt-2">
                        <p>
                        WestWood schützt persönliche Daten gewissenhaft und verwendet sie ausschließlich zu dem Zweck, zu dem sie zur Verfügung gestellt werden. Mit der Erhebung und Verwendung dieser personenbezogenen Daten (siehe <a href="">Datenschutz</a>) bin ich einverstanden. *
                        </p>
                    </label>
                    <button type="submit" class="ww-button ww-button--primary ww-button--full">Senden</button>
                </div>
            </div>
            </form>
        </div>
    </section>

</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>