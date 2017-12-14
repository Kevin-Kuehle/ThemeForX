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
            <li>SSL Zertifikat</li>
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
            <tr>
                <td><h2>Packet Unterscheidungen</h2></td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconStarter.svg' ?>" type="image/svg+xml">Starter</object></td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconBasic.svg' ?>" type="image/svg+xml">Basic</object></td>
                <td>
                    <object class="logo" width="75" data="<?php echo get_template_directory_uri() . '/assets/images/iconBusiness.svg' ?>" type="image/svg+xml">Business</object></td>
            </tr>

            <tr class="title">
                <th class="title">Leistungen</th>
                <th class="starter">Starter</th>
                <th class="basic">Basic</th>
                <th class="business">Business</th>
            </tr>

            <tr>
                <td>Stunden für die Design Phase (maximal)</td>
                <td class="starter">24</td>
                <td class="basic">11</td>
                <td class="business">60</td>
            </tr>

            <tr>
                <td>Stunden für die Umsetzung (Wordpress, Php, Javascript, CSS3)</td>
                <td class="starter">23</td>
                <td class="basic">11</td>
                <td class="business">44</td>
            </tr>

            <tr>
                <td>Suchmachinen Optimierung Analyse & Stundeninvestition</td>
                <td class="starter">224</td>
                <td class="basic">12</td>
                <td class="business">43</td>
            </tr>

            <tr>
                <td>Lizensierte Bilder von ShutterStock</td>
                <td class="starter">3</td>
                <td class="basic">6</td>
                <td class="business">12</td>
            </tr>
        </table>
    </div>

</main>
<?php get_footer(); ?>
