<?php
/*
	Template Name: Kontaktformular
*/
get_header(); ?>
<main>
    <div class="row">
        <div class="titleBox">
            <h1>Kontakt</h1>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sendMail.svg' ?>" alt="Kontaktdaten von Kühle-Webdesign">
        </div>
    </div>
    <div class="row">
        <div class="col md-6 lg-8">
            <img class="kontakt logo" src="<?php echo get_template_directory_uri() . '/assets/images/logoBlackGreen.svg' ?>" alt="Kühle-Webdesign in Berlin">
            <address class="kontakt adress-1">
                <div class="row">
                    <span class="sm-3 default-5 md-4 lg-2">Name:</span> <span class="default-7 sm-9 md-8 lg-10">Kevin Kühle</span>
                </div>
                <div class="row">
                    <span class="sm-3 default-5 md-4 lg-2">Adresse:</span> <span class="default-7 sm-9 md-8 lg-10">Waldsassener Str. 29 <br> 12279, Berlin</span></div>
                <div class="row">
                    <span class="sm-3 default-5 md-4 lg-2">Telefon:</span> <span class="default-7 sm-9 md-8 lg-10">030 - 915 75 222</span></div>
                <div class="row">
                    <span class="sm-3 default-5 md-4 lg-2">E-Mail:</span> <span class="default-7 sm-9 md-8 lg-10">kuehle@kuehle-webdesign.de</span></div>
                <div class="row">
                    <span class="sm-3 default-5 md-4 lg-2">Adresse:</span> <span class="default-7 sm-9 md-8 lg-10">Waldsassener Str. 29</span></div>
                <div class="row">
            </address>
        </div>
        <div class="col md-6 lg-4">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else: ?>
                <p>Keine Posts</p>
			<?php endif ?>
        </div>
    </div>
</main>
<?php get_footer() ?>

