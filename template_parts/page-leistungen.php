<?php
/*
 Template Name: Leistungen
*/ ?>
<?php get_header(); ?>
<main>
    <div class="pageTitle">
        <div class="wrap">
            <div class="text"><h1>Leistungen <br> <span>von Kühle-Webdesign</span></h1></div>
            <div class="image"><img src=" <?php echo get_template_directory_uri() . '/assets/images/webdevelopment.png' ?> " alt="Leistungen von Kuehle-Webdesign"></div>
        </div>
    </div>
    <div class="row">
        <h2><b>Das ist in jedem Paket enthalten</b> bei Kühle-Webdesign:</h2>
        <ul class="leistungen listStyle-2">
            <li>Professionelle Betreuung</li>
            <li>Design Besprechung</li>
            <li>Design Erstellung</li>
            <li>Responsive Design</li>
            <li>CMS Wordpress</li>
            <li>SEO (Suchmaschinenoptimierung)</li>
            <li>Lizenzierte Bilder von ShutterStock</li>
            <li>Server & Domain Hosting</li>
            <li>Design Umsetzung nach Abnahme</li>
            <li>Enge Zusammenarbeit bis zum Abschluss</li>
        </ul>
    </div>
    <div class="row overflowX">
        <table class="table packetLeistungen" width="100" cellpadding="0" cellspacing="0" style="border-spacing: 10px 0;">
            <!-- Header of the Table -->
            <tr class="tableHead">
                <td><h2>Packet Unterscheidungen</h2></td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconStarter.svg' ?>" type="image/svg+xml">Starter</object>
                </td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconBasic.svg' ?>" type="image/svg+xml">Basic</object>
                </td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconBusiness.svg' ?>" type="image/svg+xml">Business</object>
                </td>
            </tr>

            <tr class="title">
                <th class="title">Leistungen</th>
                <th class="starter">Starter</th>
                <th class="basic">Basic</th>
                <th class="business">Business</th>
            </tr>

            <tr>
                <td>Stunden für die Design Phase
                    <small>(maximal)</small>
                </td>
                <td class="starter">24</td>
                <td class="basic">48</td>
                <td class="business">56</td>
            </tr>

            <tr>
                <td>Stunden für die Umsetzung
                    <small>(Wordpress, Php, Javascript, CSS3)</small>
                </td>
                <td class="starter">40</td>
                <td class="basic">60</td>
                <td class="business">75</td>
            </tr>

            <tr>
                <td>Seiten
                    <small>(Pflichtseiten ausgenommen wie Impressum Datenschutzerklärung etc)</small>
                </td>
                <td class="starter">max 4</td>
                <td class="basic">max 8</td>
                <td class="business">max 12</td>
            </tr>

            <tr>
                <td>Suchmachinen Optimierung Analyse & Stundeninvestition</td>
                <td class="starter">4</td>
                <td class="basic">12</td>
                <td class="business">16</td>
            </tr>

            <tr>
                <td>Lizensierte Bilder von ShutterStock</td>
                <td class="starter">3</td>
                <td class="basic">6</td>
                <td class="business">12</td>
            </tr>

            <tr>
                <td>Bildergalerien</td>
                <td class="starter">3</td>
                <td class="basic">6</td>
                <td class="business">12</td>
            </tr>

            <tr>
                <td>Slider
                    <small>(maximal)</small>
                </td>
                <td class="starter">1</td>
                <td class="basic">2</td>
                <td class="business">4</td>
            </tr>

            <tr>
                <td>Individuelle Felder im Kontaktformular</td>
                <td class="starter">Nein</td>
                <td class="basic">Ja</td>
                <td class="business">Ja</td>
            </tr>

            <tr>
                <td>Server Speicher Limit
                    <small>(für Bilder, Videos, etc.)</small>
                </td>
                <td class="starter">1GB</td>
                <td class="basic">5GB</td>
                <td class="business">10GB</td>
            </tr>

            <tr>
                <td>Kostenlose Inhaltliche Aktualisierungen pro Jahr
                    <small>(Preislisten, Produktangebote, etc.)</small>
                </td>
                <td class="starter">2</td>
                <td class="basic">4</td>
                <td class="business">8</td>
            </tr>
        </table>
    </div>
    <div class="row projektAblauf">
        <h2><b>Projektablauf:</b> Wie läuft ein Projekt ab?</h2>
        <div class="col md-6">
            <div class="projektContainer">
                <div class="station st-1">
                    <h3>Beratung & Informations Gespräch</h3>
                    <p>hier was im Erstgespräch reingehört</p>
                </div>
                <div class="station st-2">
                    <h3>Vertrag und Leistung</h3>
                    <p>Hier wird der vertrag erläutert und nach abschluss</p>
                </div>
                <div class="station st-3">
                    <h3> Ziel & Designdefinition </h3>
                    <p>Hier wird das Ziel wie Zielgruppe, Produktpräsentation, Farben, Layout etc besprochen für die Weiteren Phasen.</p>
                </div>
                <div class="station st-4">
                    <h3>Design Phase - Designerstellung</h3>
                    <p>Sind alle Formalitäten geklärt, beginnt die Design-Phase.</p>
                </div>
                <div class="station st-5">
                    <h3>Designpräsentation </h3>
                    <p>Erst wenn das Design abgenommen wird, beginnt die nächste Phase.</p>
                </div>
                <div class="station st-6">
                    <h3>Lorem ipsum dolor </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur at cum eos, esse facilis laboriosam nostrum, nulla optio quas quibusdam ratione vitae
                        voluptatem! Amet culpa ea illo sed veritatis?</p>
                </div>
                <div class="station st-7">
                    <h3>Lorem ipsum dolor </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur at cum eos, esse facilis laboriosam nostrum, nulla optio quas quibusdam ratione vitae
                        voluptatem! Amet culpa ea illo sed veritatis?</p>
                </div>
                <div class="station st-8">
                    <h3>Lorem ipsum dolor </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur at cum eos, esse facilis laboriosam nostrum, nulla optio quas quibusdam ratione vitae
                        voluptatem! Amet culpa ea illo sed veritatis?</p>
                </div>
            </div>
        </div>
        <div class="col prefix-md-1 md-5">
            <div class="row infos">
                <div class="col">
                    <h4>Telefon</h4>
                    <p>Am liebsten nutze ich als Informationsaustausch das gute alte Telefon. Über Telefon lassen sich schnell und Unkompliziert Wünsche und Ziele besprechen.</p>
                </div>

                <div class="col">
                    <h4>Email</h4>
                    <p>Am liebsten nutze ich als Informationsaustausch das gute alte Telefon. Über Telefon lassen sich schnell und Unkompliziert Wünsche und Ziele besprechen.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fullRow calltoActionEnd">
        <div class="row">
            <div class="col">
                <h2>Professionelle Websites erstellen lassen <span>bei Kuehle-Webdesign.</span></h2>
            </div>
            <div class="col">
                <p>Bevor ich ein Projekt erstellen kann, erhalten Sie eine professionelle Beratung, die auf Ihre Wünsche und die Anforderungen Ihrer Besucher
                    eingeht. Lassen Sie uns gemeinsam eine erfolgreiche Website erstellen!</p>
                <a href="#" class="btn btn-1"><span class="icon-pencil"></span>Anfrage senden</a>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
