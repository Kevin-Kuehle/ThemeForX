<?php
/*
 Template Name: Leistungen
*/ ?>
<?php get_header(); ?>
<main>
    <div class="pageTitle">
        <div class="row">
            <div class="col lg-4">
                <h1>Leistungen <br> <span>von Kühle-Webdesign</span></h1>
            </div>
            <div class="col prefix-lg-1 md-2 package">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/iconStarter.svg' ?>" alt="Starter Paket von Kühle-Webdesign in Berlin">
                <span>Starter</span>
            </div>
            <div class="col lg-2 package">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/iconBasic.svg' ?>" alt="Basic Paket von Kühle-Webdesign in Berlin">
                <span>Basic</span>
            </div>
            <div class="col lg-2 package">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/iconBusiness.svg' ?>" alt="Business Paket von Kühle-Webdesign in Berlin">
                <span>Business</span>
            </div>
        </div>
    </div>
    <div class="row">
        <h2><b>Das ist in jedem Paket enthalten</b> bei Kühle-Webdesign:</h2>
        <ul class="leistungen listStyle-2">
            <li>professionelle Betreuung</li>
            <li>Design Besprechung</li>
            <li>Design Erstellung</li>
            <li>Responsive Design</li>
            <li>CMS Wordpress</li>
            <li>SEO
                <small> (Suchmaschinenoptimierung)</small>
            </li>
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
                <td class="starter">16</td>
                <td class="basic">24</td>
                <td class="business">40</td>
            </tr>
            <tr>
                <td>Stunden für die Umsetzung
                    <small>(Wordpress, Php, Javascript, CSS3)</small>
                </td>
                <td class="starter">40</td>
                <td class="basic">80</td>
                <td class="business">120</td>
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
                <td class="starter">2</td>
                <td class="basic">8</td>
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
                <td class="basic">2GB</td>
                <td class="business">5GB</td>
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
                    <h3>Beratung & Planung:</h3>
                    <p>Lassen sie sich Kostenlos von mir Beraten. Zusammen besprechen wir ihre Vorstellungen und Wünsche, die ihre Webseite für Ihr Unternehmen mitbringen muss. </p>
                </div>
                <div class="station st-2">
                    <h3>Intensiv Planung:</h3>
                    <p>Haben wir uns ein grobes Konzept ausgetüftelt wie die Webseite auf Ihre Kunden wirken muss, brauche für ein individuelles Design so viele Informationen wie möglich.
                        Beispielsweise Firmenlogo, Schriftart, Unternehmenssitz, Partnerfirmen usw... All diese Informationen haben meist einen Einfluss auf das Design.</p>
                </div>
                <div class="station st-3">
                    <h3>Vertragsbesprechung:</h3>
                    <p>Sind alle Planungsvorkehrungen getroffen, wird ein Vertrag abgeschlossen,wo alle Pflichten beiderseits konkret beschrieben sind.Erst nach erfolgreichem Vertragsabschluss wird das Projekt fortgeführt.</p>
                </div>
                <div class="station st-4">
                    <h3>Desgin Konzeption:</h3>
                    <p>während der Konzeption wird ein maßgeschneidertes Design im
                        Profiprogramm Illustrator CC erstellt. Jedes Design fängt mit einem
                        leeren Blatt an und wird von Grund auf entwickelt. Das Design wird
                        nach den Angaben des Kunden entwickelt.</p>
                </div>
                <div class="station st-5">
                    <h3>Design Abnahme:</h3>
                    <p>Damit das Design in die Programmierung gehen kann, muss es
                        Ihnen gefallen und abgenommen werden. Ist das Design einmal abgenommen,
                        werden keine Änderungen mehr vorgenommen. Und es
                        wird mit der Programmierung fortgesetzt.</p>
                </div>
                <div class="station st-6">
                    <h3>Programmierung:</h3>
                    <p>Die Programmierung ist die aufwendigste Phase während eines Projekts.
                        In der Programmierung wird das CMS aufgesetzt Und das
                        Design in HTML, CSS3, Javascript, und Php geschrieben. Am Ende
                        durchläuft die Seite eine Testphase für Browser. Darin werden Darstellungsprobleme,
                        falls vorhanden behoben, um die Seite auf allen
                        gängigen Browser korrekt darzustellen.</p>
                </div>
                <div class="station st-7">
                    <h3>Projekt Abnahme & Onlinestellung:</h3>
                    <p>Die Webseite wird erst nach der Abnahme online gestellt. Ist das
                        Projekt abgenommen, ist das Projekt beendet. Selbstverständlich
                        werden auftauchende Fehldarstellungen auch nach Projektabnahme
                        kostenlos behoben.</p>
                </div>
                <div class="station st-8">
                    <h3>Abschluss Gespräch:</h3>
                    <p>Am Ende jedes Projektes würde ich mich über ein Feedback freuen
                        und mich der Zufriedenheit Ihrerseits vergewissern.</p>
                </div>
            </div>
        </div>
        <div class="col prefix-md-1 md-5">
            <div class="row infos">
                <div class="col">
                    <h4>Projektdauer</h4>
                    <p>Die Dauer eines Projekts hängt vom Paket und von der Zusammenarbeit
                        ab. Desto schneller Design etc. abgenommen oder besprochen
                        werden, desto schneller wird mit der nächsten Phase begonnen.
                        In der Regel dauert ein Projekt 14 – 30 Tage je nach Paket und Aufwand.</p>

                </div>
                <div class="col">
                    <h4>Vorbereitung</h4>
                    <p>Machen Sie sich Gedanken was sie auf ihrer Webseite Präsentieren
                        möchten. Wie soll Ihre Seite beim Besucher wirken? Informative und
                        schlicht, verspielt und Bund, sollen Bilder zum Träumen anregen?
                        Machen Sie sich im Vorfeld eine Vorstellung. Schauen Sie sich Beispiele
                        im Internet an und lassen sie sich Inspirieren. Natürlich helfe
                        ich Ihnen gerne dabei diese Fragen zu Beantworten. Zusammen
                        finden wir das passende für Ihre Zielgruppen.</p>
                </div>
                <div class="col">
                    <h4>Kommunikation</h4>
                    <p>Die üblichen mittel Telefon und E-Mail haben sich aus Erfahrung
                        bisher am besten bewährt. Alle wichtigen Informationen lassen sich
                        schnell und Unkompliziert am Telefon besprechen oder Bilder per
                        E-Mail Austauschen. Ich statte keine Hausbesuche oder der gleichen
                        ab. Dafür bin ich an meinem Arbeitsplatz sehr häufig zu erreichen.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fullRow calltoActionEnd">
        <div class="row">
                <h2>Professionelle Websites erstellen lassen <span>bei Kuehle-Webdesign.</span></h2>
            <div class="col">
                <p>Bevor ich ein Projekt erstellen kann, erhalten Sie eine professionelle Beratung, die auf Ihre Wünsche und die Anforderungen Ihrer Besucher
                    eingeht. Lassen Sie uns gemeinsam eine erfolgreiche Website erstellen!</p>
                <a href="#" class="btn btn-1"><span class="icon-pencil"></span>Anfrage senden</a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
