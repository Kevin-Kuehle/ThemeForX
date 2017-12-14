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
	<div class="row">
		<h2>Packet Unterscheidungen</h2>

		<table class="packetLeistungen" width="100">
			<!-- Header of the Table -->
			<tr>
				<td><h2>Packet Unterscheidungen</h2></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr class="title">
				<th>Leistungen</th>
				<th>Starter</th>
				<th>Basic</th>
				<th>Business</th>
			</tr>
			
			<tr>
				<td>Stunden für die Design Phase (maximal)</td>
				<td>24</td>
				<td>48</td>
				<td>60</td>
			</tr>

			<tr>
				<td>Stunden für die Umsetzung (Wordpress, Php, Javascript, CSS3)</td>
				<td>23</td>
				<td>11</td>
				<td>44</td>
			</tr>

			<tr>
				<td>Suchmachinen Optimierung Analyse & Stundeninvestition</td>
				<td>224</td>
				<td>12</td>
				<td>43</td>
			</tr>

			<tr>
				<td>Lizensierte Bilder von ShutterStock</td>
				<td>3</td>
				<td>6</td>
				<td>12</td>
			</tr>
		</table>
	</div>

</main>
<?php get_footer(); ?>
