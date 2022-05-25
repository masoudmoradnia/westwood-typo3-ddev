<?php include __ROOT__."/components/pageheader/pageheader.php"; ?>
<?php include __ROOT__."/components/hero/heroSingle.php"; ?>
<main class="ww-area--dach" id="ww-reference-report">
    <?php 
        $headline = "Flachdachsanierung, Industriehalle";
        $subline = "Schwabmünchen, Deutschland";
        $image='<svg xmlns="http://www.w3.org/2000/svg" width="101" height="164" viewBox="0 0 101 164"><defs></defs><g transform="translate(-760 -3808)"><rect fill="#930055" width="101" height="164" transform="translate(760 3808)"/><text fill="#ffffff" font-size="78" transform="translate(785 3953)"><tspan x="0" y="0">D</tspan></text></g></svg>';
        include __ROOT__."/components/headline/headline.php"; ?>


    <section class="ww-area-teaser">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5 d-md-flex flex-column justify-content-md-center">
                    <table>
                        <tr>
                            <th>Zeitraum</th>
                            <td>September 2015</td>
                        </tr>
                        <tr>
                            <th>Fläche</th>
                            <td>ca. 1.700 m²</td>
                        </tr>
                        <tr>
                            <th>Untergrund</th>
                            <td>Dachabdichtungsbahn (EVA)</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-7">
                    <agile :options="options1">
                        <img src="https://picsum.photos/300/200" alt="">
                        <img src="https://picsum.photos/300/200" alt="">
                        <img src="https://picsum.photos/300/200" alt="">
                    </agile>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p>In der Fertigungshalle des mittelständischen Unternehmens DITTRICH+CO stehen modernste Spritzgussmaschinen, die im Drei-Schicht-Betrieb rund um die Uhr produzieren. Damit schied ein Abriss der undichten Dachabdichtung und ein damit eventuell verbundener Produktionsausfall generell aus. Als wurzelfeste und gegen Flugfeuer und strahlende Wärme widerstandsfähige Abdichtung (harte Bedachung) kam bei der substanzerhaltenden Dachsanierung das geprüfte und zugelassene Wecryl Dachabdichtungssystem zum Einsatz.</p>

                <div class="row">
                    <div class="col-md">
                        <p class="fw-bold">Verwendete Systeme</p>
                        <ul class="ww-list--plus">
                            <li>
                                <a href="">Wecryl 110</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                    <p class="fw-bold">Downloads</p>
                        <ul class="ww-list--download">
                            <li>
                                <a href="">PDF | Referenzreport</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        $featured = false; 
        include __ROOT__."/components/reference/reference.php"; 
    ?>

</main>

<?php include __ROOT__."/components/pagefooter/pagefooter.php"; ?>