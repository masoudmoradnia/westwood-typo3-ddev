<section class="ww-fabricatorsearch" id="ww-fabricatorsearch">
    <aside>
        <picture>
            <source media="(min-width: 1200px)" srcset="assets/img/fachverarbeitersuche/fachverarbeitersuche_1600.jpg">

            <source media="(min-width: 992px)" srcset="assets/img/fachverarbeitersuche/fachverarbeitersuche_1200.jpg">

            <source media="(min-width: 768px)" srcset="assets/img/fachverarbeitersuche/fachverarbeitersuche_800.jpg">

            <source media="(min-width: 576px)" srcset="assets/img/fachverarbeitersuche/fachverarbeitersuche_640.jpg">

            <source srcset="assets/img/fachverarbeitersuche/fachverarbeitersuche_640.jpg">

            <img src="assets/img/fachverarbeitersuche/fachverarbeitersuche_640.jpg" alt="">
        </picture>
    </aside>
    <div class="ww-fabricatorsearch__content container">
        <h1 class="text-primary font-weight-bold">Fachverarbeitersuche</h1>
        <form action="" class="ww-fabricatorsearch__form" @submit.prevent ref="ww-fabricatorsearch__form" >
            <fieldset v-show="currentStep == 1">
                <p>Wie finde ich einen qualifizierten Fachverarbeiter in der Nähe? – Hier nennen wir Ihnen nach einigen Klicks zertifizierte Fachunternehmen. Bitte geben Sie an, wo Sie welche Baumaßnahme planen. Sie erhalten die Liste der passenden Fachbetriebe per E-Mail. Übrigens: alle aufgeführten Unternehmen bilden sich regelmäßig bei uns fort und erweitern ihre Qualität und Erfahrung.</p>

                <ol>
                    <li>
                        <label for="">Bitte geben Sie den Standort Ihres Bauvorhabens ein.</label>
                        <input type="text" placeholder="Straße, PLZ, Ort">
                    </li>
                    <li>
                        <label for="">Wo und wie soll WestWood zum Einsatz kommen?</label>
                        <select name="" id="" v-model="selectedArea">
                            <option value="" selected disabled>Einsatzgebiet</option>
                            <option value="parken">Parken</option>
                            <option value="balkon">Balkon</option>
                        </select>
                    </li>                    
                    <li v-if="selectedArea">
                        <label>
                            Jedes Bauvorhaben hat seine Besonderheiten. Damit wir Ihnen die richtigen Verarbeiter nennen können, geben Sie bitte das zu sanierende Bauteil an (Mehrfachnennung möglich).
                        </label>

                        <div v-if="selectedArea == 'parken'" class="ww-fabricatorsearch__bauteile">
                            <div>
                                <input name="bauteil[rampe]" type="number" placeholder="00"> Rampe
                            </div>
                            <div>
                                <input name="bauteil[treppe]" type="number" placeholder="00"> Treppe
                            </div>
                            <div>
                                <input name="bauteil[tiefgarage]" type="number" placeholder="00"> Tiefgarage
                            </div>
                            <div>
                                <input name="bauteil[topdeck]" type="number" placeholder="00"> Topdeck
                            </div>
                            <div>
                                <input name="bauteil[zwischendeck]" type="number" placeholder="00"> Zwischendeck
                            </div>
                        </div>

                        <div v-if="selectedArea == 'balkon'" class="ww-fabricatorsearch__bauteile">
                            <div>
                                <input name="bauteil[balkon]" type="number" placeholder="00"> Balkon
                            </div>
                            <div>
                                <input name="bauteil[laubengang]" type="number" placeholder="00"> Laubengang
                            </div>
                            <div>
                                <input name="bauteil[terrasse]" type="number" placeholder="00"> Terrasse
                            </div>
                            <div>
                                <input name="bauteil[treppe]" type="number" placeholder="00"> Treppe
                            </div>
                        </div>

                    </li>
                    <li v-if="selectedArea">
                        <label for="">Ihr Bauvorhaben umfasst eine Gesamtfläche von:</label>
                        <div class="row align-items-center">
                            <div class="col">
                                <input type="text" placeholder="ca. qm"> 
                            </div>
                            <div class="col">
                                <div>Quadratmeter</div>
                            </div>
                        </div>
                    </li>
                </ol>

                <button type="button" class="ww-button ww-button--primary" @click="nextStep">weiter</button>
            </fieldset>
            <fieldset v-show="currentStep == 2">

                <p class="text-primary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam,.
                </p>

                <div class="row g-4">
                    <div class="col-sm-4">
                        <select>
                            <option value="" selected disabled>Anrede</option>
                            <option value="Herr">Herr</option>
                            <option value="Frau">Frau</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Vorname">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Nachname">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="E-Mail Adresse">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Telefonnummer">
                    </div>
                </div>
                
               <div class="row mt-4">
                   <div class="col-sm-8">
                       <textarea cols="30" rows="10" placeholder="Ihre Nachricht"></textarea>
                   </div>
                   <div class="col-sm">
                    <label>
                        <input type="checkbox" name="" id="">
                        Ich habe die Datenschutzerklärung gelesen und stimme dieser zu.*
                    </label>
                    <label>
                        <input type="checkbox" name="" id="">
                        Ich bin damit einverstanden, dass meine Kontaktdaten für eine Beratung oder die Zusendung von Unterlagen an einen autorisierten Westwood Fachverleger gesendet werden.*
                    </label>
                   </div>
               </div>
                
                
                

                <div class="row gx-5 mt-4">
                    <div class="col">
                        <button type="button" class="col ww-button ww-button--secondary" @click="previousStep">zurück</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="col ww-button ww-button--primary ww-button--full" @click="submitForm">Anfrage starten</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</section>